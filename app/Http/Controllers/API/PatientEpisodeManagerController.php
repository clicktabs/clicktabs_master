<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PatientEpisodeManager;
use App\Http\Requests\PatientEpisodeManagerStoreRequest;

class PatientEpisodeManagerController extends Controller
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
    public function store(PatientEpisodeManagerStoreRequest $request)
    {
        $patient_episode_manager = new PatientEpisodeManager();
        $patient_episode_manager->patient_id = $request->patient_id;
        $patient_episode_manager->start_of_care_date = $request->start_of_care_date;
        $patient_episode_manager->episode_start_date = $request->episode_start_date;
        $patient_episode_manager->episode_end_date = $request->episode_end_date;
        $patient_episode_manager->case_manager = $request->case_manager;
        $patient_episode_manager->primary_insurance = $request->primary_insurance;
        $patient_episode_manager->secondary_insurance = $request->secondary_insurance;
        $patient_episode_manager->primary_physician = $request->primary_physician;
        $patient_episode_manager->comment = $request->comment;
        $patient_episode_manager->save();

        return response()->json([
            'status' => 200,
            'message' => 'Episode manager added successfully!',
        ]);
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
        //
    }
}
