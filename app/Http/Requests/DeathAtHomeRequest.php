<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DeathAtHomeRequest extends FormRequest
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
            'dateofdeath' => 'nullable|date',
            'PlanOfCare' => 'nullable|string|max:255',
            'PlanOfCare_1' => 'nullable|string|max:255',
            'relationshiptoPatient' => 'nullable|string|max:255',
            'pptd' => 'nullable|string|max:255',
            'personName' => 'nullable|string|max:255',
            'Relationship' => 'nullable|string|max:255',
            'RelationName' => 'nullable|string|max:255',
            'RelationName_1' => 'nullable|string|max:255',
            'RelationName_2' => 'nullable|string|max:255',
            'RelationName_3' => 'nullable|string|max:255',
            'involvedSN' => 'nullable|boolean',
            'involvedPT' => 'nullable|boolean',
            'involvedOT' => 'nullable|boolean',
            'involvedST' => 'nullable|boolean',
            'involvedMSW' => 'nullable|boolean',
            'involvedAide' => 'nullable|boolean',
            'teamMembers' => 'nullable|boolean',
            'otherMembers' => 'nullable|string|max:255',
            'representative' => 'nullable|string|max:255',
            'pharmaceutical' => 'nullable|string|max:255',
            'pharmaceutical_1' => 'nullable|string|max:255',
            'medications' => 'nullable|string|max:255',
            'TransferDeath' => 'nullable|string|max:255',
            'TransferDeath_1' => 'nullable|string',
            'malled' => 'nullable|boolean',
            'emalled' => 'nullable|boolean',
            'faxed' => 'nullable|boolean',
            'faxed_1' => 'nullable|boolean',
            'facilityName_1' => 'nullable|string|max:255',
            'certifyingPhysician_1' => 'nullable|boolean',
            'Othercertifying' => 'nullable|string|max:255',
            'Datecertifying' => 'nullable|date',
            'secondaryPhysician' => 'nullable|boolean',
            'secondaryPhysician_1' => 'nullable|string|max:255',
            'secondaryPhysician_date' => 'nullable|date',
            'primaryCare' => 'nullable|boolean',
            'primaryCare_date' => 'nullable|date',
            'anyRepresentative' => 'nullable|boolean',
            'anyRepresentative_date' => 'nullable|date',
            'personCompleting' => 'nullable|string|max:255',
            'personCompleting_date' => 'nullable|string',
            'personCompleting_time' => 'nullable|date',
        ];
    }
}
