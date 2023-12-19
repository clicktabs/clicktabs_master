<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\EthicsRequest;
use App\Models\ethic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EthicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $organization_id = Auth::user()->organization_id;
        $ethics = Ethic::where('org_id', '=', $organization_id)->get();
        return response()->json(['data' => $ethics]);
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
    public function store(EthicRequest $request)
    {
        $organization_id = Auth::user()->organization_id;
        $ethic = new ethic ();
        $ethic ->code = generate_random_token();
        $ethic ->reference_code = $request->reference_code;
        $ethic ->name = $request->ethics_signature;
        $ethic ->name = $request->ethics_date;
        $ethic->org_id = $organization_id;
        $ethic->user_id = Auth::user()->id;
        $ethic->save();

        return response()->json(['message' => 'ethics successfully created', 'data' => $ethic]);
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
