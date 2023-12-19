<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\PatientAdvanceDirectiveRequest;
use App\Models\PatientExtraInfo;
use Illuminate\Http\Request;

class PatientAdvanceDirective extends Controller
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
    public function store(PatientAdvanceDirectiveRequest $request)
    {
        if(PatientExtraInfo::where('patient_id', $request->patient_id )->exists()) {
            $patient_extra_info_update = PatientExtraInfo::where('patient_id', $request->patient_id )->first();
            $patient_advance_directives = array();
            $patient_advance_directives['advance_directive']= $request->advance_directive;
            $patient_advance_directives['attending'] = $request->attending;
            $patient_extra_info_update->advance_directives = json_encode($patient_advance_directives);
            $patient_extra_info_update->save();
            return response()->json([
                'status'=> 200,
                'data' => $patient_extra_info_update
            ]);
        } else {
            return response()->json([
                'status'=> 400,
                'message' => 'Please save patient demographic first.'
            ]);
        }
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
