<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendingOrdeHistoryController extends Controller
{
    public function index()
    {
        return view('patient-reports.active-allergy');
    }
}