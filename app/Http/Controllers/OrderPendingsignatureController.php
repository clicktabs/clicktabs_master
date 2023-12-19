<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class OrderPendingsignatureController extends Controller
{
    public function index()
    {
        return view('patient-reports.orders-pending-signature');
    }
    }