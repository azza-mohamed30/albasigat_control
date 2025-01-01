<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact_us;

class Contact_usController extends Controller
{
    public function index(Request $request)
    {
        $contact = Contact_us::when($request->search, function($query) use ($request){
            return $query->where('name', 'like' , '%' . $request->search .'%')
            ->orWhere('phone', 'like', '%' . $request->search . '%')
            ->orWhere('work_field', 'like', '%' . $request->search . '%');

          })->latest()->paginate(5);

          return view('dashboard.Contacts.index', compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required',
            'work_field' => 'required',
            'phone' => 'required',
            'message' => 'required',
           ]);

           $request_data['name'] = $request->name;
           $request_data['work_field'] = $request->work_field;
           $request_data['phone'] = $request->phone;
           $request_data['message'] = $request->message;



           $contact= Contact_us::create($request_data);


           session()->flash('success', __('تمت الإضافة بنجاح'));

           return redirect()->route('contact');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contact = Contact_us::whereId($id)->first();

        $contact->delete();
        session()->flash('success', ('تم الحذف بنجاح'));
        return redirect()->route('contact_us.index');
    }
}
