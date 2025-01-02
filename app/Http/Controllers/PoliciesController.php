<?php

namespace App\Http\Controllers;
use App\Models\Policies;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class PoliciesController extends Controller
{

    public function index(Request $request)
    {
        $policies = Policies::when($request->search, function($query) use ($request){
            return $query->where('policies_title', 'like' , '%' . $request->search .'%');
            // ->orWhere('frame_title', 'like', '%' . $request->search . '%');

          })->latest()->paginate(5);

          return view('dashboard.policies.index', compact('policies'));
    } //end of index


    public function create()
    {
        $id = auth::user()->id;
        $users = User::whereId($id)->first();
        return view('dashboard.policies.create',compact('users'));

    } //end of create


    public function store(Request $request)
    {

        $request->validate([

            'policies_title' => 'required',
            'user_id' => 'required',
           ]);
           $request_data = $request->except(['policies']);

           if ($request->policies) {
            $request->validate([
                'policies' => 'mimes:pdf,doc,docx',
              ]);

              $policies = $request->file('policies');
              $policiesName = time().'_'.$policies->getClientOriginalName();
              $policies->move(public_path('files/'),$policiesName);

             $request_data['policies'] = 'files/'.$policiesName;

        }//end of if



           $policies = Policies::create($request_data);


           session()->flash('success', __('تمت اضافة السياسة واللائحة بنجاح'));

           return redirect()->route('policie.index');



    }//end of store



    public function show(string $id)
    {
        $policies = Policies::find($id);
        return view('dashboard.policies.show', compact('policies'));
    }



    public function edit(string $id)
    {
        $policies = Policies::whereId($id)->first();
        $users = User::whereId($policies->user_id)->first();

       return view('dashboard.policies.edit', compact('users','policies'));

    } //end of edit



    public function update(Request $request, string $id)
    {

        $policies = Policies::whereId($id)->first();

        $request->validate([

            'policies_title' => 'required',

           ]);

           $request_data = $request->except(['policies','user_id']);


           if ($request->policies) {

        if ($policies->policies != 0) {

            File::delete($policies->policies);

        }//end of inner if

            $request->validate([
                'policies' => 'mimes:pdf,doc,docx,xlsx',
              ]);

              $policie = $request->file('policies');
              $policieName = time().'_'.$policie->getClientOriginalName();
              $policie->move(public_path('files/'),$policieName);

             $request_data['policies'] = 'files/'.$policieName;

        }//end of if


        $request_data['user_id'] = auth::user()->id;

           $policies->update($request_data);


           session()->flash('success', __('تم تعديل اللائحة السياسية بنجاح'));

           return redirect()->route('policie.index');

    }  //end of update

    public function download (string $id)
    {
        $policies = Policies::find($id);

        if(!$policies){
         return response()->json(['message' => 'لم يتم العثور علي السياسة']);
        }

        $fileName = $policies->policies;
        $filePath = public_path('/'.$fileName);
         return response()->download($filePath);
    }


    public function destroy(string $id)
    {

        $policies = Policies::whereId($id)->first();

        if (File::exists($policies->policies) ) {

            File::delete($policies->policies);
        }//end of if
        $policies->delete();
        session()->flash('success', ('تم الحذف  بنجاح'));
        return redirect()->route('policie.index');

    } //end of destroy
}
