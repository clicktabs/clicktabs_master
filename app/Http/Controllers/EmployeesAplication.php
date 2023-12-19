<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeesAplication extends Controller
{
    public function application(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('employees.application');
    }
}
