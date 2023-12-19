<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccidentRiskAssessmentRequest extends FormRequest
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
            'patient_name' => 'nullable|string|max:255',
            'clinician' => 'nullable|string|max:255',
            'consciousness_1' => 'nullable|integer|min:1',
            'consciousness_2' => 'nullable|integer|min:1',
            'consciousness_3' => 'nullable|integer|min:1',
            'falls_history_1' => 'nullable|integer|min:1',
            'falls_history_2' => 'nullable|integer|min:1',
            'falls_history_3' => 'nullable|integer|min:1',
            'ambulatory_status_1' => 'nullable|integer|min:1',
            'ambulatory_status_2' => 'nullable|integer|min:1',
            'ambulatory_status_3' => 'nullable|integer|min:1',
            'vision_status_1' => 'nullable|integer|min:1',
            'vision_status_2' => 'nullable|integer|min:1',
            'vision_status_3' => 'nullable|integer|min:1',
            'gait_balance_1' => 'nullable|integer|min:1',
            'gait_balance_2' => 'nullable|integer|min:1',
            'gait_balance_3' => 'nullable|integer|min:1',
            'gait_balance_4' => 'nullable|integer|min:1',
            'gait_balance_5' => 'nullable|integer|min:1',
            'gait_balance_6' => 'nullable|integer|min:1',
            'gait_balance_7' => 'nullable|integer|min:1',
            'blood_pressure_1' => 'nullable|integer|min:1',
            'blood_pressure_2' => 'nullable|integer|min:1',
            'blood_pressure_3' => 'nullable|integer|min:1',
            'medications_1' => 'nullable|integer|min:1',
            'medications_2' => 'nullable|integer|min:1',
            'medications_3' => 'nullable|integer|min:1',
            'medications_4' => 'nullable|integer|min:1',
            'diseases_1' => 'nullable|integer|min:1',
            'diseases_2' => 'nullable|integer|min:1',
            'diseases_3' => 'nullable|integer|min:1',
            'total_score' => 'nullable|integer',
        ];
    }
}
