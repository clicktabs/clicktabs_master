<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrganizationRequest extends FormRequest
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
            'name' => 'string|min:3',
            'phone' => 'string|min:12',
            'email' => 'email|string',
//            'national_provider_number' => 'string',
//            'tax_id' => 'string',
//            'tax_id_type' => 'integer',
//            'medicare_provider_number' => 'string',
//            'medicaid_provider_number' => 'string',
//            'medicaid_provider_identifier' => 'string',
//            'unique_agency_oasis_id_code' => 'string',
//            'dme_medicaid_provider_identifier' => 'string',
//            'cahps_vendor_id' => 'string',
//            'country_id' => 'integer',
//            'zip_code' => 'string|numeric',
//            'address_line_1' => 'string',
//            'address_line_2' => 'string|nullable',
//            'po_box_address' => 'string|nullable',
//            'city' => 'string',
//            'contact_person_first_name' => 'string|min:3',
//            'contact_person_last_name' => 'string|min:3',
//            'contact_person_email' => 'email',
//            'contact_person_phone' => 'numeric|min:12',
        ];
    }
}
