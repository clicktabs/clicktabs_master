<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MissedVisitController extends Controller
{
    public function index()
    {
        return view('patient-reports.missed-visits');
    }
}