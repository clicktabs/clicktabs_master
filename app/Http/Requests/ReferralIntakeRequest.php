<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReferralIntakeRequest extends FormRequest
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
            'schedule_id' => 'nullable|numeric',
            'Patient' => 'nullable|string',
            'Medicare' => 'nullable|string',
            'Address' => 'nullable|string',
            'Medicaid' => 'nullable|string',
            'cityState' => 'nullable|string',
            'Workers' => 'nullable|string',
            'Phone' => 'nullable|string',
            'dob' => 'nullable|date',
            'Race' => 'nullable|string',
            'MaritalStatus' => 'nullable|string',
            'referralSource' => 'nullable|string',
            'Hospital' => 'nullable|string',
            'startofCare' => 'nullable|date',
            'suppliesOrdered' => 'nullable|boolean',
            'needed' => 'nullable|boolean',
            'Principal' => 'nullable|string',
            'dateOe' => 'nullable|date',
            'secondaryDx' => 'nullable|string',
            'dateOf' => 'nullable|date',
            'surgicalProcedure' => 'nullable|string',
            'surgicalDate' => 'nullable|date',
            'Amputation' => 'nullable|boolean',
            'Paralysis' => 'nullable|boolean',
            'Hearing' => 'nullable|boolean',
            'Contracture' => 'nullable|boolean',
            'Vision' => 'nullable|boolean',
            'ExtremityInvolved' => 'nullable|string',
            'bedRrest' => 'nullable|boolean',
            'oOB' => 'nullable|boolean',
            'bRp' => 'nullable|boolean',
            'aMb' => 'nullable|boolean',
            'trans' => 'nullable|boolean',
            'WTBearing' => 'nullable|string',
            'AssistiveDevice' => 'nullable|string',
            'diet' => 'nullable|string',
            'allergies' => 'nullable|string',
            'FoleyCath' => 'nullable|string',
            'insertedDate' => 'nullable|date',
            'size' => 'nullable|string',
            'sN' => 'nullable|boolean',
            'sNfreq' => 'nullable|string',
            'sN_text' => 'nullable|string',
            'hha' => 'nullable|boolean',
            'hhaFreq' => 'nullable|string',
            'hha_text' => 'nullable|string',
            'pt' => 'nullable|boolean',
            'ptFreq' => 'nullable|string',
            'pt_text' => 'nullable|string',
            'ot' => 'nullable|boolean',
            'otFreq' => 'nullable|string',
            'ot_text' => 'nullable|string',
            'st' => 'nullable|boolean',
            'stFreq' => 'nullable|string',
            'st_text' => 'nullable|string',
            'msw' => 'nullable|boolean',
            'mswFreq' => 'nullable|string',
            'msw_text' => 'nullable|string',
            'msw1' => 'nullable|boolean',
            'msw1Freq' => 'nullable|string',
            'msw1_text' => 'nullable|string',
            'ancillaryServices' => 'nullable|boolean',
            'referrals' => 'nullable|boolean',
            'medications' => 'nullable|string',
            'primaryCaregiver' => 'nullable|string',
            'emergencyContact' => 'nullable|string',
            'Physician' => 'nullable|string',
            'physicianAddress' => 'nullable|string',
            'physicianOrders' => 'nullable|string',
            'intakeRN' => 'nullable|string',
            'intakeDate' => 'nullable|date',
            'intakeTime' => 'nullable',
        ];
    }
}
