<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\PatientAddressInfo;
use App\Models\PatientExtraInfo;

use App\Models\Vital;


class NonOasisController extends Controller
{
    public function show($id)
    {
        $patient = Patient::find($id);
        $patient_info = PatientExtraInfo::where('patient_id',$id)->first();
        $patient_address = PatientAddressInfo::where('patient_id',$id)->first();
        $vitals = Vital::where('patient_id',$id)->first();

        return view('home-care.non-oasis-soc', compact('patient','patient_info','patient_address','vitals'));
    }
}
