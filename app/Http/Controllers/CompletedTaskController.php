<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NursingTask;


class CompletedTaskController extends Controller
{
    public function index()
    {
       return view('patient-reports.completed-task');
    }
    }