<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InfectionControlRequest extends FormRequest
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
            'schedule_id' => 'nullable|integer',
            'patient_id' => 'nullable|integer',
            'primaryPhysician_id' => 'nullable|integer',
            'caseManager_id' => 'nullable|integer',
            'infectionReportedBy_id' => 'nullable|integer',
            'dateReported' => 'nullable|date',
            'time' => 'nullable|string',
            'infectionReportedTo_id' => 'nullable|integer',
            'ii_status' => 'nullable|string',
            'date_of_Onset' => 'nullable|date',
            'dateSet' => 'nullable|boolean',
            'infectionDescription' => 'nullable|string',
            'infectionType' => 'nullable|string',
            'infectionSite' => 'nullable|string',
            'patientLocation' => 'nullable|string',
            'Communicable' => 'nullable|string',
            'PhysicianNotified' => 'nullable|integer',
            'labsOrdered' => 'nullable|integer',
            'PatientHospitalized' => 'nullable|integer',
            'CultureTaken' => 'nullable|integer',
            'iatcPhysician_id' => 'nullable|integer',
            'date_1' => 'nullable|date',
            'time_1' => 'nullable|string',
            'date_2' => 'nullable|date',
            'time_2' => 'nullable|string',
            'date_3' => 'nullable|date',
            'time_3' => 'nullable|string',
            'dateNotified' => 'nullable|string',
            'timedNotified' => 'nullable|string',
            'notes' => 'nullable|string',
            'treatmentNotes' => 'nullable|string',
            'infectionFollow' => 'nullable|string',
            'follow-UpRequired' => 'nullable|string'
        ];
    }
}
