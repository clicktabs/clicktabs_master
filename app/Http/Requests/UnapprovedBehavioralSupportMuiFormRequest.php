<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UnapprovedBehavioralSupportMuiFormRequest extends FormRequest
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
            'IndividualsName' => 'nullable|string|max:255',
            'DateofUBS' => 'nullable|date',
            'PersonCompletingForm' => 'nullable|string|max:255',
            'Title' => 'nullable|string|max:255',
            'ContactInformation' => 'nullable|string|max:255',
            'DateFormCompleted' => 'nullable|date',
            'MUINumber' => 'nullable|string|max:255',
            'Provider' => 'nullable|string|max:255',

            // Add validation rules for other fields here...
            'whatledtoUBS' => 'nullable|string',
            'behavioralsupport' => 'nullable|string',
            'Baskethold' => 'boolean',
            'MultiplePersonCarry' => 'boolean',
            'MultiplePersonEscort' => 'boolean',
            'OnePersonCarry' => 'boolean',
            'OnePersonEscort' => 'boolean',
            'OnePersonRestraint' => 'boolean',
            'DownwithResistance' => 'boolean',
            'Prone' => 'boolean',
            // Add validation rules for other checkboxes here...

            'time' => 'nullable|date_format:H:i',
            'Other' => 'nullable|string|max:255',

            'FullBody-papooseBoardWrap' => 'boolean',
            'FullBody-seatedPosition' => 'boolean',
            'FullBody-supinePosition' => 'boolean',
            'GaitBelt' => 'boolean',
            'Helmet' => 'boolean',
            'LockedSeatBelt' => 'boolean',
            'Mitts' => 'boolean',
            'Splints' => 'boolean',
            'Transportationlocked' => 'boolean',
            'Wheelchaircontrolsdisabled' => 'boolean',
            'Wheelchairforindividual' => 'boolean',
            'OtherMechanical' => 'nullable|string|max:255',

            'injuries' => 'nullable|string',
            'interventionsupport' => 'nullable|string',

            'SupervisionNotMet' => 'boolean',
            'StaffRatioNotAppropriate' => 'boolean',
            'DietNotFollowed' => 'boolean',
            'AskedtoCompleteTask' => 'boolean',
            'ChangeinRoutine' => 'boolean',
            'ExcessiveNoise' => 'boolean',
            'AttentionUnavailable' => 'boolean',
            'PeerAggression' => 'boolean',
            'OutingCancelled' => 'boolean',
            'ControlIssues' => 'boolean',
            'MedicationChanges' => 'boolean',
            'Illness' => 'boolean',
            'PossibleHallucination' => 'boolean',
            'LossImportantRelationship' => 'boolean',
            'ISP_BSPNotFollowed' => 'boolean',
            'Otherinterventionsupport' => 'nullable|string|max:255',

            'environmentalchanges' => 'boolean',
            'AgencyPolicy_SystemChange' => 'boolean',
            'Stafftraining' => 'boolean',
            'Counseling' => 'boolean',
            'addressISPchanges' => 'boolean',
            'AppointmentMedicalcare' => 'boolean',
            'Medicationchange' => 'boolean',
            'appointmentscheduled' => 'boolean',
            'PT_OT_Speechreferra' => 'boolean',
            'Dietchangeordered' => 'boolean',
            'Homehealthcare' => 'boolean',
            'OtherPREVENTION' => 'nullable|string|max:255',

            'CommentsQuestions' => 'nullable|string',
            'IANAME' => 'nullable|string|max:255',
            'REVIEWCOMPLETEDDATE' => 'nullable|date',

        ];
    }
}
