<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PatientDischargeWebController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:discharge-list', ['only' => ['index']]);
    }

    public function index()
    {
        $organization_id = Auth::user()->organization_id;
        $patients = Patient::where('organization_id', '=', $organization_id)->where('status', '=', 'discharge')->get();
        return view('patients.discharge-list', compact('patients'));
    }

    public function show($id) {
        $patient = Patient::find($id);
        $patient->status = 'admit';
        $patient->update();

        $message = 'Patient updated successfully.';
        return redirect()->route('patient.admission')->with('success', $message);
    }
}
