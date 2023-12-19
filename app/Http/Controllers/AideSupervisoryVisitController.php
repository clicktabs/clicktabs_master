<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AideSupervisoryVisitController extends Controller
{
    public function index()
    {
        return view('home-healthcare.aide-supervisory-visit');
    }
}
