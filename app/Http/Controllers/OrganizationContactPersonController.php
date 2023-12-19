<?php

namespace App\Http\Controllers;

use App\Models\OrganizationContactPerson;
use Illuminate\Http\Request;

class OrganizationContactPersonController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:org-list');
        $this->middleware('permission:org-create', ['only' => ['create', 'store', 'edit', 'update']]);
        $this->middleware('permission:org-delete', ['only' => ['destroy', 'delete']]);
        $this->middleware('permission:org-view', ['only' => ['show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\OrganizationContactPerson  $organizationContactPerson
     * @return \Illuminate\Http\Response
     */
    public function show(OrganizationContactPerson $organizationContactPerson)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrganizationContactPerson  $organizationContactPerson
     * @return \Illuminate\Http\Response
     */
    public function edit(OrganizationContactPerson $organizationContactPerson)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OrganizationContactPerson  $organizationContactPerson
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrganizationContactPerson $organizationContactPerson)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrganizationContactPerson  $organizationContactPerson
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrganizationContactPerson $organizationContactPerson)
    {
        //
    }
}
