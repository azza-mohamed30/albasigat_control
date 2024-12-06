<?php

namespace App\Http\Controllers;
use App\Models\News;
use App\Models\User;
// use Intervention\Image\ImageManager;

// use Intervention\Image\Drivers\Imagick\Driver;
use Illuminate\Support\Facades\Storage;


use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $news = News::when($request->search, function($query) use ($request){
            return $query->where('title', 'like' , '%' . $request->search .'%');

          })->latest()->paginate(5);
        //   $users = User::whereId($news->user_id)->get();
        //   dd($users);
          return view('dashboard.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $id = auth()->user()->id;
        $users = User::whereId($id)->first();
        return view('dashboard.news.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
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



            // // $request->image->move('uploads/news_images/',$the_file_path);
            // //   $file_ext = $request->image->getClientOriginalExtenstion();
            //   $the_file_path = public_path('uploads/news_images/' . $request->image->hashName());


        }//end of if

           $news = News::create($request_data);


           session()->flash('success', __('تمت اضافة الخبر بنجاح'));

           return redirect()->route('dashboard');
    } //end of store

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $news = News::whereId($id)->first();

        $users = User::whereId($news->user_id)->first();

       return view('dashboard.news.edit', compact('users','news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $news = News::whereId($id)->first();
        $request->validate([

            'title' => 'required',
            'description' => 'required',
            'user_id' => 'required',
           ]);

           $request_data = $request->except('image');
           if ($request->image) {

            if ($news->image != 'default.png') {

                Storage::disk('public')->delete('images/news_images/' . $news->image);

            }//end of inner if

            $request->validate([
                'image' => 'required|mimes:png,jpg,jpeg,jfif|max:2000',
              ]);

              $image = $request->file('image');
              $imageName = time().'_'.$image->getClientOriginalName();
              $image->move(public_path('images/news_images'),$imageName);

             $request_data['image'] = 'images/news_images/'.$imageName;


        }//end of external if

           $news->update($request_data);



           session()->flash('success', ('تم تعديل البيانات بنجاح'));

           return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $news = News::whereId($id)->first();
        if ($news->image != 'default.png') {

            Storage::disk('public')->delete('/news_images/' . $news->image);

        }//end of if

        $news->delete();
        session()->flash('success', ('تم حذف الخبر بنجاح'));
        return redirect()->route('news.index');
    }
}
