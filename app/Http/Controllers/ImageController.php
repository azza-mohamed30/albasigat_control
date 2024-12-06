<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{


    public function index(Request $request)
    {
        $images = Image::when($request->search, function($query) use ($request){
            return $query->where('title', 'like' , '%' . $request->search .'%');

          })->latest()->paginate(5);
          return view('dashboard.images.index', compact('images'));
    }



    public function create()
    {

        $id = auth()->user()->id;
        $users = User::whereId($id)->first();

        return view('dashboard.images.create',compact('users'));
    }

    public function store(Request $request)
    {



        $request->validate([

            'user_id' => 'required',
            'title'  => 'required',
           ]);

           $request_data = $request->except(['main_image', 'photo']);


           if ($request->main_image) {
            $request->validate([
                'main_image' => 'required|mimes:png,jpg,jpeg,jfif|max:2000',
              ]);
              $image = $request->file('main_image');
              $imageName =  $request->main_image->hashName();
              $image->move(public_path('images/photo_images/'), $imageName);


            //   $photo_path = store(public_path('uploads/photo_images/' . $request->photos->hashName()));

            $request_data['main_image'] = 'images/photo_images/'.$imageName;




        }//end of if

        if ($request->photos) {
            $request->validate([

                'photos' => 'mimes:png,jpg,jpeg,jfif|max:2000',
              ]);

              $photo = $request->file('photos');
              $photoName =  $request->photos->hashName();
              $photo->move(public_path('images/photo_images/'),$photoName);

            //   $photo_path = store(public_path('uploads/photo_images/' . $request->photos->hashName()));


            $request_data['photos'] = 'images/photo_images/'.$photoName;
            // 'images/news_images/'.$photoName;



        }//end of if

           $images = Image::create($request_data);


           session()->flash('success', __('تمت اضافة الصور بنجاح'));

           return redirect()->route('dashboard');
    } //end of store


    public function edit(string $id)
    {
        $images = Image::whereId($id)->first();
        $users = User::whereId($images->user_id)->first();

       return view('dashboard.images.edit', compact('users','images'));
    } // end of store


    public function update(Request $request, string $id)
    {

        $images = Image::whereId($id)->first();
        $request->validate([

            'title' => 'required',
            'user_id' => 'required',
           ]);

           $request_data = $request->except(['main_image', 'photo']);

           if ($request->main_image) {

            if ($images->main_image != 'default.png') {

                Storage::disk('public')->delete('images/photo_images/' . $images->main_image);

            }//end of inner if

            $request->validate([
                'main_image' => 'required|mimes:png,jpg,jpeg,jfif|max:2000',
              ]);

              $image = $request->file('main_image');
              $imageName = time().'_'.$main_image->getClientOriginalName();
              $image->move(public_path('images/photo_images'),$imageName);

             $request_data['main_image'] = 'images/photo_images/'.$imageName;


        }//end of external if


        if ($request->photos) {

            if ($images->photos != 0) {

                Storage::disk('public')->delete('images/photo_images/' . $images->photos);

            }//end of inner if

            $request->validate([
                'photos' => 'mimes:png,jpg,jpeg,jfif|max:2000',
              ]);

              $photo = $request->file('photos');
              $photoName = time().'_'.$photos->getClientOriginalName();
              $photo->move(public_path('images/photo_images'),$photoName);

             $request_data['photos'] = 'images/photo_images/'.$photoName;


        }//end of external if

           $images->update($request_data);



           session()->flash('success', ('تم التعديل بنجاح'));

           return redirect()->route('photo.index');
    } //end of update






    public function destroy(string $id)
    {

        $images = Image::whereId($id)->first();
        if ($images->main_image != 0) {

            Storage::disk('public_uploads')->delete('/photo_images/' . $images->main_image);

        }//end of if

        if ($images->photos != 0) {

            Storage::disk('public_uploads')->delete('/photo_images/' . $images->photos);

        }//end of if

        $images->delete();
        session()->flash('success', ('تم حذف الصورة بنجاح'));
        return redirect()->route('photo.index');
    }

}
