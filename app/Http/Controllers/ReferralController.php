<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateReferralRequest;
use App\Models\Patient;
use App\Models\Referral;
use App\Models\ReferralAddress;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Throwable;
use App\Models\referralData;
use App\Models\ReferralSource;
use App\Models\ReferralDiagnosis;

class ReferralController extends Controller
{
    public function index()
    {
        $referrals = Referral::all();
        return view('referrals.index', compact('referrals'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'type_of_visit' => 'nullable',
            'service_req_name_address' => 'nullable|string',
            'date_of_request' => 'nullable|date',
            'reply_name_dept' => 'nullable|string',
            'telephone_ext' => 'nullable|string',
            'phy_order_soc_date' => 'nullable',
            'na_no_specidic_soc' => 'nullable',
            'updated_reff_date' => 'nullable',
            'patient_full_name' => 'nullable',
            'patient_dob' => 'nullable',
            'gender' => 'nullable',
            'patient_full_address' => 'nullable',
            'apt_no' => 'nullable|string',
            'telephone_no' => 'nullable|string',
            'patient_visite_address' => 'nullable|string',
            'patient_visite_apt' => 'nullable|string',
            'patient_visite_phone' => 'nullable|string',
            'medicare_no' => 'nullable|string',
            'medicare_od_dss' => 'nullable|string',
            'authorization_nullable' => 'nullable',
            'authorization_received' => 'nullable',
            'other_ins' => 'nullable|string',
            'policy_no' => 'nullable|string',
            'type_of_coverage' => 'nullable|string',
            'hospital_or_pac_add_date' => 'nullable',
            'hospital_or_pac_diss_date' => 'nullable',
            'primary_diagnosis' => 'nullable|string',
            'secondary_diagnosis' => 'nullable|string',
            'surgery_date' => 'nullable|date',
            'signafiq_med_surg_history' => 'nullable|string',
            'prognosis' => 'nullable|string',
            'therapeutic_goals' => 'nullable|string',
            'diagnosis_known_by' => 'nullable',
            'not_kown_explain' => 'nullable',
            'provide_orders' => 'nullable',
            'physician_provider' => 'nullable|string',
            'clinic' => 'nullable|string',
            'clinic_phone' => 'nullable|string',
            'patient_essentially_homebound' => 'nullable',
            'home_health_services' => 'nullable',
            'condition_for_which_patient' => 'nullable',
            'skilled_nursing' => 'nullable',
            'pt' => 'nullable',
            'ot' => 'nullable',
            'slp' => 'nullable',
            'mss' => 'nullable',
            'other' => 'nullable',
            // 'physician_signature' => 'nullable|string',
            'physician_signature_date' => 'nullable',
            'nursing_therapy_assignment' => 'nullable|string',
            'med_sup_eqp' => 'nullable|string',
            'admitted' => 'nullable',
            'staff_assigned_add' => 'nullable|string',
            'reason_for_addmitted' => 'nullable|string',
            'recomendation_pt' => 'nullable',
            'recomendation_ot' => 'nullable',
            'recomendation_slp' => 'nullable',
            'recomendation_msw' => 'nullable',
            'recomendation_md' => 'nullable',
            'recomendation_other' => 'nullable|string',
            'agency_staff_signature' => 'nullable',
            'authorization_required' => 'nullable',
        ]);

        $referral = new referral();
        $referral->type_of_visit = $request->type_of_visit;
        $referral->service_req_name_address = $request->service_req_name_address;
        $referral->date_of_request = $request->date_of_request;
        $referral->reply_name_dept = $request->reply_name_dept;
        $referral->telephone_ext = $request->telephone_ext;
        $referral->phy_order_soc_date = $request->phy_order_soc_date;
        $referral->na_no_specidic_soc = $request->na_no_specidic_soc;
        $referral->updated_reff_date = $request->updated_reff_date;
        $referral->patient_full_name = $request->patient_full_name;
        $referral->patient_dob = $request->patient_dob;
        $referral->gender = $request->gender;
        $referral->patient_full_address = $request->patient_full_address;
        $referral->apt_no = $request->apt_no;
        $referral->telephone_no = $request->telephone_no;
        $referral->patient_visite_address = $request->patient_visite_address;
        $referral->patient_visite_apt = $request->patient_visite_apt;
        $referral->patient_visite_phone = $request->patient_visite_phone;
        // $referral->medicare_no = $request->medicare_no;
        // $referral->medicare_od_dss = $request->medicare_od_dss;
        $referral->authorization_required = $request->authorization_required;
        $referral->authorization_received = $request->authorization_received;
        $referral->other_ins = $request->other_ins;
        $referral->policy_no = $request->policy_no;
        $referral->type_of_coverage = $request->type_of_coverage;
        $referral->hospital_or_pac_add_date = $request->hospital_or_pac_add_date;
        $referral->hospital_or_pac_diss_date = $request->hospital_or_pac_diss_date;
        $referral->created_by = Auth::id();
        $referral->save();

        $referralDiagnosis = new ReferralDiagnosis();
        $referralDiagnosis->referral_id = $referral->id;
        $referralDiagnosis->primary_diagnosis = $validatedData['primary_diagnosis'];
        $referralDiagnosis->secondary_diagnosis = $validatedData['secondary_diagnosis'];
        $referralDiagnosis->surgery_date = $validatedData['surgery_date'];
        $referralDiagnosis->signafiq_med_surg_history = $validatedData['signafiq_med_surg_history'];
        $referralDiagnosis->prognosis = $validatedData['prognosis'];
        $referralDiagnosis->therapeutic_goals = $validatedData['therapeutic_goals'];
        $referralDiagnosis->diagnosis_known_by = $validatedData['diagnosis_known_by'];
        $referralDiagnosis->not_kown_explain = isset($validatedData['not_kown_explain']);
        $referralDiagnosis->provide_orders = $validatedData['provide_orders'];
        $referralDiagnosis->physician_provider = $validatedData['physician_provider'];
        $referralDiagnosis->clinic = $validatedData['clinic'];
        $referralDiagnosis->clinic_phone = $validatedData['clinic_phone'];
        $referralDiagnosis->patient_essentially_homebound = $validatedData['patient_essentially_homebound'];
        $referralDiagnosis->home_health_services = $validatedData['home_health_services'];
        $referralDiagnosis->condition_for_which_patient = $validatedData['condition_for_which_patient'];
        $referralDiagnosis->skilled_nursing = isset($validatedData['skilled_nursing']);
        $referralDiagnosis->pt = isset($validatedData['pt']);
        $referralDiagnosis->ot = isset($validatedData['ot']);
        $referralDiagnosis->slp = isset($validatedData['slp']);
        $referralDiagnosis->mss = isset($validatedData['mss']);
        $referralDiagnosis->other = isset($validatedData['other']);
        // $referralDiagnosis->physician_signature = $validatedData['physician_signature'];
        $referralDiagnosis->physician_signature_date = $request->physician_signature_date;
        $referralDiagnosis->save();

        $referralSource = new ReferralSource();
        $referralSource->referral_id = $referral->id;
        $referralSource->nursing_therapy_assignment = $validatedData['nursing_therapy_assignment'];
        $referralSource->med_sup_eqp = $validatedData['med_sup_eqp'];
        $referralSource->admitted = $validatedData['admitted'];
        $referralSource->staff_assigned_add = $validatedData['staff_assigned_add'];
        $referralSource->reason_for_addmitted = $validatedData['reason_for_addmitted'];
        $referralSource->recomendation_pt = isset($validatedData['recomendation_pt']);
        $referralSource->recomendation_ot = isset($validatedData['recomendation_ot']);
        $referralSource->recomendation_slp = isset($validatedData['recomendation_slp']);
        $referralSource->recomendation_msw = isset($validatedData['recomendation_msw']);
        $referralSource->recomendation_md = isset($validatedData['recomendation_md']);
        $referralSource->recomendation_other = $validatedData['recomendation_other'];
        // $referralSource->agency_staff_signature = $validatedData['agency_staff_signature'];
        $referralSource->save();
        return redirect()->route('referrals.index')->with('success', 'Referral record Created Successfully');
    }
    public function create()
    {
        return view('referrals.create');
    }

