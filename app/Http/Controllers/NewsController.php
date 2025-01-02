<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
{

    public function index(Request $request)
    {
        $news = News::when($request->search, function($query) use ($request){
            return $query->where('title', 'like' , '%' . $request->search .'%');

          })->latest()->paginate(5);

          return view('dashboard.news.index', compact('news'));
    }


    public function create()
    {
        $id = auth::user()->id;
        $users = User::whereId($id)->first();
        return view('dashboard.news.create',compact('users'));
    }


    public function store(Request $request)
    {

        $request->validate([

            'title' => 'required',
            'description' => 'required',
            'user_id' => 'required',
           ]);

           $request_data = $request->except(['image']);


           if ($request->image) {
            $request->validate([
                'image' => 'required|mimes:png,jpg,jpeg,jfif|max:2000',
              ]);

              $image = $request->file('image');
              $imageName = time().'_'.$image->getClientOriginalName();
              $image->move(public_path('images/news_images'),$imageName);

             $request_data['image'] = 'images/news_images/'.$imageName;






        }//end of if

           $news = News::create($request_data);


           session()->flash('success', __('تمت اضافة الخبر بنجاح'));

           return redirect()->route('dashboard');

    }  //end of store


    public function show(string $id)
    {
        $news = News::whereId($id)->first();
        return view('dashboard.news.show',compact('news'));

    }  //end of store



    public function edit(string $id)
    {
        $news = News::whereId($id)->first();

        $users = User::whereId($news->user_id)->first();

       return view('dashboard.news.edit', compact('users','news'));

    } // end of edit



    public function update(Request $request, string $id)
    {
                $news = News::whereId($id)->first();
        $request->validate([

            'title' => 'required',
            'description' => 'required',

           ]);

           $request_data = $request->except('image','user_id');
           if ($request->image) {

            if ($news->image != 'default.png') {

                // Storage::disk('public')->delete('images/news_images/' . $news->image);
                File::delete($news->image);

            }//end of inner if

            $request->validate([
                'image' => 'required|mimes:png,jpg,jpeg,jfif|max:2000',
              ]);

              $image = $request->file('image');
              $imageName = time().'_'.$image->getClientOriginalName();
              $image->move(public_path('images/news_images'),$imageName);

             $request_data['image'] = 'images/news_images/'.$imageName;


        }//end of external if

           $request_data['user_id'] = auth::user()->id;
           $news->update($request_data);



           session()->flash('success', ('تم تعديل البيانات بنجاح'));

           return redirect()->route('news.index');

    } // end of update


    public function destroy(string $id)
    {
        $news = News::whereId($id)->first();
        if ($news->image != 'default.png') {

            File::delete($news->image);

        }//end of if

        $news->delete();
        session()->flash('success', ('تم حذف الخبر بنجاح'));
        return redirect()->route('news.index');

    }
}
