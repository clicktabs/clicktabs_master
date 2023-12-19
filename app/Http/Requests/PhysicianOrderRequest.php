<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhysicianOrderRequest extends FormRequest
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
            'PhysicianName' => 'string',
            'ClientName' => 'string',
            'Address_1' => 'string',
            'Address_2' => 'string',
            'Tel_1' => 'string',
            'Fax' => 'string',
            'Tel_2' => 'string',
            'SSN' => 'string',
            'NPI' => 'string',
            'ClientDateOfBirth' => 'date',
            'Date' => 'date',
            'Sex' => 'string',
            'skilled_nursing' => 'boolean',
            'home_health_aide' => 'boolean',
            'therapy' => 'boolean',
            'evaluate_other' => 'boolean',
            'PrimaryDiagnosis' => 'string',
            'NewMedicationDate' => 'string',
            'OldMedicationsDate' => 'string',
            'MdSignature' => 'string',
            'MdSignatureDate' => 'string',
            'NurseSignature' => 'string',
            'NurseSignatureDate' => 'date',
        ];
    }
}
