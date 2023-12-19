<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendingReferralsController extends Controller

    {
        public function index()
        {
            return view('patient-reports.pending-referrals');
        }
    }

