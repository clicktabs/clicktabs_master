<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MedicationAdministrationRequest extends FormRequest
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
            'patient_id' => 'nullable|integer',
            'individual_name' => 'nullable|string',
            'sex' => 'nullable|string',
            'dob' => 'nullable|date',
            'diagnosis' => 'nullable|string',
            'diet' => 'nullable|string',
            'sd_instruction' => 'nullable|string',
            'phone_number' => 'nullable|string',
            'pysician_name' => 'nullable|string',
            'date' => 'nullable|date',
            'provider_name' => 'nullable|string',
            'comment_section' => 'nullable|string',
        ];
    }
}
