<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientRequest extends FormRequest
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
            'org_id' => 'required|string',
            'first_name' => 'required|string',
            'middle_name' => 'nullable|string',
            'last_name' => 'required|string',
            'gender' => 'required|max:1|string',
            'date_of_birth' => 'date|nullable',
            'email' => 'email|nullable',
            'mobile_phone' => 'string|nullable',
            'altenate_phone' => 'string|nullable',
            'marital_statue' => 'string|nullable',
            'social_security_number' => 'string|nullable',
            'mbi_number' => 'string|nullable',
            'hic_number' => 'string|nullable',
            'medicaid_number' => 'string|nullable',
            'primary_insurance' => 'string|nullable',
            'secondary_insurance' => 'string|nullable',
            'tertiary_insurance' => 'string|nullable',
            'country' => 'nullable',
            'zip_code' => 'string|nullable',
            'primary_address_line_1' => 'string|nullable',
            'primary_address_line_2' => 'string|nullable',
            'county' => 'nullable',
            'city' => 'string|nullable',
            'address_line_1' => 'string|nullable',
            'address_line_2' => 'string|nullable',
            'contact_person_first_name' => 'string|nullable',
            'contact_person_last_name' => 'string|nullable',
            'contact_person_email' => 'email|nullable',
            'contact_person_phone' => 'string|nullable',
            'service_required' => 'nullable',
            'assigned_physician' => 'nullable',
        ];
    }
}
