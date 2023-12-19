<?php

namespace App\Http\Controllers;

use App\Models\Caregiver;
use Illuminate\Http\Request;
use App\Models\Addon;

class CaregiverController extends Controller
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

    public function caregivereditModal($id)
    {
        $caregiver = Caregiver::find($id);

        $matching_codes = Addon::join('addon_sub_categories', 'addons.id', 'addon_sub_categories.addon_id')
                                ->where('addons.name', 'Matching Code')
                                ->select(['addon_sub_categories.*'])
                                ->get();

        $compatibilitys = Addon::join('addon_sub_categories', 'addons.id', 'addon_sub_categories.addon_id')
                                ->where('addons.name', 'Compatibility  Code')
                                ->orWhere('addons.name', 'Compatibility Code')
                                ->select(['addon_sub_categories.*'])
                                ->get();

        return view('employees.caregiver-edit-modal', compact('caregiver', 'matching_codes', 'compatibilitys'));
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
        Caregiver::create(request()->all());
        return back()->with('success','Success!! Caregiver Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Caregiver  $caregiver
     * @return \Illuminate\Http\Response
     */
    public function show(Caregiver $caregiver)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Caregiver  $caregiver
     * @return \Illuminate\Http\Response
     */
    public function edit(Caregiver $caregiver)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Caregiver  $caregiver
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Caregiver $caregiver)
    {
        $caregiver->update($request->all());
        return redirect()->back()->with('success', 'Success!!! Caregiver Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Caregiver  $caregiver
     * @return \Illuminate\Http\Response
     */
    public function destroy(Caregiver $caregiver)
    {
        $caregiver->delete();
        return redirect()->back()->with('success', 'Success!!! Caregiver Deleted Successfully');
    }
}
