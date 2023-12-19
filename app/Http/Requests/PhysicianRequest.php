<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhysicianRequest extends FormRequest
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
            'first_name' => 'required|max:255',
            'physician_last_name' => 'required|max:255',
            'npi_number' => 'required|max:255',
            'speciality' => 'nullable|max:255',
            'address_line_1' => 'nullable|max:255',
            'state' => 'nullable|max:255',
            'city' => 'nullable|max:255',
            'zip' => 'nullable|max:255',
            'primary_phone' => 'nullable|max:255',
        ];
    }
}
