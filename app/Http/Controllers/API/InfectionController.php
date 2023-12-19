<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InfectionControl;

class InfectionController extends Controller
{
    public function index()
    {
        $infections = InfectionControl::with('patient','caseManager','infectionReportedBy','infectionReportedTo','followUpRequiredBy')->get();
        return response()->json(['data' => $infections]);
    }
}
