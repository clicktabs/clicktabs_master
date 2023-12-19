<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PharmacyRequest extends FormRequest
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
            'pharmacy_name' => 'required|max:255',
            'pharmacy_reference_code' => 'required|max:255',
            'pharmacy_address' => 'required|max:255',
            'pharmacy_telephone' => 'required|max:255',
            'pharmacy_fax' => 'required|max:255'
        ];
    }
}
