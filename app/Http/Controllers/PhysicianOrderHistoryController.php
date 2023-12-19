<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhysicianOrderHistoryController extends Controller
{
    public function index()
    {
        
        return view('patient-reports.physician-order-history');
    }
}
