<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OasisEDathSecAjnoqRequest extends FormRequest
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
            'schedule_id' => 'nullable|integer',
            'dopca' => 'nullable|string|max:255',
            'assessmentCompleted_Month' => 'nullable|string|max:255',
            'assessmentCompleted_Day' => 'nullable|string|max:255',
            'assessmentCompleted_Year' => 'nullable|string|max:255',
            'inpatientFacility' => 'nullable|string|max:255',
            'inpatientFacility_1' => 'nullable|string|max:255',
            'Discharge' => 'nullable|string|max:255',
            'certifyingPhysician' => 'nullable|string',
            'dischargeMonth' => 'nullable|string|max:255',
            'dischargeDay' => 'nullable|string|max:255',
            'dischargeYear' => 'nullable|string|max:255',
            'EmergentCare' => 'nullable|string|max:255',
            'improperMedication' => 'nullable|string|max:255',
            'Hyperglycemia' => 'nullable|string|max:255',
            'aboveReasons' => 'nullable|string|max:255',
            'reasonUnknown' => 'nullable|string|max:255',
            'wifpa' => 'nullable|string|max:255',
            'admissionReason' => 'nullable|string',
            'facilityName_1' => 'nullable|string|max:255',
            'patientLast' => 'nullable|string|max:255',
            'patientFirst' => 'nullable|string|max:255',
            'patientMiddle' => 'nullable|string|max:255',
            'patientID' => 'nullable|string|max:255',
            'pcrmltsp' => 'nullable|string|max:255',
            'electronicHealth' => 'nullable|string|max:255',
            'healthInformation' => 'nullable|string|max:255',
            'Verbal' => 'nullable|string|max:255',
            'paperBased' => 'nullable|string|max:255',
            'otherMethods' => 'nullable|string|max:255',
            // Fields from Section J
            'pfsrwmr' => 'nullable|string|max:255',
            'Boxes' => 'nullable|integer',
            'exceptMajor' => 'nullable|integer',
            'jointDislocations' => 'nullable|integer',
            'fallWithInjury' => 'nullable|boolean',
            'fallInjury' => 'nullable|string',
            // Fields from Section N
            'MedicationIntervention' => 'nullable|string|max:255',
            // Fields from Section O
            'Influenza' => 'nullable|string|max:255',
            'fluseason' => 'nullable|string|max:255',
            'fluseason_specify' => 'nullable|string',
            // Fields from Section Q
            'fpi' => 'nullable|string|max:255',
            'dimrtmp' => 'nullable|string|max:255',
            'itmamp' => 'nullable|string|max:255',
            'itppu' => 'nullable|string|max:255',
            'putpmwh' => 'nullable|string|max:255',
            'status' => 'nullable|string|max:255',
        ];
    }
}
