<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Therapy;

class TherapyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $therapies = Therapy::all();
        // return view('therapies.index', compact('therapies'));
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

        Therapy::create($validatedData);

        return redirect()->back()->with('success', 'Therapy created successfully!');
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $therapy = Therapy::findOrFail($id);
        $therapy->delete();
        return redirect()->route('therapies.index')->with('success', 'Therapy deleted successfully!');
    }
}
