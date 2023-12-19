<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\account;
use Illuminate\Support\Facades\DB;

class Company_infoController extends Controller
{
    public function info() {
        $account = Account::all();
        return view('layouts.company_info',compact('account'));
    }
}
