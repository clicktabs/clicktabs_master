<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CookiesController extends Controller
{
    function index() {
        return view('cookie-consent-preferences');
    }
}
