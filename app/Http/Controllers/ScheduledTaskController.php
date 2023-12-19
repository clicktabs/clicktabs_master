<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduledTaskController extends Controller
{
    public function index()
    {
        return view('patient-reports.scheduled-task');
    }
    }