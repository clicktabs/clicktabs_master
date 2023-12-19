<?php

namespace App\Http\Controllers;

use App\Models\Dietitian;
use Illuminate\Http\Request;

class DietitianController extends Controller
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

        Dietitian::create($validatedData);

        return redirect()->route('dietitians.index')->with('success', 'Dietitian created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dietitian  $dietitian
     * @return \Illuminate\Http\Response
     */
    public function show(Dietitian $dietitian)
    {
        $dietitian = Dietitian::findOrFail($id);
        return view('dietitians.show', compact('dietitian'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dietitian  $dietitian
     * @return \Illuminate\Http\Response
     */
    public function edit(Dietitian $dietitian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dietitian  $dietitian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dietitian $dietitian)
    {
        $validatedData = $request->validate([
            'patient_id' => 'required',
            'tasks' => 'required',
            'schedule_date' => 'required|date',
            'assigned_to' => 'required',
            'status' => 'required',
        ]);

        $dietitian = Dietitian::findOrFail($id);
        $dietitian->update($validatedData);

        return redirect()->back()->with('success', 'Dietitian updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dietitian  $dietitian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dietitian $dietitian)
    {
        $dietitian->delete();
        return redirect()->back()->with('success', 'Dietitian deleted successfully!');
    }
}
