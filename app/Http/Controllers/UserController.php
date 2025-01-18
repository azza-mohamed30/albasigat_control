<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $users = User::when($request->search, function($query) use ($request){
            return $query->where('name', 'like' , '%' . $request->search .'%')
            ->orWhere('email', 'like', '%' . $request->search . '%');

          })->latest()->paginate(5);

          return view('dashboard.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
        $request->validate([

            'name' => 'required',
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => 'required|confirmed',

           ]);

           $request_data = $request->except(['password', 'password_confirmation']);
           $request_data['password']= bcrypt($request->password);


           $user = User::create($request_data);

           session()->flash('success', __('site.added_successfully'));

           return redirect()->route('users.index');
        } catch (\Exception $ex) {
            DB::rollBack();
            return redirect()->back()->with(['error' => 'عفوا حدث خطأ ' . $ex->getMessage()])->withInput();
        }
    }

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
        $user = User::whereId($id)->first();
        return view('dashboard.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::whereId($id)->first();
        try{
        $request->validate([

            'name' => 'required',
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
            'image'  =>'image',
           ]);

           $request_data = $request->except(['image']);


           $user->update($request_data);


           session()->flash('success', __('site.updated_successfully'));

           return redirect()->route('users.index');
        } catch (\Exception $ex) {
            DB::rollBack();
            return redirect()->back()->with(['error' => 'عفوا حدث خطأ ' . $ex->getMessage()])->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $user = User::whereId($id)->first();
        try{

        $user->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('users.index');
    } catch (\Exception $ex) {
        DB::rollBack();
        return redirect()->back()->with(['error' => 'عفوا حدث خطأ ' . $ex->getMessage()])->withInput();
    }
    }
}
