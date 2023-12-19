<?php

namespace App\Http\Controllers;

use App\Models\ExportOasis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExportOasisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }
    public function export(){
           return view('index');
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
     * @param  \App\Models\ExportOasis  $exportOasis
     * @return \Illuminate\Http\Response
     */
    public function show(ExportOasis $exportOasis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExportOasis  $exportOasis
     * @return \Illuminate\Http\Response
     */
    public function edit(ExportOasis $exportOasis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ExportOasis  $exportOasis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExportOasis $exportOasis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExportOasis  $exportOasis
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExportOasis $exportOasis)
    {
        //
    }
}
