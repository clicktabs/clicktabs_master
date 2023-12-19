<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InactiveAllergyController extends Controller
{
    public function index()
    {
        return view('patient-reports.inactive-allergy');
    }
    }