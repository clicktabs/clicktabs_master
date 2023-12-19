<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HospitalizationRequest extends FormRequest
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
            'IndividualsName' => 'nullable|string',
            'DateFormCompleted' => 'nullable|date',
            'DateofHospitalization' => 'nullable|date',
            'MUI_Number' => 'nullable|string',
            'NameofPersonCompletingForm' => 'nullable|string',
            'Title' => 'nullable|string',
            'Provider' => 'nullable|string',
            'ContactInformation' => 'nullable|string',
            'hospitalization' => 'nullable|string',
            'toh' => 'nullable|string',
            'days_individual_in_the_hospital' => 'nullable|string',
            'AbdominalPains' => 'boolean|nullable',
            'AbnormalBlood' => 'boolean|nullable',
            'AbsentPulse' => 'boolean|nullable',
            'AllergicReaction' => 'boolean|nullable',
            'AlteredState' => 'boolean|nullable',
            'BaclofenPumpIssuesBlood' => 'boolean|nullable',
            'Pressure' => 'boolean|nullable',
            'BloodSugarLevels' => 'boolean|nullable',
            'BodyTemperatureVariations' => 'boolean|nullable',
            'BowelObstruction' => 'boolean|nullable',
            'Cancer' => 'boolean|nullable',
            'ChestPains' => 'boolean|nullable',
            'DebucitusUlcer' => 'boolean|nullable',
            'DehydrationVolumeDepletion' => 'boolean|nullable',
            'Edema' => 'boolean|nullable',
            'Emesis' => 'boolean|nullable',
            'Gallbladder' => 'boolean|nullable',
            'GeneralizedPain' => 'boolean|nullable',
            'HeartProblems' => 'boolean|nullable',
            'ImpairedRespiration' => 'boolean|nullable',
            'Infection' => 'boolean|nullable',
            'IngestionPICA' => 'boolean|nullable',
            'Kidney' => 'boolean|nullable',
            'MedicalError' => 'boolean|nullable',
            'ObservationEvaluation' => 'boolean|nullable',
            'PlacediteminOrifice' => 'boolean|nullable',
            'PneumoniaandInfluenza' => 'boolean|nullable',
            'Seizures' => 'boolean|nullable',
            'Shunt' => 'boolean|nullable',
            'Stroke' => 'boolean|nullable',
            'SyncopeUncontrollable' => 'boolean|nullable',
            'Bleeding' => 'boolean|nullable',
            'otherREASON' => 'string|nullable',
            'individualssymptoms' => 'string|nullable',
            'individualsdiagnosis' => 'string|nullable',
            'continuingneeds' => 'string|nullable',
            'MedicationChange' => 'boolean|nullable',
            'ChokedonFood' => 'boolean|nullable',
            'MedicationError' => 'boolean|nullable',
            'FallDueToEnvironmentalFactors' => 'boolean|nullable',
            'FallDueToMobilityIssues' => 'boolean|nullable',
            'AspirationDueToImproperDietTexture' => 'boolean|nullable',
            'FailureToProvideTimelyMedicalCare' => 'boolean|nullable',
            'StaffDidNotMonitorInputOutputOfFluids' => 'boolean|nullable',
            'OtherFACTORS' => 'string|nullable',
            'PhysicalSocialEnvironmentalChange' => 'boolean|nullable',
            'AgencyPolicySystemChange' => 'boolean|nullable',
            'StaffTraining' => 'boolean|nullable',
            'Counseling' => 'boolean|nullable',
            'TeamMeetingToAddressISPChanges' => 'boolean|nullable',
            'AppointmentWithMedicalCareProvider' => 'boolean|nullable',
            'MedicationChanges' => 'boolean|nullable',
            'FollowUpAppointmentScheduled' => 'boolean|nullable',
            'PTOTSpeechReferral' => 'boolean|nullable',
            'DietChangeOrdered' => 'boolean|nullable',
            'HomeHealthCare' => 'boolean|nullable',
            'OtherPREVENTION' => 'string|nullable',
            'CommentsQuestions' => 'string|nullable',
            'IA_NAME' => 'string|nullable',
            'ReviewCompletedDate' => 'date|nullable',
        ];
    }
}
