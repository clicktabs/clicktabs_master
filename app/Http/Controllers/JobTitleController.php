<?php

namespace App\Http\Controllers;

use App\Models\JobTitle;
use Illuminate\Http\Request;
use App\Http\Requests\JobTitleRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Organization;

class JobTitleController extends Controller
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
        $jobTitles = JobTitle::where('company_id', $companyId)->get();
        return view('addons.jobtitles.dashboard', compact('jobTitles', 'organizations'));

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

        $jobTitles = JobTitle::where('company_id', $request->organisation_id)->get();
        $organization = Organization::where('id', $request->organisation_id)->get();
        $name = $organization[0]['name'];
        return view('addons.jobtitles.sub_dashboard', compact('jobTitles', 'organizations', 'name'));

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
        return view('addons.jobtitles.create', compact('organizations'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobTitleRequest $request)
    {
        //
        $validated = $request->all();
        $validated['code'] = generate_random_token();
        $validated['user_id'] = Auth::id();
        $validated['company_id'] = $request->organisation_id;
        try{

            JobTitle::create($validated);
            return redirect()->route('jobTitles.index')->with('success', 'Success. '. $validated['job_title'] . ' was created successfully. ');

        }catch (\Throwable $th){
            dd($th->getMessage());
            // return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JobTitle  $jobTitle
     * @return \Illuminate\Http\Response
     */
    public function show(JobTitle $jobTitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JobTitle  $jobTitle
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $addon_id = decrypt($id);

        $addonJobTitle = JobTitle::where('id', $addon_id)->first();
        return view('addons.jobtitles.edit', compact('addonJobTitle'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JobTitle  $jobTitle
     * @return \Illuminate\Http\Response
     */
    public function update(JobTitleRequest $request)
    {
        //
        $addon_id = decrypt(request('id'));

        try {

            $addonJobTitle = JobTitle::where('id', $addon_id)->first();

            $addonJobTitle->job_title = request('job_title');
            $addonJobTitle->job_title_short = request('job_title_short');
            $addonJobTitle->reference_code = request('reference_code');
            $addonJobTitle->save();

            return redirect()->route('jobTitles.index')->with('success', 'Success. '. request('name') . ' was updated successfully. ');
        }catch (\Exception $th){
            // $this->showErrorAlert($th->getMessage());
            return redirect()->back()->withInput();
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobTitle  $jobTitle
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobTitle $jobTitle)
    {
        //
    }

    public function change_status(Request $req, JobTitle $job)
    {
        $jobTitle_id = decrypt($req->job_id);

        $outcome = $job->changeStatus($jobTitle_id);

        if ($outcome) {
            return redirect()->back()->with('success', "Success!!! $outcome" );
        } else {
            return redirect()->back()->with('error', "Error!!! Action Could not be performed. Report Issue to System Admin.");
        }
    }
}
