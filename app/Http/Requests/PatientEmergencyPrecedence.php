<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientEmergencyPrecedence extends FormRequest
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
            'emergency_first_name' => 'required',
            'emergency_relationship_patient' => 'required',
            'emergency_patient_address' => 'required',
            'emergency_patient_city' => 'required',
            'emergency_patient_state' => 'required',
            'emergency_patient_zip' => 'required',
            'emergency_patient_phone' => 'required',
        ];
    }
}
