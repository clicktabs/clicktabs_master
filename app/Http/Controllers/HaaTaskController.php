<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HaaTask;

class HaaTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'patient_id' => 'required',
            'tasks' => 'required',
            'schedule_date' => 'required|date',
            'assigned_to' => 'required',
            'status' => 'required',
        ]);
        $HaaTask = HaaTask::create($request->all());
        return redirect()->back()->with('success', 'Success!!! HAA Task Saved Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HaaTask $haaTask)
    {
        $validatedData = $request->validate([
            'patient_id' => 'required',
            'tasks' => 'required',
            'schedule_date' => 'required|date',
            'assigned_to' => 'required',
            'status' => 'required',
        ]);

        $haaTask->update($validatedData);

        return redirect()->back()->with('success', 'HAA task updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(HaaTask $haaTask)
    {
        $haaTask->delete();

        return redirect()->route('haa_tasks.index')->with('success', 'HAA task deleted successfully!');
    }
}
