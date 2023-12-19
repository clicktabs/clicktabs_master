<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PatientAddressInfo;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $organization_id = Auth::user()->organization_id;
        $patients = Patient::where('organization_id', '=', $organization_id)->where('status', '=', 'pending')->get();

        return response()->json([
            'status'=> 200,
            'data' => $patients
        ]);
    }

    public function admitedPatients()
    {
        $organization_id = Auth::user()->organization_id;
        $patients = Patient::where('organization_id', '=', $organization_id)->where('status', '=', 'admit')->get();
        return response()->json($patients);
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
     * @return \Illuminate\Http\JsonResponse
     */
     public function destroy($id)
    {
        $patient = Patient::find($id);
        PatientAddressInfo::where('patient_id', $id)->delete();
        if ($patient) {
            $patient->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Patient Deleted Successfully!',
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Patient not found!',
            ]);
        }
    }

}
