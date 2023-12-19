<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OhiostateController extends Controller
{
    public function index()
    {
        return view('hiring.component.hiring-forms.i9');
    }
}
