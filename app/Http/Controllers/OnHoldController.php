<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OnHoldController extends Controller
{
    public function index()
    {
        return view('patient-reports.on-hold');
    }
    }