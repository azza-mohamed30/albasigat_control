<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Opportunity;
use File;

class OpportunityController extends Controller
{
    public function index(Request $request)
    {
        $opportunities = Opportunity::when($request->search, function($query) use ($request){
            return $query->where('title', 'like' , '%' . $request->search .'%');

          })->latest()->paginate(5);
          return view('dashboard.opportunities.index', compact('opportunities'));
    }


    public function create()
    {
        $id = auth()->user()->id;
        $users = User::whereId($id)->first();

        return view('dashboard.opportunities.create',compact('users'));

    } //end of create


    public function store(Request $request)
    {

        $request->validate([

            'user_id' => 'required',
            'title'  => 'required',
           ]);

           $request_data = $request->except(['image']);


           if ($request->image) {
            $request->validate([
                'image' => 'required|mimes:png,jpg,jpeg,jfif|max:2000',
              ]);
              $image = $request->file('image');
              $imageName =  $request->image->hashName();
              $image->move(public_path('images/opportunities/'), $imageName);


            //   $photo_path = store(public_path('uploads/photo_images/' . $request->photos->hashName()));

            $request_data['image'] = 'images/opportunities/'.$imageName;




        }//end of if



           $opportunities = Opportunity::create($request_data);


           session()->flash('success', __('تمت الاضافة بنجاح'));

           return redirect()->route('opportunity.index');
    } //end of store


    public function show(string $id)
    {
        $opportunities = Opportunity::whereId($id)->first();
        return view('dashboard.opportunities.show',compact('opportunities'));

    }  // end of show


    public function edit(string $id)
    {
        $opportunities = Opportunity::whereId($id)->first();
        $users = User::whereId($opportunities->user_id)->first();

       return view('dashboard.opportunities.edit', compact('users','opportunities'));
    } // end of edit


    public function update(Request $request, string $id)
    {

        $opportunities = Opportunity::whereId($id)->first();
        $request->validate([

            'title' => 'required',
           ]);

           $request_data = $request->except(['image', 'user_id']);

           if ($request->image) {

            if ($opportunities->image != 'default.png') {

                File::delete($opportunities->image);

            }//end of inner if

            $request->validate([
                'image' => 'required|mimes:png,jpg,jpeg,jfif|max:2000',
              ]);

              $image = $request->file('image');
              $imageName = time().'_'.$image->getClientOriginalName();
              $image->move(public_path('images/opportunities/'),$imageName);

             $request_data['image'] = 'images/opportunities/'.$imageName;


        }//end of external if

              $request_data['user_id'] = auth()->user()->id;
              $opportunities->update($request_data);



           session()->flash('success', ('تم التعديل بنجاح'));

           return redirect()->route('opportunity.index');
    } //end of update



    public function destroy(string $id)
    {
        $opportunities = Opportunity::whereId($id)->first();
        if ($opportunities->image != 0) {

            File::delete($opportunities->image);

        }//end of if

        $opportunities->delete();
        session()->flash('success', ('تم الحذف  بنجاح'));
        return redirect()->route('opportunity.index');
    }
}
