<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HospitalizationController extends Controller
{
    public function index()
    {
        return view('patient-reports.hospitalization');
    }
    }