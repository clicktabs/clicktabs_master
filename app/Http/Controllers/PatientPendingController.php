<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PatientPendingController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:pending-list');
    }
    public function index() {
        $organization_id = Auth::user()->organization_id;
        $patients = Patient::where('organization_id', '=', $organization_id)->where('status', '=', 'pending')->get();

        return view('patients.index', compact('patients'));
    }
}
