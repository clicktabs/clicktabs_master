<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnusualincidentReportlogController extends Controller
{
    public function index()
    {
        return view('dodd-forms.unusual-incident-report-log');
    }
}