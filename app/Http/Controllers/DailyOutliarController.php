<?php

namespace App\Http\Controllers;

use App\Models\DailyOutliar;
use Illuminate\Http\Request;

class DailyOutliarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $dailyOutliars = DailyOutliar::all();
        // return view('daily_outliars.index', compact('dailyOutliars'));
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

        DailyOutliar::create($validatedData);

        return redirect()->route('dailyOutliars.index')->with('success', 'Daily Outliar created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DailyOutliar  $dailyOutliar
     * @return \Illuminate\Http\Response
     */
    public function show(DailyOutliar $dailyOutliar)
    {
        $dailyOutliar = DailyOutliar::findOrFail($id);
        return view('daily_outliars.show', compact('dailyOutliar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DailyOutliar  $dailyOutliar
     * @return \Illuminate\Http\Response
     */
    public function edit(DailyOutliar $dailyOutliar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DailyOutliar  $dailyOutliar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DailyOutliar $dailyOutliar)
    {
        $validatedData = $request->validate([
            'patient_id' => 'required',
            'tasks' => 'required',
            'schedule_date' => 'required|date',
            'assigned_to' => 'required',
            'status' => 'required',
        ]);

        $dailyOutliar->update($validatedData);

        return redirect()->route('dailyOutliars.index')->with('success', 'Daily Outliar updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DailyOutliar  $dailyOutliar
     * @return \Illuminate\Http\Response
     */
    public function destroy(DailyOutliar $dailyOutliar)
    {
        $dailyOutliar->delete();
        return redirect()->back()->with('success', 'Daily Outliar deleted successfully!');
    }
}
