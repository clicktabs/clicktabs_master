<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use DB;

class EmployeeManagementController extends Controller
{

public function search(Request $request)
{
    $branchId = $request->input('branch');

    $results = DB::table('employees')->when($branchId, function ($query, $branchId) {
        return $query->where('agency_branch', $branchId);
    })->get();
    return response()->json($results);
}


}
