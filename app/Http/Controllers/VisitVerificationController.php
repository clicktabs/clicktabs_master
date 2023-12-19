<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitVerificationController extends Controller
{
    public function index()
    {
        return view('patient-reports.visit-verification');
    }
    }