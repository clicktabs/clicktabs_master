<?php

namespace App\Http\Controllers;

use App\Models\Addon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SocialWorkerController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:referral-contacts-create', ['only' => ['index', 'create', 'store', 'update']]);
        $this->middleware('permission:referral-contacts-edit', ['only' => ['edit']]);
        $this->middleware('permission:referral-contacts-show', ['only' => ['show']]);
        $this->middleware('permission:referral-contacts-delete', ['only' => ['destroy', 'delete']]);
    }


    public function index()
    {
        $organization_id = Auth::user()->organization_id;
        $agency_addon = Addon::where('name', 'like', 'Agency Branch%')->where('status', '1')->first();
        $agency_branch = get_sub_addons($agency_addon, $organization_id);

        $insurance_addon= Addon::where('name', 'like', 'Insurance Type%')->where('status', '1')->first();
        $social_insurance = get_sub_addons($insurance_addon, $organization_id);

        return view('socialworker.index', compact('agency_branch', 'social_insurance'));
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
