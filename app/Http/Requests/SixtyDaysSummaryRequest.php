<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SixtyDaysSummaryRequest extends FormRequest
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
            'clientName' => 'nullable|string',
            'carePeriod' => 'nullable|string',
            'mrn' => 'nullable|string',
            'physician' => 'nullable|string',
            'dob' => 'nullable|date',
            'no' => 'nullable|string',
            'patientCondition' => 'nullable|string',
            'sn' => 'boolean',
            'pt' => 'boolean',
            'ot' => 'boolean',
            'st' => 'boolean',
            'msw' => 'boolean',
            'hha' => 'boolean',
            'otherService' => 'nullable|string',
            'bpSysLowest' => 'nullable|string',
            'bpDiaLowest' => 'nullable|string',
            'hrLowest' => 'nullable|string',
            'respLowest' => 'nullable|string',
            'tempLowest' => 'nullable|string',
            'weightLowest' => 'nullable|string',
            'bsLowest' => 'nullable|string',
            'painLowest' => 'nullable|string',
            'bpSysHighest' => 'nullable|string',
            'bpDiaHighest' => 'nullable|string',
            'hrHighest' => 'nullable|string',
            'respHighest' => 'nullable|string',
            'tempHighest' => 'nullable|string',
            'weightHighest' => 'nullable|string',
            'bsHighest' => 'nullable|string',
            'painHighest' => 'nullable|string',
            'summaryOfCare' => 'nullable|string',
            'patientCurrentCondition' => 'nullable|string',
            'goals' => 'nullable|string',
            'rec_sn' => 'boolean',
            'rec_pt' => 'boolean',
            'rec_ot' => 'boolean',
            'rec_st' => 'boolean',
            'rec_msw' => 'boolean',
            'rec_hha' => 'boolean',
            'rec_otherService' => 'nullable|string',
            'dateSentToPhysician' => 'nullable|date',
            'signature1' => 'nullable|string',
            'date1' => 'nullable|date',
            'signature2' => 'nullable|string',
            'date2' => 'nullable|date',
        ];
    }
}
