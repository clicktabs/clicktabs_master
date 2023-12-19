<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PastDueVisitController extends Controller
{
    public function index()
    {
        return view('patient-reports.past-due-visit');
    }
}