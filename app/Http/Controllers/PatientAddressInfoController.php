<?php

namespace App\Http\Controllers;

use App\Models\PatientAddressInfo;
use Illuminate\Http\Request;


class PatientAddressInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('patient-reports.patient-address');
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
     * @param  \App\Models\PatientAddressInfo  $patientAddressInfo
     * @return \Illuminate\Http\Response
     */
    public function show(PatientAddressInfo $patientAddressInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PatientAddressInfo  $patientAddressInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(PatientAddressInfo $patientAddressInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PatientAddressInfo  $patientAddressInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PatientAddressInfo $patientAddressInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PatientAddressInfo  $patientAddressInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(PatientAddressInfo $patientAddressInfo)
    {
        //
    }
}
