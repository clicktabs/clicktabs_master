<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhysicianTransfersRequest extends FormRequest
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
            'admissionDate' => 'nullable|date',
            'admissiontransferDate' => 'nullable|date',
            'TransferPlanned' => 'nullable|string|max:255',
            'reasonforAdmission' => 'nullable|string|max:255',
            'TransferReason' => 'nullable|string|max:255',
            'TransferReason_1' => 'nullable|string',
            'HHAdisciplines' => 'nullable|boolean',
            'SNdisciplines' => 'nullable|boolean',
            'PTdisciplines' => 'nullable|boolean',
            'OTdisciplines' => 'nullable|boolean',
            'STdisciplines' => 'nullable|boolean',
            'MSWdisciplines' => 'nullable|boolean',
            'Aidedisciplines' => 'nullable|boolean',
            'Otherdisciplines' => 'nullable|string|max:255',
            'SNtransfer' => 'nullable|boolean',
            'PTtransfer' => 'nullable|boolean',
            'OTtransfer' => 'nullable|boolean',
            'STtransfer' => 'nullable|boolean',
            'MSWtransfer' => 'nullable|boolean',
            'Aidetransfer' => 'nullable|boolean',
            'Othertransfer' => 'nullable|string|max:255',
            'agencyPolicy' => 'nullable|boolean',
            'Representative' => 'nullable|boolean',
            'explain' => 'nullable|string|max:255',
            'documentation' => 'nullable|boolean',
            'currentPlan' => 'nullable|boolean',
            'currentPlanOfCare' => 'nullable|integer',
            'copyOrder' => 'nullable|boolean',
            'copyOther_1' => 'nullable|boolean',
            'copyOther_2' => 'nullable|string|max:255',
        ];
    }
}
