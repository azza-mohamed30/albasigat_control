<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Employee;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{

    public function index(Request $request)
    {
        $employees = Employee::when($request->search, function($query) use ($request){
            return $query->where('name', 'like' , '%' . $request->search .'%')
            ->orWhere('phone', 'like', '%' . $request->search . '%')
            ->orWhere('job', 'like', '%' . $request->search . '%');

          })->latest()->paginate(5);

          return view('dashboard.employees.index', compact('employees'));
    }


    public function create()
    {
        $id = auth::user()->id;
        $users = User::whereId($id)->first();
        return view('dashboard.employees.create',compact('users'));
    }


    public function store(Request $request)
    {

        $request->validate([

            'name' => 'required',
            'job' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'user_id' => 'required',
           ]);

           $request_data = $request->except(['image']);


           if ($request->image) {
            $request->validate([
                'image' => 'required|mimes:png,jpg,jpeg,jfif|max:2000',
              ]);

              $image = $request->file('image');
              $imageName = time().'_'.$image->getClientOriginalName();
              $image->move(public_path('images/employees_images/'),$imageName);

             $request_data['image'] = 'images/employees_images/'.$imageName;






        }//end of if

           $employees = Employee::create($request_data);


           session()->flash('success', __('تمت اضافة الموظف بنجاح'));

           return redirect()->route('dashboard');

    }  //end of store


    public function show(string $id)
    {
        $employee = Employee::whereId($id)->first();
        return view('dashboard.employees.show',compact('employee'));

    }  //end of store



    public function edit(string $id)
    {
        $employee = Employee::whereId($id)->first();

        $users = User::whereId($employee->user_id)->first();

       return view('dashboard.employees.edit', compact('users','employee'));

    } // end of edit



    public function update(Request $request, string $id)
    {
                $employee = Employee::whereId($id)->first();
        $request->validate([

            'name' => 'required',
            'job' => 'required',
            'phone' => 'required',
            'address' => 'required',

           ]);

           $request_data = $request->except('employee','user_id');
           if ($request->image) {

            if ($employee->image != 'default.png') {

                // Storage::disk('public')->delete('images/news_images/' . $news->image);
                File::delete($employee->image);

            }//end of inner if

            $request->validate([
                'image' => 'required|mimes:png,jpg,jpeg,jfif|max:2000',
              ]);

              $image = $request->file('image');
              $imageName = time().'_'.$image->getClientOriginalName();
              $image->move(public_path('images/employees_images/'),$imageName);

             $request_data['image'] = 'images/employees_images/'.$imageName;


        }//end of external if

           $request_data['user_id'] = auth::user()->id;
           $employee->update($request_data);



           session()->flash('success', ('تم تعديل البيانات بنجاح'));

           return redirect()->route('employees.index');

    } // end of update


    public function destroy(string $id)
    {
        $employee = Employee::whereId($id)->first();
        if ($employee->image != 'default.png') {

            File::delete($employee->image);

        }//end of if

        $employee->delete();
        session()->flash('success', ('تم حذف الموظف بنجاح'));
        return redirect()->route('employees.index');

    }
}
