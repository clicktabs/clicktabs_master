<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\PatientEpisodeRequest;
use App\Models\PatientEpisodeTiming;
use App\Models\PatientEpisodeManager;
use Illuminate\Http\Request;

class PatientEpisodeController extends Controller
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
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(PatientEpisodeRequest $request)
    {
        $patient_episode_timing = new PatientEpisodeTiming();
        $patient_episode_timing->start_care_date = $request->episode_timing_start_care_date;
        $patient_episode_timing->episode_start_date = $request->episode_timing_start_date;
        $patient_episode_timing->episode_timing = $request->episode_timing;


        $oasis_start_care = array();
        if(isset($request->oasis_start_care)) {
            $oasis_start_care['oasis_start_care'] = 'on';
            $oasis_start_care['episode_timing_oasis_start_care'] = $request->episode_timing_oasis_start_care;
            $patient_episode_timing->oasis_start_care = json_encode($oasis_start_care);
        }

        $schedule_therapy = array();
        if(isset($request->schedule_therapy)) {
            $schedule_therapy['schedule_therapy'] = 'on';
            $schedule_therapy['episode_timing_therapy_evaluation'] = $request->episode_timing_therapy_evaluation;
            $patient_episode_timing->schedule_therapy = json_encode($schedule_therapy);
        }

        $non_oasis_start_care = array();
        if(isset($request->non_oasis_start_care)) {
            $non_oasis_start_care['non_oasis_start_care'] = 'on';
            $non_oasis_start_care['episode_timing_non_oasis_start'] = $request->episode_timing_therapy_evaluation;
            $patient_episode_timing->non_oasis_start_care = json_encode($non_oasis_start_care);
        }

        $initial_oasis_recert = array();
        if(isset($request->initial_oasis_recert)) {
            $initial_oasis_recert['initial_oasis_recert'] = 'on';
            $initial_oasis_recert['episode_timing_oasis_recert'] = $request->episode_timing_therapy_evaluation;
            $initial_oasis_recert['episode_timing_oasis_recert_date'] = $request->episode_timing_oasis_recert_date;
            $patient_episode_timing->initial_oasis_recert = json_encode($initial_oasis_recert);
        }

        $initial_non_oasis_recert = array();
        if(isset($request->initial_non_oasis_recert)) {
            $initial_non_oasis_recert['initial_non_oasis_recert'] = 'on';
            $initial_non_oasis_recert['non_oasis_recert'] = $request->non_oasis_recert;
            $initial_non_oasis_recert['episode_timing_recertification_date'] = $request->episode_timing_recertification_date;
            $patient_episode_timing->initial_non_oasis_recert = json_encode($initial_non_oasis_recert);
        }

        $patient_episode_timing->patient_id = $request->patient_id;
        $patient_episode_timing->save();

        $patient_episode_manager = new PatientEpisodeManager();
        $patient_episode_manager->patient_id = $request->patient_id;
        $patient_episode_manager->start_of_care_date = $request->episode_timing_start_care_date;
        $patient_episode_manager->episode_start_date = $request->episode_timing_start_date;

        $start_date = new \DateTime($patient_episode_manager->episode_start_date);
        $end_date = $start_date->add(new \DateInterval('P60D'));
        $patient_episode_manager->episode_end_date = $end_date->format('Y-m-d');

        $patient_episode_manager->case_manager = '';
        $patient_episode_manager->primary_insurance = '';
        $patient_episode_manager->secondary_insurance = '';
        $patient_episode_manager->primary_physician = '';
        $patient_episode_manager->comment = '';
        $patient_episode_manager->save();

        return response()->json([
            'status'=> 200,
            'data' => $patient_episode_timing
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
