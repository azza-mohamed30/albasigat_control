<?php

namespace App\Http\Controllers;
use App\Models\Stiduo;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class StiduoController extends Controller
{
    public function index(Request $request)
    {
        $images = Stiduo::when($request->search, function($query) use ($request){
            return $query->where('title', 'like' , '%' . $request->search .'%');

          })->latest()->paginate(5);
          return view('dashboard.stiduo.index', compact('images'));
    }


    public function create()
    {
        $id = auth::user()->id;
        $users = User::whereId($id)->first();

        return view('dashboard.stiduo.create',compact('users'));

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
              $image->move(public_path('images/stiduo/'), $imageName);


            //   $photo_path = store(public_path('uploads/photo_images/' . $request->photos->hashName()));

            $request_data['image'] = 'images/stiduo/'.$imageName;




        }//end of if



           $images = Stiduo::create($request_data);


           session()->flash('success', __('تمت اضافة الصور بنجاح'));

           return redirect()->route('dashboard');
    } //end of store


    public function show(string $id)
    {
        $images = Stiduo::whereId($id)->first();
        return view('dashboard.stiduo.show',compact('images'));

    }  // end of show


    public function edit(string $id)
    {
        $images = Stiduo::whereId($id)->first();
        $users = User::whereId($images->user_id)->first();

       return view('dashboard.stiduo.edit', compact('users','images'));
    } // end of edit


    public function update(Request $request, string $id)
    {

        $images = Stiduo::whereId($id)->first();
        $request->validate([

            'title' => 'required',
           ]);

           $request_data = $request->except(['image', 'user_id']);

           if ($request->image) {

            if ($images->image != 'default.png') {

                File::delete($images->image);

            }//end of inner if

            $request->validate([
                'image' => 'required|mimes:png,jpg,jpeg,jfif|max:2000',
              ]);

              $image = $request->file('image');
              $imageName = time().'_'.$image->getClientOriginalName();
              $image->move(public_path('images/stiduo/'),$imageName);

             $request_data['image'] = 'images/stiduo/'.$imageName;


        }//end of external if

              $request_data['user_id'] = auth::user()->id;
              $images->update($request_data);



           session()->flash('success', ('تم التعديل بنجاح'));

           return redirect()->route('stiduoes.index');
    } //end of update



    public function destroy(string $id)
    {
        $images = Stiduo::whereId($id)->first();
        if ($images->image != 0) {

            File::delete($images->image);

        }//end of if

        $images->delete();
        session()->flash('success', ('تم حذف الصورة بنجاح'));
        return redirect()->route('stiduoes.index');
    }
}
