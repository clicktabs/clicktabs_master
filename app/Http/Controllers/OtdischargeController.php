<?php

namespace App\Http\Controllers;

use App\Models\Otdischarge;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OtdischargeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('nursing.form.otdischargesummary');
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
     * @param  \App\Models\Otdischarge  $otdischarge
     * @return \Illuminate\Http\Response
     */
    public function show(Otdischarge $otdischarge)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Otdischarge  $otdischarge
     * @return \Illuminate\Http\Response
     */
    public function edit(Otdischarge $otdischarge)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Otdischarge  $otdischarge
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Otdischarge $otdischarge)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Otdischarge  $otdischarge
     * @return \Illuminate\Http\Response
     */
    public function destroy(Otdischarge $otdischarge)
    {
        //
    }
}
