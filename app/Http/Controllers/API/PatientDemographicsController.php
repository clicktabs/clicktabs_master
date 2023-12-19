<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\PatientDemographicRequest;
use App\Models\Patient;
use App\Models\PatientAddressInfo;
use App\Models\PatientCaseManager;
use App\Models\PatientEthincity;
use App\Models\PatientExtraInfo;
use App\Models\PatientServiceAddress;
use App\Models\PatientTransportation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PatientDemographicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $organization_id = Auth::user()->organization_id;
        $patients = Patient::where('organization_id', '=', $organization_id)->get();
        return response()->json([
            'status'=> 200,
            'data' => $patients
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    public function generate_unique_number($last_id, $padding = 4) {
        $prefix = 0;
        $serial = str_pad($last_id + 1, $padding, '0', STR_PAD_LEFT);
        return "{$prefix}{$serial}";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(PatientDemographicRequest $request)
    {
        // return "Done";
        $lastId = Patient::orderBy('created_at', 'desc')->value('id');
        $organization_id = Auth::user()->organization_id;
        $patient_demographic = new Patient();

        if ($request->hasFile('photo')) {
            $ext = $request->file('photo')->extension();
            $final_name = time().'-'.uniqid().'-'.'photo'.'.'.$ext;

            $request->file('photo')->move(public_path('patients/'), $final_name);

            $patient_demographic->photo = $final_name;
        }

        $patient_demographic->patient_code = generate_random_token();
        $patient_demographic->first_name = $request->first_name;
        $patient_demographic->middle_name = $request->middle_name;
        $patient_demographic->p_s_lon = $request->p_s_lon;
        $patient_demographic->p_s_lat = $request->p_s_lat;
        $patient_demographic->p_h_lat = $request->p_h_lat;
        $patient_demographic->p_h_lon = $request->p_h_lon;
        $patient_demographic->last_name = $request->last_name;
        $patient_demographic->referral_date = $request->referral_date;
        $patient_demographic->gender = $request->gender;
        $patient_demographic->marital_status = $request->marital_status;
        $patient_demographic->date_of_birth = $request->date_of_birth;
        $patient_demographic->mi_no = $this->generate_unique_number($lastId ?? 0, 4);
        $patient_demographic->social_security_no = $request->s_s_number;
        $patient_demographic->insurance_type = $request->insurance_type;
        $patient_demographic->status = 'pending';
        $patient_demographic->organization_id = $organization_id;
        $patient_demographic->save();

        $patient_address_info = new PatientAddressInfo();
        $patient_address_info->patient_id = $patient_demographic->id;
        $patient_address_info->address_line_1 = $request->p_h_address_line_1;
        $patient_address_info->address_line_2 = $request->p_h_address_line_2;
        $patient_address_info->city = $request->p_h_city;
        $patient_address_info->country = $request->p_h_country;
        $patient_address_info->state = $request->p_h_state;
        $patient_address_info->zip = $request->p_h_zip;
        $patient_address_info->county = $request->p_h_county;
        $patient_address_info->phone = $request->p_h_phone;
        $patient_address_info->alternate_phone = $request->p_h_alternate_phone;
        $patient_address_info->patient_language_spoken = $request->patient_language_spoken;
        $patient_address_info->use_of_interpreter = $request->use_of_interpreter;
        $patient_address_info->save();

        $patient_service_info = new PatientServiceAddress();
        $patient_service_info->patient_id = $patient_demographic->id;
        $patient_service_info->address_line_1 = $request->p_s_address_line_1;
        $patient_service_info->address_line_2 = $request->p_s_address_line_2;
        $patient_service_info->city = $request->p_s_city;
        $patient_service_info->country = $request->p_s_country;
        $patient_service_info->state = $request->p_s_state;
        $patient_service_info->zip = $request->p_s_zip;
        $patient_service_info->county = $request->p_s_county;
        $patient_service_info->phone = $request->p_s_phone;
        $patient_service_info->alternate_phone = $request->p_s_alternate_phone;
        $patient_service_info->save();

        $patient_extra_info = new PatientExtraInfo();
        $patient_extra_info->patient_id = $patient_demographic->id;
        $patient_extra_info->race_ethnicity = json_encode($request->race_ethnicity);
        $patient_extra_info->source_of_admission = json_encode($request->patient_admission_history);
        $patient_extra_info->source_of_admission_other = $request->source_of_admission_other;
        $patient_extra_info->services_requested = json_encode($request->services_requested);
        $patient_extra_info->save();

        $patient_case_manager = new PatientCaseManager();
        $patient_case_manager->patient_id  = $patient_demographic->id;
        $patient_case_manager->clinical_care_managers  = $request->clinical_manager;
        $patient_case_manager->case_managers  = $request->case_manager;
        $patient_case_manager->oasis_assigned_to  = $request->oasis_assigned_manager;
        $patient_case_manager->ot_approved  = $request->ot_approved;
        $patient_case_manager->pt_approved  = $request->pt_approved;
        $patient_case_manager->st_approved  = $request->st_approved;
        $patient_case_manager->save();

        $patient_ethincity = new PatientEthincity();
        $patient_ethincity->patient_id  = $patient_demographic->id;
        $patient_ethincity->ethincity_info  = json_encode($request->ethnicity_requested);
        $patient_ethincity->save();

        $patient_transportation = new PatientTransportation();
        $patient_transportation->patient_id  = $patient_demographic->id;
        $patient_transportation->transportation  = json_encode($request->transportation);
        $patient_transportation->save();

        return response()->json([
            'status'=> 200,
            'data' => $patient_demographic
        ]);
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
