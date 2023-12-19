<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OasisResumptionRequest extends FormRequest
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
            'dopca' => 'nullable|string',
            'assessment_month' => 'nullable|string',
            'assessment_day' => 'nullable|string',
            'assessment_year' => 'nullable|string',
            'assessment_reason' => 'nullable|array',
            'assessment_reason.*' => 'string',
            'episode_timing' => 'nullable|string',
            'grooming' => 'nullable|string',
            'dress' => 'nullable|string',
            'catdub' => 'nullable|string',
            'catdlb' => 'nullable|string',
            'bathing' => 'nullable|string',
            'toilet_transferring' => 'nullable|string',
            'transferring' => 'nullable|string',
            'ambulation' => 'nullable|string',
            'self_care' => 'nullable|string',
            'code_reason' => 'nullable|string',
            'follow_up_performance' => 'nullable|array',
            'follow_up_performance.*' => 'string',
            'mobility' => 'nullable|string',
            'mobility_CS' => 'nullable|string',
            'follow_up_performance_mobility' => 'nullable|array',
            'follow_up_performance_mobility.*' => 'string',
            'dpuws' => 'nullable|string',
            'risk_for_hospitalization' => 'nullable|array',
            'risk_for_hospitalization.*' => 'string',
            'uplas2oh' => 'nullable|string'
        ];
    }
}
