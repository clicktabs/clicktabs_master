<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServicesRequiredRequest;
use App\Models\ServicesRequired;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Organization;

class ServicesRequiredController extends Controller
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
        $addonServices = ServicesRequired::where('company_id', $companyId)->get();
        return view('addons.service_required.dashboard', compact('addonServices', 'organizations'));

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

        $addonServices = ServicesRequired::where('company_id', $request->organisation_id)->get();
        $organization = Organization::where('id', $request->organisation_id)->get();
        $name = $organization[0]['name'];
        return view('addons.service_required.sub_dashboard', compact('addonServices', 'organizations', 'name'));

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
        return view('addons.service_required.create', compact('organizations'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServicesRequiredRequest $request)
    {
        //
        $validated = $request->all();
        $validated['code'] = generate_random_token();
        $validated['user_id'] = Auth::id();
        $validated['company_id'] = $request->organisation_id;
        try{

            ServicesRequired::create($validated);
            return redirect()->route('serviceRequired.index')->with('success', 'Success. '. $validated['name'] . ' was created successfully. ');

        }catch (\Throwable $th){
            dd($th->getMessage());
            // return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServicesRequired  $servicesRequired
     * @return \Illuminate\Http\Response
     */
    public function show(ServicesRequired $servicesRequired)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServicesRequired  $servicesRequired
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $addon_id = decrypt($id);

        $addonService = ServicesRequired::where('id', $addon_id)->first();
        return view('addons.service_required.edit', compact('addonService'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServicesRequired  $servicesRequired
     * @return \Illuminate\Http\Response
     */
    public function update(ServicesRequiredRequest $request)
    {
        $addon_id = decrypt(request('id'));

        try {

            $addonServiceRequired = ServicesRequired::where('id', $addon_id)->first();

            $addonServiceRequired->name = request('name');
            $addonServiceRequired->reference_code = request('reference_code');
            $addonServiceRequired->save();

            return redirect()->route('serviceRequired.index')->with('success', 'Success. '. request('name') . ' was updated successfully. ');;
        }catch (\Exception $th){
            // $this->showErrorAlert($th->getMessage());
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServicesRequired  $servicesRequired
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServicesRequired $servicesRequired)
    {
        //
    }

    public function change_status(Request $req, ServicesRequired $services)
    {
        $servicesId = decrypt($req->serviceId);

        $outcome = $services->changeStatus($servicesId);

        if ($outcome) {
            return redirect()->back()->with('success', "Success!!! $outcome" );
        } else {
            return redirect()->back()->with('error', "Error!!! Action Could not be performed. Report Issue to System Admin.");
        }
    }
}
