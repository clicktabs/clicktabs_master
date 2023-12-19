<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnnualReportRequest extends FormRequest
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
            'schedule_id' => 'nullable|string',
            'agencyprovider_Name' => 'required|string',
            'agencyproviderMUI_Review' => 'required|date',
            'agencyproviderMUI_categories' => 'required|integer',
            'agencyprovidertotalnumber_MUI' => 'required|integer',
            'agencyprovidersameperiod_MUI' => 'required|integer',

            // Add validation rules for MUI Categories by type
            'annualReport_Attempted_suicide_1' => 'nullable|integer',
            'annualReport_Attempted_suicide_2' => 'nullable|integer',
            'annualReport_Attempted_suicide_3' => 'nullable|integer',

            'annualReport_Attempted_Death-Non-Accidental' => 'nullable|integer',
            'annualReport_Attempted_Death-Non-Accidental_1' => 'nullable|integer',
            'annualReport_Attempted_Death-Non-Accidental_2' => 'nullable|integer',

            'annualReport_Attempted_Exploitation' => 'nullable|integer',
            'annualReport_Attempted_Exploitation_1' => 'nullable|integer',
            'annualReport_Attempted_Exploitation_2' => 'nullable|integer',

            'annualReport_Attempted_Failure' => 'nullable|integer',
            'annualReport_Attempted_Failure_1' => 'nullable|integer',
            'annualReport_Attempted_Failure_2' => 'nullable|integer',

            'annualReport_Attempted_Enforcement' => 'nullable|integer',
            'annualReport_Attempted_Enforcement_1' => 'nullable|integer',
            'annualReport_Attempted_Enforcement_2' => 'nullable|integer',

            'annualReport_Attempted_Medical_Emergency' => 'nullable|integer',
            'annualReport_Attempted_Medical_Emergency_1' => 'nullable|integer',
            'annualReport_Attempted_Medical_Emergency_2' => 'nullable|integer',

            'annualReport_Attempted_Misappropriation' => 'nullable|integer',
            'annualReport_Attempted_Misappropriation_1' => 'nullable|integer',
            'annualReport_Attempted_Misappropriation_2' => 'nullable|integer',

            'annualReport_Attempted_Missing_Individual' => 'nullable|integer',
            'annualReport_Attempted_Missing_Individual_1' => 'nullable|integer',
            'annualReport_Attempted_Missing_Individual_2' => 'nullable|integer',

            'annualReport_Attempted_Neglect' => 'nullable|integer',
            'annualReport_Attempted_Neglect_1' => 'nullable|integer',
            'annualReport_Attempted_Neglect_2' => 'nullable|integer',

            'annualReport_Attempted_PeertoPeer' => 'nullable|integer',
            'annualReport_Attempted_PeertoPeer_1' => 'nullable|integer',
            'annualReport_Attempted_PeertoPeer_2' => 'nullable|integer',

            'annualReport_Attempted_Physical_Abuse' => 'nullable|integer',
            'annualReport_Attempted_Physical_Abuse_1' => 'nullable|integer',
            'annualReport_Attempted_Physical_Abuse_2' => 'nullable|integer',

            'annualReport_Attempted_Prohibited' => 'nullable|integer',
            'annualReport_Attempted_Prohibited_1' => 'nullable|integer',
            'annualReport_Attempted_Prohibited_2' => 'nullable|integer',

            'annualReport_Rights_Code_Violation' => 'nullable|integer',
            'annualReport_Rights_Code_Violation_1' => 'nullable|integer',
            'annualReport_Rights_Code_Violation_2' => 'nullable|integer',

            'annualReport_Rights_Sexual_Abuse' => 'nullable|integer',
            'annualReport_Rights_Sexual_Abuse_1' => 'nullable|integer',
            'annualReport_Rights_Sexual_Abuse_2' => 'nullable|integer',

            'annualReport_Rights_Significant_Injury' => 'nullable|integer',
            'annualReport_Rights_Significant_Injury_1' => 'nullable|integer',
            'annualReport_Rights_Significant_Injury_2' => 'nullable|integer',

            'annualReport_Rights_Unapproved_Behavioral' => 'nullable|integer',
            'annualReport_Rights_Unapproved_Behavioral_1' => 'nullable|integer',
            'annualReport_Rights_Unapproved_Behavioral_2' => 'nullable|integer',

            'annualReport_Rights_Unanticipated_Hospitalization' => 'nullable|integer',
            'annualReport_Rights_Unanticipated_Hospitalization_1' => 'nullable|integer',
            'annualReport_Rights_Unanticipated_Hospitalization_2' => 'nullable|integer',

            'annualReport_Rights_Verbal_Abuse' => 'nullable|integer',
            'annualReport_Rights_Verbal_Abuse_1' => 'nullable|integer',
            'annualReport_Rights_Verbal_Abuse_2' => 'nullable|integer',

            'annualReport_Rights_Explain' => 'required|string',
            'annualReport_Rights_AgencyTrends' => 'required|string',
            'annualReport_Rights_Description_action' => 'required|string',
            'annualReport_Rights_previouse_year' => 'required|string',
            'annualReport_Rights_preventive' => 'required|string',
            'annualReport_Rights_individualswith5' => 'required|string',
            'annualReport_Rights_MUI_types' => 'required|integer',
            'annualReport_Rights_actionplansPreventives' => 'required|string',
            'annualReport_Rights_datatheAction' => 'required|date',
            'annualReport_Rights_Datereview' => 'required|date',
            'annualReport_Rights_nameofpersonComplete' => 'required|string',
        ];
    }
}
