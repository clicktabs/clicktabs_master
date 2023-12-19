<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpenOasisController extends Controller
{
    public function index()
    {
        return view('patient-reports.open-oasis');
    }
}