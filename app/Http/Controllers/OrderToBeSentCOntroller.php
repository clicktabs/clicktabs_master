<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderToBeSentCOntroller extends Controller
{
    public function index()
    {
        return view('patient-reports.orders-to-be-sent');
    }
    }