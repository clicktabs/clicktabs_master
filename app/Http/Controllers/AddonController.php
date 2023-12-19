<?php

namespace App\Http\Controllers;

use App\Models\Addon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AddonCategoryRequest;

class AddonItems
{
    public $name;
    public $route;
}

class AddonController extends Controller
{
    // use Helpers;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $race = new AddonItems();
        $race->name = 'Race';
        $race->route = 'races';

        $leave = new AddonItems();
        $leave->name = 'Leave Groups';
        $leave->route = 'leaveGroups';

        $tax_types = new AddonItems();
        $tax_types->name = 'Tax Id Types';
        $tax_types->route = 'taxes';

        $job_titles = new AddonItems();
        $job_titles->name = 'Job Titles';
        $job_titles->route = 'jobTitles';

        $admission_source = new AddonItems();
        $admission_source->name = 'Credentials';
        $admission_source->route = 'credentials';

        $facility_referral = new AddonItems();
        $facility_referral->name = 'Facility Referral';
        $facility_referral->route = 'facilityReferral';

        $in_patient_admission_code = new AddonItems();
        $in_patient_admission_code->name = 'In-Patient Admission/ Visit Code';
        $in_patient_admission_code->route = 'inPatientCode';

        $internal_referral_source = new AddonItems();
        $internal_referral_source->name = 'Internal Referral Source';
        $internal_referral_source->route = 'internalReferralSource';

        $gender = new AddonItems();
        $gender->name = 'Gender';
        $gender->route = 'gender';

        $agency_branches = new AddonItems();
        $agency_branches->name = 'Agency Branches';
        $agency_branches->route = 'agency';

        $services = new AddonItems();
        $services->name = 'Services';
        $services->route = 'service';

        $insurances = new AddonItems();
        $insurances->name = 'Primary Insurance';
        $insurances->route = 'insurance';

        $secondary_insurance = new AddonItems();
        $secondary_insurance->name = 'Secondary Insurance';
        $secondary_insurance->route = 'secondaryInsurance';

        $tertiary_insurance = new AddonItems();
        $tertiary_insurance->name = 'Tertiary Insurance';
        $tertiary_insurance->route = 'tertiaryInsurance';

        $service_required = new AddonItems();
        $service_required->name = 'Service Required';
        $service_required->route = 'serviceRequired';

        $relationship = new AddonItems();
        $relationship->name = 'Relationship';
        $relationship->route = 'relationship';

        // $physician = new AddonItems();
        // $physician->name = 'Physician';
        // $physician->route = 'physician';

        $addons = array($admission_source,$agency_branches, $facility_referral,$gender,
        $in_patient_admission_code, $internal_referral_source, $insurances,
        $job_titles, $leave,$race,$relationship,$services,$secondary_insurance,$service_required,
        $tax_types,$tertiary_insurance);

//        return view('addons.dashboard', compact('addons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addons.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddonCategoryRequest $request)
    {
        try{
            $addon = new Addon();
            $addon->code = generate_random_token();
            $addon->name = request('name');
            $addon->user_id = Auth::id();
            $addon->save();

            return redirect()->route('addons.index');

        }catch (\Exception $th){
            // $this->showErrorAlert($th->getMessage());
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Addon  $addon
     * @return \Illuminate\Http\Response
     */
    public function show(Addon $addon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Addon  $addon
     * @return \Illuminate\Http\Response
     */
    public function edit(Addon $addon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Addon  $addon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Addon $addon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Addon  $addon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Addon $addon)
    {
        //
    }
}
