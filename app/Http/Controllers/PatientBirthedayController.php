<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientBirthedayController extends Controller
{
    public function index()
    {
        $patients=Patient::all();
        return view('patient-reports.patients-birthday',compact('patients'));

    }
}