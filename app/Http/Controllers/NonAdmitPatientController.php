<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NonAdmitPatientController extends Controller
{
    public function index()
    {
        return view('patient-reports.non-admit-patient');
    }
}