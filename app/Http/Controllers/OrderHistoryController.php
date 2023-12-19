<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderHistoryController extends Controller
{
    public function index()
    {
        return view('patient-reports.orders-history');
    }
}