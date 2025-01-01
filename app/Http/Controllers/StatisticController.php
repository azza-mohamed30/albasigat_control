<?php

namespace App\Http\Controllers;

use App\Models\Statistic;
use App\Models\User;
use Illuminate\Http\Request;

class StatisticController extends Controller
{

    public function index()
    {
        $statistics = Statistic::all();
        return view('dashboard.statistics.index', compact('statistics'));
    }// end of index

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $id = auth()->user()->id;
        $users = User::whereId($id)->first();
        return view('dashboard.statistics.create',compact('users'));
    }// end of create

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'events' => 'required',
            'volunteers' => 'required',
            'recipients' => 'required',
            'projects' => 'required',
            'user_id' => 'required',
           ]);
           $request_data = $request->except(['user_id']);
           $request_data['user_id'] = $request->user_id;

        //    $request_data = [
        //     $request_data['events'] = $request->events,
        //     $request_data['volunteers'] = $request->volunteers,
        //     $request_data['recipients'] = $request->recipients,
        //     $request_data['projects'] = $request->projects,
        //     $request_data['user_id'] = $request->user_id,
        // ];
           $statistics = Statistic::create($request_data);


           session()->flash('success', __('تمت الإضافة بنجاح'));

           return redirect()->route('dashboard');

    } //end of store


    public function show(string $id)
    {
        $statistics = Statistic::whereId($id)->first();
        return view('dashboard.statistics.show',compact('statistics'));

    }  //end of store


    public function edit(string $id)
    {
        $statistics = Statistic::whereId($id)->first();

        $users = User::whereId($statistics->user_id)->first();

       return view('dashboard.statistics.edit', compact('users','statistics'));

    } // end of edit


    public function update(Request $request, string $id)
    {
        $statistics = Statistic::whereId($id)->first();
        $request->validate([

            'events' => 'required',
            'volunteers' => 'required',
            'recipients' => 'required',
            'projects' => 'required',
           ]);

           $request_data = $request->except(['user_id']);
           $request_data['user_id'] = auth()->user()->id;

           $statistics->update($request_data);


           session()->flash('success', __('تمت التعديل بنجاح'));

           return redirect()->route('statistic.index');

    }// end of update


    public function destroy(string $id)
    {
        $statistics = Statistic::whereId($id)->first();

        $statistics->delete();
        session()->flash('success', ('تم الحذف بنجاح'));
        return redirect()->route('statistic.index');

    }//end of destroy
}
