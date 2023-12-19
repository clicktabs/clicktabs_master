<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InfectionControl;
use App\Http\Requests\InfectionControlRequest;

class InfectionController extends Controller
{
    public function index()
    {
        return view('skilled-agency.infections.infection-control');
    }

    public function store(InfectionControlRequest $request)
    {
        $validatedData = $request->validated();
        $infectionReport = InfectionControl::create($validatedData);

        return redirect()->route('skilled-agency.infection-control.index')->with('success', 'Infection Added successfully.');
    }
}
