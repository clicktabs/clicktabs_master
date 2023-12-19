<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateReferralRequest extends FormRequest
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
            'first_name' => 'required|string',
            'middle_name' => 'nullable|string',
            'last_name' => 'required|string',
            'gender' => 'required|max:1|string',
            'date_of_birth' => 'date|nullable',
            'email' => 'nullable|email',
            'mobile_phone' => 'string|nullable',
            'alternate_phone_number' => 'string|nullable',
            'marital_status' => 'string|nullable',

            'country' => 'string|nullable',
            'zip_code' => 'string|nullable',
            'primary_address_line_1' => 'string|nullable',
            'primary_address_line_2' => 'string|nullable',
            'city' => 'string|nullable',
//            'county' => 'string|nullable',
            'primary_language' => 'nullable|string',
//            'language_barrier' => 'present',
//            'needs_interpreter' => 'present',
        ];
    }
}
