<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OasisEDischargeController extends Controller
{
    public function index()
    {
        return view('home-healthcare.oasis-e-discharge');
    }
}

