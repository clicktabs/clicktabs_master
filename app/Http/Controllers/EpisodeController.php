
<?php

namespace App\Http\Controllers;

use App\Models\PatientEpisodeTiming;
use App\Models\PatientEpisodeManager;
use Illuminate\Http\Request;

class EpisodeController extends Controller
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
            'start_of_care_date' => 'required|date',
            'episode_start_date' => 'required|date',
            'episode_end_date' => 'required|date',
            'case_manager' => 'nullable|string',
            'primary_insurance' => 'nullable|string',
            'secondary_insurance' => 'nullable|string',
            'primary_physician' => 'nullable|string',
            'comment' => 'nullable|string',
        ]);

        $patientEpisodeTiming = new PatientEpisodeTiming();

        $patientEpisodeTiming->patient_id = $request->patient_id;
        $patientEpisodeTiming->start_care_date = $validatedData['start_of_care_date'];
        $patientEpisodeTiming->episode_start_date = $validatedData['episode_start_date'];
        $patientEpisodeTiming->oasis_episode_end_date = $validatedData['episode_end_date'];

        $patientEpisodeTiming->case_manager = $validatedData['case_manager'];
        $patientEpisodeTiming->primary_insurance = $validatedData['primary_insurance'];
        $patientEpisodeTiming->secondary_insurance = $validatedData['secondary_insurance'];
        $patientEpisodeTiming->primary_physician = $validatedData['primary_physician'];
        $patientEpisodeTiming->comment = $validatedData['comment'];
        $patientEpisodeTiming->save();
        return redirect()->back()->with('success', 'Success!!! Patient Episode Updated Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PatientEpisodeTiming  $patientEpisodeTiming
     * @return \Illuminate\Http\Response
     */
    public function show(PatientEpisodeTiming $patientEpisodeTiming)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PatientEpisodeTiming  $patientEpisodeTiming
     * @return \Illuminate\Http\Response
     */
    public function edit(PatientEpisodeTiming $patientEpisodeTiming)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PatientEpisodeTiming  $patientEpisodeTiming
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PatientEpisodeTiming $patientEpisodeTiming)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PatientEpisodeTiming  $patientEpisodeTiming
     * @return \Illuminate\Http\Response
     */
    public function destroy(PatientEpisodeTiming $patientEpisodeTiming)
    {
        //
    }
}
