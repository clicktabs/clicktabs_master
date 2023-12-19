<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Authorization;
use App\Models\PrimaryInsurance;

class AuthorizationController extends Controller
{
    public function editModal($id)
    {
        $authorization = Authorization::find($id);
        return view('patients.components.patient-forms.authorization-edit-modal', compact('authorization'));
    }
    public function changeStatus($id)
    {
        $authorization = Authorization::find($id);
        if ($authorization->status == 1) {
            $authorization->update([
                'status' => 0,
            ]);
        } else {
            $authorization->update([
                'status' => 1,
            ]);
        }
        return redirect()->back()->with('success', 'Success!!! Allergy Status Changed Successfully');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authorizations=Authorization::all();
        return view('patients.authorization',compact('authorization'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    protected function validateRequest(Request $request)
    {
        return Validator::make($request->all(), [
            'authorization_number' => 'required',
            'payer' => 'required',
            'startofcare' => 'required',
            'eoc_date' => 'required',
            'service_code' => 'required',
            'authorized_units' => 'required',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $this->validateRequest($request);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $authorization = new Authorization();
        $authorization->patient_id = $request->patient_id;
        $authorization->authorization_number = $request->authorization_number;
        $authorization->startofcare= $request->startofcare;
        $authorization->payer = $request->payer;
        $authorization->eoc_date = $request->eoc_date;
        $authorization->service_code = $request->service_code;
        $authorization->authorized_units = $request->authorized_units;
        $authorization->save();

        $active_status_au = 'ui-tabs-active ui-state-active';

        return redirect()->back()->with([
            'success', 'Success!!! Authorization Saved Successfully!!',
            'active_status_au' => $active_status_au
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Authorization  $authorization
     * @return \Illuminate\Http\Response
     */
    public function show(Authorization $authorization)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Authorization  $authorization
     * @return \Illuminate\Http\Response
     */
    public function edit(Authorization $authorization)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Authorization  $authorization
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Authorization $authorization)
    {
        $authorization->update($request->all());
        return redirect()->back()->with('success', 'Success!!! Authorization Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Authorization  $authorization
     * @return \Illuminate\Http\Response
     */
    public function destroy(Authorization $authorization)
    {
        $authorization->delete();
        return redirect()->back()->with('success', 'Success!!! Authorization Deleted Successfully');
    }
}
