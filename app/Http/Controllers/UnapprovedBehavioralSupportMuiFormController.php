<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnapprovedBehavioralSupportMuiFormController extends Controller
{
    public function index()
    {
        return view('dodd-forms.unapproved-behavioral-support-mui-form');
    }
}