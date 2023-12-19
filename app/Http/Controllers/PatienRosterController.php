<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use Illuminate\Notifications\Action;

class PatienRosterController extends Controller

{
    public function index()
    {
        $patients=Patient::all();

        return view('patient-reports.patients-roster',compact('patients'));
    }
}

