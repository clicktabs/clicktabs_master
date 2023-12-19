<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\SocialWorkerRequest;
use App\Models\SocialWorker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SocialWorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $organization_id = Auth::user()->organization_id;
        $social_worker = SocialWorker::where('organization_id', '=', $organization_id)->get();
        return response()->json(['data' => $social_worker]);
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
    public function store(SocialWorkerRequest $request)
    {
        $organization_id = Auth::user()->organization_id;
        $social_worker               = new SocialWorker();
        $social_worker->first_name         = $request->first_name;
        $social_worker->last_name       = $request->last_name;
        $social_worker->agency_branch      = $request->agency_branch;
        $social_worker->organization_id      = $organization_id;
        $social_worker->tel      = $request->tel;
        $social_worker->fax      = $request->fax;
        $social_worker->comment      = $request->comment;
        $social_worker->social_insurance      = $request->social_insurance;
        $social_worker->save();

        return response()->json([
            'message' => 'Social Worker Saved Successfully',
            'data' => $social_worker], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $social_worker = SocialWorker::find($id);
        return response()->json([
            'data' => $social_worker], 201);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit($id)
    {
        $social_worker = SocialWorker::find($id);
        return response()->json(['data' => $social_worker], 201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(SocialWorkerRequest $request, $id)
    {
        $organization_id = Auth::user()->organization_id;
        $social_worker                      = SocialWorker::find($id);
        $social_worker->first_name          = $request->first_name;
        $social_worker->last_name           = $request->last_name;
        $social_worker->agency_branch       = $request->agency_branch;
        $social_worker->organization_id      = $organization_id;
        $social_worker->tel                 = $request->tel;
        $social_worker->fax                 = $request->fax;
        $social_worker->comment             = $request->comment;
        $social_worker->social_insurance      = $request->social_insurance;
        $social_worker->save();

        return response()->json([
            'message' => 'Social Worker Updated Successfully',
            'data' => $social_worker], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $category = SocialWorker::find($id);
        $category->delete();
        return response()->json([
            'message' => 'Social Worker Deleted Successfully.'
        ]);
    }
}