    public function show(Referral $referral)
    {
        //
    }

    public function edit(Referral $referral)
    {
        return view('referrals.edit', compact('referral'));
    }

    public function destroy(referral $referral)
    {
        ReferralSource::where('referral_id', $referral->id)->delete();
        ReferralDiagnosis::where('referral_id', $referral->id)->delete();
        $referral->delete();
        return redirect()->route('referrals.index')->with('success', 'Referral record Delete Successfully');
    }

    public function update(Request $request,$id)
    {
        $referral = Referral::findOrFail($id);
    $referral->type_of_visit = $request->type_of_visit;
    $referral->service_req_name_address = $request->service_req_name_address;
    $referral->date_of_request = $request->date_of_request;
    $referral->reply_name_dept = $request->reply_name_dept;
    $referral->telephone_ext = $request->telephone_ext;
    $referral->phy_order_soc_date = $request->phy_order_soc_date;
    $referral->na_no_specidic_soc = $request->na_no_specidic_soc;
    $referral->updated_reff_date = $request->updated_reff_date;
    $referral->patient_full_name = $request->patient_full_name;
    $referral->patient_dob = $request->patient_dob;
    $referral->gender = $request->gender;
    $referral->patient_full_address = $request->patient_full_address;
    $referral->apt_no = $request->apt_no;
    $referral->telephone_no = $request->telephone_no;
    $referral->patient_visite_address = $request->patient_visite_address;
    $referral->patient_visite_apt = $request->patient_visite_apt;
    $referral->patient_visite_phone = $request->patient_visite_phone;
    // $referral->medicare_no = $request->medicare_no;
    // $referral->medicare_od_dss = $request->medicare_od_dss;
    $referral->authorization_required = $request->authorization_required;
    $referral->authorization_received = $request->authorization_received;
    $referral->other_ins = $request->other_ins;
    $referral->policy_no = $request->policy_no;
    $referral->type_of_coverage = $request->type_of_coverage;
    $referral->hospital_or_pac_add_date = $request->hospital_or_pac_add_date;
    $referral->hospital_or_pac_diss_date = $request->hospital_or_pac_diss_date;
    $referral->save();

    $referralDiagnosis = ReferralDiagnosis::where('referral_id', $id)->first();
    $referralDiagnosis->primary_diagnosis = $request->primary_diagnosis;
    $referralDiagnosis->secondary_diagnosis = $request->secondary_diagnosis;
    $referralDiagnosis->surgery_date = $request->surgery_date;
    $referralDiagnosis->signafiq_med_surg_history = $request->signafiq_med_surg_history;
    $referralDiagnosis->prognosis = $request->prognosis;
    $referralDiagnosis->therapeutic_goals = $request->therapeutic_goals;
    $referralDiagnosis->diagnosis_known_by = $request->diagnosis_known_by;
    $referralDiagnosis->not_kown_explain = isset($request->not_kown_explain);
    $referralDiagnosis->provide_orders = $request->provide_orders;
    $referralDiagnosis->physician_provider = $request->physician_provider;
    $referralDiagnosis->clinic = $request->clinic;
    $referralDiagnosis->clinic_phone = $request->clinic_phone;
    $referralDiagnosis->patient_essentially_homebound = $request->patient_essentially_homebound;
    $referralDiagnosis->home_health_services = $request->home_health_services;
    $referralDiagnosis->condition_for_which_patient = $request->condition_for_which_patient;
    $referralDiagnosis->skilled_nursing = isset($request->skilled_nursing);
    $referralDiagnosis->pt = isset($request->pt);
    $referralDiagnosis->ot = isset($request->ot);
    $referralDiagnosis->slp = isset($request->slp);
    $referralDiagnosis->mss = isset($request->mss);
    $referralDiagnosis->other = isset($request->other);
    // $referralDiagnosis->physician_signature = $request->physician_signature;
    $referralDiagnosis->physician_signature_date = $request->physician_signature_date;
    $referralDiagnosis->save();

    $referralSource = ReferralSource::where('referral_id', $id)->first();
    $referralSource->nursing_therapy_assignment = $request->nursing_therapy_assignment;
    $referralSource->med_sup_eqp = $request->med_sup_eqp;
    $referralSource->admitted = $request->admitted;
    $referralSource->staff_assigned_add = $request->staff_assigned_add;
    $referralSource->reason_for_addmitted = $request->reason_for_addmitted;
    $referralSource->recomendation_pt = isset($request->recomendation_pt);
    $referralSource->recomendation_ot = isset($request->recomendation_ot);
    $referralSource->recomendation_slp = isset($request->recomendation_slp);
    $referralSource->recomendation_msw = isset($request->recomendation_msw);
    $referralSource->recomendation_md = isset($request->recomendation_md);
    $referralSource->recomendation_other = $request->recomendation_other;
    // $referralSource->agency_staff_signature = $request->agency_staff_signature;
    $referralSource->save();

    return redirect()->route('referrals.index')->with('success', 'Referral record updated successfully');
    }
}
