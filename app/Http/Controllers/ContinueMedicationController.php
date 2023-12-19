<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContinueMedicationController extends Controller
{
    public function index()
    {
        return view('patient-reports.continue-medication');
    }
    }