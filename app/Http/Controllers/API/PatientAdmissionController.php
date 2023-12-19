<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PatientAdmission;

class PatientAdmissionController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $patientAdmission = new PatientAdmission();
        $patientAdmission->organization_id = $request->organization_id;
        $patientAdmission->patient_code = $request->patient_code;
        $patientAdmission->first_name = $request->first_name;
        $patientAdmission->middle_name = $request->middle_name;
        $patientAdmission->last_name = $request->last_name;
        $patientAdmission->gender = $request->gender;
        $patientAdmission->marital_status = $request->marital_status;
        $patientAdmission->date_of_birth = $request->date_of_birth;
        $patientAdmission->mi_no = $request->mi_no;
        $patientAdmission->social_security_no = $request->social_security_no;
        $patientAdmission->insurance_type = $request->insurance_type;
        $patientAdmission->status = $request->status;
        $patientAdmission->active = $request->active;
        $patientAdmission->address_line_1 = $request->address_line_1;
        $patientAdmission->address_line_2 = $request->address_line_2;
        $patientAdmission->city = $request->city;
        $patientAdmission->country = $request->country;
        $patientAdmission->state = $request->state;
        $patientAdmission->zip = $request->zip;
        $patientAdmission->county = $request->county;
        $patientAdmission->phone = $request->phone;
        $patientAdmission->alternate_phone = $request->alternate_phone;
        $patientAdmission->patient_language_spoken = $request->patient_language_spoken;
        $patientAdmission->use_of_interpreter = $request->use_of_interpreter;
        $patientAdmission->race_ethnicity = $request->race_ethnicity;
        $patientAdmission->source_of_admission = $request->source_of_admission;
        $patientAdmission->services_requested = $request->services_requested;
        $patientAdmission->primary_physician_id = $request->primary_physician_id;
        $patientAdmission->referring_physician_id = $request->referring_physician_id;
        $patientAdmission->face_to_face_evaluation = $request->face_to_face_evaluation;
        $patientAdmission->pharmacy_id = $request->pharmacy_id;
        $patientAdmission->advance_directives = $request->advance_directives;
        $patientAdmission->emergency_preparedness = $request->emergency_preparedness;
        $patientAdmission->coordination_of_care = $request->coordination_of_care;
        $patientAdmission->clinical_care_managers = $request->clinical_care_managers;
        $patientAdmission->case_managers = $request->case_managers;
        $patientAdmission->oasis_assigned_to = $request->oasis_assigned_to;
        $patientAdmission->ot_assigned_to = $request->ot_assigned_to;
        $patientAdmission->pt_assigned_to = $request->pt_assigned_to;
        $patientAdmission->st_assigned_to = $request->st_assigned_to;
        $patientAdmission->patient_id = $request->patient_id;
        $patientAdmission->name = $request->name;
        $patientAdmission->relationship_to_patient = $request->relationship_to_patient;
        $patientAdmission->e_address = $request->e_address;
        $patientAdmission->e_city = $request->e_city;
        $patientAdmission->e_state = $request->e_state;
        $patientAdmission->e_zip = $request->e_zip;
        $patientAdmission->e_phone = $request->e_phone;
        $patientAdmission->e_alternate_phone = $request->e_alternate_phone;
        $patientAdmission->primary_payor = $request->primary_payor;
        $patientAdmission->secondary_payor = $request->secondary_payor;
        $patientAdmission->co_pay = $request->co_pay;
        $patientAdmission->private_pay = $request->private_pay;
        $patientAdmission->medicaid_id = $request->medicaid_id;

        $patientAdmission->medicare_id = $request->medicare_id;
        $patientAdmission->nic_id = $request->nic_id;
        $patientAdmission->payment_source = $request->payment_source;
        $patientAdmission->oasis_start_care = $request->oasis_start_care;

        $patientAdmission->schedule_therapy = $request->schedule_therapy;
        $patientAdmission->non_oasis_start_care = $request->non_oasis_start_care;
        $patientAdmission->initial_oasis_recert = $request->initial_oasis_recert;
        $patientAdmission->initial_non_oasis_recert = $request->initial_non_oasis_recert;
        $patientAdmission->start_care_date = $request->start_care_date;
        $patientAdmission->episode_start_date = $request->episode_start_date;
        $patientAdmission->health_payment_episode = $request->health_payment_episode;
        $patientAdmission->save();



        return response()->json([
            'message' => 'Patient Admission complete successfully.',
            'data' => $patientAdmission
        ], 200);
    }



    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
