<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HhaCarePlanRequest extends FormRequest
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
            'clicentName' => 'required|string|max:255',
            'associatedCare' => 'string|max:255',
            'primaryDiagnosis' => 'string|max:255',
            'diet' => 'string|max:255',
            'mrn' => 'string|max:255',
            'visitdate' => 'date',
            'hhaFrequency' => 'string|max:255',
            'secondaryDiagnosis' => 'string|max:255',
            'allergies' => 'string|max:255',
            'dnr_1' => 'string|max:255',
            'no' => 'boolean',

            // Validation rules for Vital Sign Parameters
            'greater_1' => 'string',
            'greater_2' => 'string',
            'greater_3' => 'string',
            'greater_4' => 'string',
            'greater_5' => 'string',
            'greater_6' => 'string',
            'les_1' => 'string',
            'les_2' => 'string',
            'les_3' => 'string',
            'les_4' => 'string',
            'les_5' => 'string',
            'les_6' => 'string',
            'na' => 'boolean',

            // Validation rules for Safety Precautions
            'anticoagulantPrecautions' => 'boolean',
            'keepPathwayClear' => 'boolean',
            'properPositionDuring' => 'boolean',
            'sharpsSafety' => 'boolean',
            'supportDuring' => 'boolean',
            'emergencyPlan' => 'boolean',
            'keepSide' => 'boolean',
            'safetyinADLs' => 'boolean',
            'slowPosition' => 'boolean',
            'useOf' => 'boolean',
            'fallPrecautions' => 'boolean',
            'neutropenicPrecautions' => 'boolean',
            'seizurePrecautions' => 'boolean',
            'standardPrecautions' => 'boolean',
            'precautions' => 'boolean',
            'Other' => 'string|max:255',

            // Validation rules for Functional Limitations
            'Amputation' => 'boolean',
            'Hearing' => 'boolean',
            'Ambulation' => 'boolean',
            'Dyspnea' => 'boolean',
            'Bowel' => 'boolean',
            'Paralysis' => 'boolean',
            'Speech' => 'boolean',
            'other_1' => 'string|max:255',

            // Validation rules for Activities Permitted
            'Complete' => 'boolean',
            'Transfer' => 'boolean',
            'Independent' => 'boolean',
            'Wheelchair' => 'boolean',
            'bedRest' => 'boolean',
            'Exercise' => 'boolean',
            'Crutches' => 'boolean',
            'Walker' => 'boolean',
            'tolerated' => 'boolean',
            'weight' => 'boolean',
            'Cane' => 'boolean',
            'cane_Other' => 'string|max:255',
            'status' => 'string|max:255',

            'Temperature' => 'string|max:255',
            'BloodPressure' => 'string|max:255',
            'HeartRate' => 'string|max:255',
            'Respirations' => 'string|max:255',
            'Weight' => 'string|max:255',
            'Assist' => 'string|max:255',
            'assistWith' => 'string|max:255',
            'incontinenceCare' => 'string|max:255',
            'emptyDrainage' => 'string|max:255',
            'bedBath' => 'string|max:255',
            'tubBath' => 'string|max:255',
            'Shower' => 'string|max:255',
            'showerChair' => 'string|max:255',
            'hairComb' => 'string|max:255',
            'oralCare' => 'string|max:255',
            'skinCare' => 'string|max:255',
            'Pericare' => 'string|max:255',
            'Shave' => 'string|max:255',
            'Dressing' => 'string|max:255',
            'medicationReminder' => 'string|max:255',
            'assistTransfer' => 'string|max:255',
            'Dangle' => 'string|max:255',
            'turnPosition' => 'string|max:255',
            'rangeMotion' => 'string|max:255',
            'assistwithAmbulation' => 'string|max:255',
            'makeBed' => 'string|max:255',
            'Housekeeping' => 'string|max:255',
            'Nutrition' => 'string|max:255',
            'mealSetUp' => 'string|max:255',
            'assistWithFeeding' => 'string|max:255',
            'Record' => 'string|max:255',
            'comments' => 'string',
            'healthAide' => 'boolean',
            'carePlan' => 'boolean',
            'Signature' => 'string|max:255',
            'date' => 'date',


        ];
    }
}
