<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayRollDetailController extends Controller
{
    public function index()
    {
          return view('patient-reports.payroll');
    }
}