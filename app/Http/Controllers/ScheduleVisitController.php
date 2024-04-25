<?php

namespace App\Http\Controllers;

use App\Models\Schedule_visit;
use Illuminate\Http\Request;

class ScheduleVisitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schedule_visits = new schedule_visit;
        $schedule_visits = $schedule_visits->paginate(5);
        return view ('Villa.admin.schedule_visit.index', compact('schedule_visits'));
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
        
        $schedule_visits = new schedule_visit;
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'pnumber' => 'required',
                'purpose_of_visit' => 'required',
                'date' => 'required',
                'time' => 'required',
                'message' => 'required',
            ]
        );
        
        $schedule_visits->name =  $request->name;
        $schedule_visits->email = $request->email;
        $schedule_visits->pnumber = $request->pnumber;
        $schedule_visits->purpose_of_visit = $request->purpose_of_visit;
        $schedule_visits->date = $request->date;
        $schedule_visits->time = $request->time;
        $schedule_visits->message = $request->message;
        $schedule_visits->save();

        return redirect('/schedule-visit')->with('message', 'Your appointment has been submitted succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $schedule_visit = new schedule_visit;
        $schedule_visit = $schedule_visit->where('id', $id)->first();
        return view('Villa.Admin.schedule_visit.show', compact('schedule_visit'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Schedule_visit $schedule_visit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Schedule_visit $schedule_visit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        
        $schedule_visit = new schedule_visit;
        $schedule_visit = $schedule_visit->where('id', $id)->first();
        $schedule_visit->delete();
       
        return redirect('admin/schedule_visits')->with('delete', 'Your message have been removed');
    }
}
