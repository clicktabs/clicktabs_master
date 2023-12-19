<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\AgencyBranch;
use DB;

class EmployeeManagementController extends Controller
{
    public function search(Request $request)
    {
        $branchId = $request->input('branch');
        $branches = AgencyBranch::all();
        $employees = Employee::where('agency_branch', $branchId)->get();
        return view('employees.index', compact('employees', 'branches'));
    }
}
