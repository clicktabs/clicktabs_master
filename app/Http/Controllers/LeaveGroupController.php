<?php

namespace App\Http\Controllers;

use App\Models\LeaveGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LeaveGroupRequest;
use App\Models\Organization;

class LeaveGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $companyId = "";
        switch(Auth::user()->organization_id) {
            case(null):
                $companyId = '0';
                $organizations = Organization::orderByDesc('created_at')->get();
                break;

            default:
                $companyId = Auth::user()->organization_id;
                $organizations = Auth::user()->organization_id;
        }
        $leaveSubs = LeaveGroup::where('company_id', $companyId)->get();
        return view('addons.leavegroup.dashboard', compact('leaveSubs', 'organizations'));

    }

    public function check_addons(Request $request){
        $companyId = "";
        switch(Auth::user()->organization_id) {
            case(null):
                $organizations = Organization::orderByDesc('created_at')->get();
                break;

            default:
                $organizations = $request->organisation_id;
        }

        $leaveSubs = LeaveGroup::where('company_id', $request->organisation_id)->get();
        $organization = Organization::where('id', $request->organisation_id)->get();
        $name = $organization[0]['name'];
        return view('addons.leavegroup.sub_dashboard', compact('leaveSubs', 'organizations', 'name'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        switch(Auth::user()->organization_id) {
            case(null):
                $organizations = Organization::orderByDesc('created_at')->get();
                break;

            default:
                $organizations = Auth::user()->organization_id;
        }
        return view('addons.leavegroup.create', compact('organizations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LeaveGroupRequest $request)
    {
        //
        $validated = $request->all();
        $validated['code'] = generate_random_token();
        $validated['user_id'] = Auth::id();
        $validated['company_id'] = $request->organisation_id;
        try{
            LeaveGroup::create($validated);
            return redirect()->route('leaveGroups.index')->with('success', 'Success. '. $validated['name'] . ' was created successfully. ');

        }catch (\Throwable $th){
            dd($th->getMessage());
            // return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LeaveGroup  $leaveGroup
     * @return \Illuminate\Http\Response
     */
    public function show(LeaveGroup $leaveGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LeaveGroup  $leaveGroup
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $addon_id = decrypt($id);

        $addonLeaves = LeaveGroup::where('id', $addon_id)->first();
        return view('addons.leavegroup.edit', compact('addonLeaves', 'id'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LeaveGroup  $leaveGroup
     * @return \Illuminate\Http\Response
     */
    public function update(LeaveGroupRequest $request)
    {
        $addon_id = decrypt(request('id'));

        try {

            $addonLeaves = LeaveGroup::where('id', $addon_id)->first();

            $addonLeaves->name = request('name');
            $addonLeaves->reference_code = request('reference_code');
            $addonLeaves->description = request('description');
            $addonLeaves->leave_privileges = request('leave_privileges');

            $addonLeaves->save();

            return redirect()->route('leaveGroups.index');
        }catch (\Exception $th){
            // $this->showErrorAlert($th->getMessage());
            return redirect()->back()->withInput();
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LeaveGroup  $leaveGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(LeaveGroup $leaveGroup)
    {
        //
    }

    public function change_status(Request $req, LeaveGroup $job)
    {
        $leaveGroupId = decrypt($req->leave_group_id);

        $outcome = $job->changeStatus($leaveGroupId);

        if ($outcome) {
            return redirect()->back()->with('success', "Success!!! $outcome" );
        } else {
            return redirect()->back()->with('error', "Error!!! Action Could not be performed. Report Issue to System Admin.");
        }
    }
}
