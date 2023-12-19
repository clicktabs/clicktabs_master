<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nursing_task;

class assessmentController extends Controller
{
    public function index()
    {
        $nursing_tasks=Nursing_task::all();

        return view('open-oasis',compact('nursing_tasks'));
    }
}
