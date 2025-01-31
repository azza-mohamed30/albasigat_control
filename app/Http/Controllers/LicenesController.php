<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Licenes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class LicenesController extends Controller
{

    public function index(Request $request)
    {
        $licenes = Licenes::when($request->search, function($query) use ($request){
            return $query->where('title', 'like' , '%' . $request->search .'%');

          })->latest()->paginate(5);

          return view('dashboard.licenes.index', compact('licenes'));
    }


    public function create()
    {
        $id = auth::user()->id;
        $users = User::whereId($id)->first();
        return view('dashboard.licenes.create',compact('users'));
    }


    public function store(Request $request)
    {
        try {

        $request->validate([

            'title' => 'required',
            'user_id' => 'required',

           ]);

           $request_data = $request->except(['licenes']);


           if ($request->licenes) {
            $request->validate([
                'licenes' => 'mimes:pdf,doc,docx,xlsx',
              ]);

              $licene = $request->file('licenes');
              $liceneName = time().'_'.$licene->getClientOriginalName();
              $licene->move(public_path('licenes/'),$liceneName);

             $request_data['licenes'] = 'licenes/'.$liceneName;

        }//end of if


           $licenes = Licenes::create($request_data);


           session()->flash('success', __('تمت اضافة الرخصة بنجاح'));

           return redirect()->route('liceneses.index');
        } catch (\Exception $ex) {
            DB::rollBack();
            return redirect()->back()->with(['error' => 'عفوا حدث خطأ ' . $ex->getMessage()])->withInput();
        }

    }


    public function show(string $id)
    {
        $licenes = Licenes::find($id);

        if(!$licenes){
         return response()->json(['message' => 'لم يتم العثور علي الرخصة']);
        }

        $fileName = $licenes->licenes;
        $filePath = public_path('/'.$fileName);
         return response()->download($filePath);
    }


    public function edit(string $id)
    {
        $licenes = Licenes::whereId($id)->first();
        $users = User::whereId($licenes->user_id)->first();

       return view('dashboard.licenes.edit', compact('users','licenes'));
    }


    public function update(Request $request, string $id)
    {
        $licenes = Licenes::whereId($id)->first();
        try {

        $request->validate([

            'title' => 'required',
            'user_id' => 'required',

           ]);

           $request_data = $request->except(['licenes','user_id']);


           if ($request->licenes) {

        if ($licenes->licenes != 0) {

            File::delete($licenes->licenes);

        }//end of inner if

            $request->validate([
                'licenes' => 'mimes:pdf,doc,docx,xlsx',
              ]);

              $licene = $request->file('licenes');
              $liceneName = time().'_'.$licene->getClientOriginalName();
              $licene->move(public_path('licenes/'),$liceneName);

             $request_data['licenes'] = 'licenes/'.$liceneName;

        }//end of if


        $request_data['user_id'] = auth::user()->id;

           $licenes->update($request_data);


           session()->flash('success', __('تم تعديل اللائحة بنجاح'));

           return redirect()->route('liceneses.index');
        } catch (\Exception $ex) {
            DB::rollBack();
            return redirect()->back()->with(['error' => 'عفوا حدث خطأ ' . $ex->getMessage()])->withInput();
        }
    }


    public function destroy(string $id)
    {
        $licenes = Licenes::whereId($id)->first();
        try {

        if (File::exists($licenes->licenes) ) {

            File::delete($licenes->licenes);
        }//end of if


        $licenes->delete();
        session()->flash('success', ('تم الحذف  بنجاح'));
        return redirect()->route('liceneses.index');
    } catch (\Exception $ex) {
        DB::rollBack();
        return redirect()->back()->with(['error' => 'عفوا حدث خطأ ' . $ex->getMessage()])->withInput();
    }
    }
}
