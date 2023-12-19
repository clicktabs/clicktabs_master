<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MswOther;

class MswOtherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $mswOthers = MswOther::all();
        // return view('msw_others.index', compact('mswOthers'));
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

        MswOther::create($validatedData);

        return redirect()->back()->with('success', 'MSW Other created successfully!');
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
            $validatedData = $request->validate([
            'patient_id' => 'required',
            'tasks' => 'required',
            'schedule_date' => 'required|date',
            'assigned_to' => 'required',
            'status' => 'required',
            ]);
        $mswOther = MswOther::findOrFail($id);
        $mswOther->update($validatedData);

        return redirect()->route('msw_others.index')->with('success', 'MSW Other updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mswOther = MswOther::findOrFail($id);
        $mswOther->delete();
        return redirect()->back()->with('success', 'MSW Other deleted successfully!');
    }
}
