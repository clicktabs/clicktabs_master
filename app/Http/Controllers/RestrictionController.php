<?php

namespace App\Http\Controllers;

use App\Models\Restriction;
use Illuminate\Http\Request;
use App\Models\Addon;

class RestrictionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function restrictioneditModal($id)
    {
        $restriction = Restriction::find($id);
        $restriction_codes = Addon::join('addon_sub_categories', 'addons.id', 'addon_sub_categories.addon_id')
                                ->where('addons.name', 'Restriction')
                                ->select(['addon_sub_categories.*'])
                                ->get();
        return view('employees.restriction-edit-modal', compact('restriction', 'restriction_codes'));
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
        Restriction::create($request->all());
        return redirect()->back()->with('success', 'Success!!! Restriction Saved Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Restriction  $restriction
     * @return \Illuminate\Http\Response
     */
    public function show(Restriction $restriction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Restriction  $restriction
     * @return \Illuminate\Http\Response
     */
    public function edit(Restriction $restriction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Restriction  $restriction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restriction $restriction)
    {
        $restriction->update($request->all());
        return redirect()->back()->with('success', 'Success!!! Restriction Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Restriction  $restriction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restriction $restriction)
    {
        $restriction->delete();
        return redirect()->back()->with('success', 'Success!!! Restriction Deleted Successfully');
    }
}
