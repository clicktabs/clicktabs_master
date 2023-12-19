<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EtransferStoreRequest;
use App\Models\Etransfer;

class OasisETransferController extends Controller
{
    public function index()
    {
        return view('home-healthcare.oasis-e-transfer');
    }

    public function store(EtransferStoreRequest $request)
    {
        $etransfer = Etransfer::create($request->validated());
        return redirect()->back()->with('success', 'OASIS E Transfer saved successfully.');
    }
}
