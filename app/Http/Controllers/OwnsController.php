<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Owns;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class OwnsController extends Controller
{
    public function index(Request $request)
    {
        $owns = Owns::when($request->search, function($query) use ($request){
            return $query->where('title', 'like' , '%' . $request->search .'%');

          })->latest()->paginate(5);

          return view('dashboard.owns.index', compact('owns'));
    }


    public function create()
    {
        $id = auth::user()->id;
        $users = User::whereId($id)->first();
        return view('dashboard.owns.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([

            'title' => 'required',
            'owns_file' => 'required',
            'user_id' => 'required',

           ]);

           $request_data = $request->except(['owns_file']);


           if ($request->owns_file) {
            $request->validate([
                'owns_file' => 'mimes:pdf,doc,docx,xlsx',
              ]);

              $own = $request->file('owns_file');
              $ownName = time().'_'.$own->getClientOriginalName();
              $own->move(public_path('owns_files/'),$ownName);

             $request_data['owns_file'] = 'owns_files/'.$ownName;

        }//end of if



           $owns = Owns::create($request_data);


           session()->flash('success', __('تمت اضافة الممتلك بنجاح'));

           return redirect()->route('owns.index');

    }//end of store

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $owns = Owns::find($id);

        return view('dashboard.owns.show', compact('owns'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $owns = Owns::whereId($id)->first();
        $users = User::whereId($owns->user_id)->first();

       return view('dashboard.owns.edit', compact('users','owns'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $owns = Owns::whereId($id)->first();

        $request->validate([

            'title' => 'required',



           ]);

           $request_data = $request->except(['owns_file','user_id']);


           if ($request->owns_file) {

        if ($owns->owns_file != 0) {

            File::delete($owns->owns_file);

        }//end of inner if

            $request->validate([
                'owns_file' => 'mimes:pdf,doc,docx,xlsx',
              ]);

              $own = $request->file('owns_file');
              $ownsName = time().'_'.$own->getClientOriginalName();
              $own->move(public_path('owns_files/'),$ownsName);

             $request_data['owns_file'] = 'owns_files/'.$ownsName;

        }//end of if


        $request_data['user_id'] = auth::user()->id;

           $owns->update($request_data);


           session()->flash('success', __('تم اللتعديل بنجاح'));

           return redirect()->route('owns.index');
    }

    public function download (string $id)
    {
        $owns = Owns::find($id);

        if(!$owns){
         return response()->json(['message' => 'لم يتم العثور علي الممتلك']);
        }

        $ownName = $owns->owns_file;
        $ownPath = public_path('/' .$ownName);
         return response()->download($ownPath);

    }


    public function destroy(string $id)
    {
        $owns = Owns::whereId($id)->first();

        if ($owns->owns_file != 0) {

            File::delete($owns->owns_file);

        }//end of if


        $reports->delete();
        session()->flash('success', ('تم الحذف  بنجاح'));
        return redirect()->route('owns.index');
    }
}
