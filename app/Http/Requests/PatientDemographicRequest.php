<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientDemographicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'referral_date' => 'required',
            'marital_status' => 'required',
            'date_of_birth' => 'required',
            's_s_number' => 'required',
            'insurance_type' => 'required',
            'p_h_address_line_1' => 'required',
            'p_h_zip' => 'required',
            'p_h_country' => 'required',
            'p_h_state' => 'required',
            'p_h_phone' => 'required',
            'p_h_alternate_phone' => 'required',
            'patient_language_spoken' => 'required',
            'use_of_interpreter' => 'required',
            'race_ethnicity' => 'required',
            'clinical_manager' => 'required',
            'case_manager' => 'required',
            'oasis_assigned_manager' => 'required',
            'pt_approved' => 'required',
            'ot_approved' => 'required',
            'st_approved' => 'required',
            'p_s_address_line_1' => 'required',
            'p_s_zip' => 'required',
            'p_s_country' => 'required',
            'p_s_state' => 'required',
            'p_s_phone' => 'required',
            'p_s_alternate_phone' => 'required',
            'patient_admission_history' => 'required',
            'services_requested' => 'required',
        ];
    }
}
