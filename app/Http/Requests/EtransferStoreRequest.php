<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EtransferStoreRequest extends FormRequest
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
            'dopca' => 'nullable|integer',
            'assessment_month' => 'nullable|string|max:255',
            'assessment_day' => 'nullable|string|max:255',
            'assessment_year' => 'nullable|string|max:255',
            'resumption_of_care.*' => 'string',
            'assessment_month2' => 'nullable|string|max:255',
            'assessment_day2' => 'nullable|string|max:255',
            'assessment_year2' => 'nullable|string|max:255',
            'EmergentCare' => 'nullable|integer',
            'reason_for_emergent_care.*' => 'string',
            'wifpa' => 'nullable|integer',
            'pcrmltsp' => 'nullable|integer',
            'route_of_transmission.*' => 'string',
            'pfsrwmr' => 'nullable|integer',
            'boxA' => 'nullable|integer',
            'boxB' => 'nullable|integer',
            'boxC' => 'nullable|integer',
            'MedicationIntervention' => 'nullable|integer',
            'fpi' => 'nullable|integer',
            'dimrtmp' => 'nullable|integer',
            'itmamp' => 'nullable|integer',
            'itppu' => 'nullable|integer',
            'putpmwh' => 'nullable|integer',
        ];
    }
}
