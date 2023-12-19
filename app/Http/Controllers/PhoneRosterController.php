<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class PhoneRosterController extends Controller
{
    public function index()
    {
        $employees=Employee::all();
        return view('patient-reports.phone-roster',compact('employees'));
    }
}