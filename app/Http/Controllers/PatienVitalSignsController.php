<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vital;

class PatienVitalSignsController extends Controller
{
    public function index()
    {
        $vitals=Vital::all();
        return view('patient-reports.patients-vital-signs',compact('vitals'));
    }
    }