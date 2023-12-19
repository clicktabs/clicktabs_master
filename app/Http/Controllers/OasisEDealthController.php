<?php

namespace App\Http\Controllers;

use App\Models\OasisEDealth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\OasisEDathSecAjnoqRequest;
use App\Http\Requests\PhysicianTransfersRequest;
use App\Http\Requests\DeathAtHomeRequest;
use App\Models\OasisEDathSecAjnoq;
use App\Models\PhysicianTransfers;
use App\Models\DeathAtHome;

class OasisEDealthController extends Controller
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
     public function store(OasisEDathSecAjnoqRequest $oasisRequest, PhysicianTransfersRequest $transfersRequest, DeathAtHomeRequest $deathRequest)
    {
        // Handling OasisEDathSecAjnoq data
        $oasisData = $oasisRequest->validated();
        OasisEDathSecAjnoq::create($oasisData);

        // Handling PhysicianTransfers data
        $physicianTransfersData = $transfersRequest->validated();
        PhysicianTransfers::create($physicianTransfersData);

        // Handling DeathAtHome data
        $deathAtHomeData = $deathRequest->validated();
        DeathAtHome::create($deathAtHomeData);

        return response()->json(['message' => 'Data stored successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OasisEDealth  $oasisEDealth
     * @return \Illuminate\Http\Response
     */
    public function show(OasisEDealth $oasisEDealth)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OasisEDealth  $oasisEDealth
     * @return \Illuminate\Http\Response
     */
    public function edit(OasisEDealth $oasisEDealth)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OasisEDealth  $oasisEDealth
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OasisEDealth $oasisEDealth)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OasisEDealth  $oasisEDealth
     * @return \Illuminate\Http\Response
     */
    public function destroy(OasisEDealth $oasisEDealth)
    {
        //
    }
}
