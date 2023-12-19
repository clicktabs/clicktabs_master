<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\PharmacyRequest;
use App\Models\Pharmacy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PharmacyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $organization_id = Auth::user()->organization_id;
        $pharmacies = Pharmacy::where('org_id', '=', $organization_id)->get();
        return response()->json(['data' => $pharmacies]);
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(PharmacyRequest $request)
    {
        $organization_id = Auth::user()->organization_id;
        $pharmacy = new Pharmacy();
        $pharmacy->code = generate_random_token();
        $pharmacy->reference_code = $request->reference_code;
        $pharmacy->name = $request->pharmacy_name;
        $pharmacy->address = $request->pharmacy_address;
        $pharmacy->telephone = $request->pharmacy_telephone;
        $pharmacy->fax = $request->pharmacy_fax;
        $pharmacy->org_id = $organization_id;
        $pharmacy->user_id = Auth::user()->id;
        $pharmacy->save();

        return response()->json(['message' => 'Pharmacy successfully created', 'data' => $pharmacy]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
