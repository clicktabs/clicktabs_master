<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OasisResumptionRequest;
use App\Models\OasisResumption;

class OasisEResumptionofCareController extends Controller
{
    public function index()
    {
        return view('home-healthcare.oasis-e-resumption-of-care');
    }

    public function store(OasisResumptionRequest $request)
    {
        $oasisResumption = OasisResumption::create($request->validated());

        return redirect()->back()->with('success', 'Assessment saved successfully.');
    }
}
