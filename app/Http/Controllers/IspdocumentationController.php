<?php

namespace App\Http\Controllers;

use App\Models\Ispdocumentation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IspdocumentationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dodd-forms.ispdocumentation');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ispdocumentation  $ispdocumentation
     * @return \Illuminate\Http\Response
     */
    public function show(Ispdocumentation $ispdocumentation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ispdocumentation  $ispdocumentation
     * @return \Illuminate\Http\Response
     */
    public function edit(Ispdocumentation $ispdocumentation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ispdocumentation  $ispdocumentation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ispdocumentation $ispdocumentation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ispdocumentation  $ispdocumentation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ispdocumentation $ispdocumentation)
    {
        //
    }
}
