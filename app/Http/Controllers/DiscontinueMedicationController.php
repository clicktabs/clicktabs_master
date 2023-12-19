<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiscontinueMedicationController extends Controller
{
    public function index()
    {
        return view('patient-reports.discontinue-medication');
    }
    }