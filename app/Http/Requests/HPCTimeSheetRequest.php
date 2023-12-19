<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HPCTimeSheetRequest extends FormRequest
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
            'hpcProvider_name' => 'nullable|string',
            'hpcindividual_name' => 'nullable|string',
            'hpcProvider_contractNo' => 'nullable|string',
            'hpcIndividul_MedicaidNo' => 'nullable|string',
            'hpcProvider_signature' => 'nullable|string',
            'TypeofService_1' => 'nullable|string',
            'TypeofService_2' => 'nullable|string',
            'TypeofService_3' => 'nullable|string',
            'TypeofService_4' => 'nullable|string',
            'TypeofService_5' => 'nullable|string',
            'TypeofService_6' => 'nullable|string',
            'TypeofService_7' => 'nullable|string',
            'DateofService_1' => 'nullable|date',
            'DateofService_2' => 'nullable|date',
            'DateofService_3' => 'nullable|date',
            'DateofService_4' => 'nullable|date',
            'DateofService_5' => 'nullable|date',
            'DateofService_6' => 'nullable|date',
            'DateofService_7' => 'nullable|date',
            'PlaceofService_1' => 'nullable|string',
            'PlaceofService_2' => 'nullable|string',
            'PlaceofService_3' => 'nullable|string',
            'PlaceofService_4' => 'nullable|string',
            'PlaceofService_5' => 'nullable|string',
            'PlaceofService_6' => 'nullable|string',
            'PlaceofService_7' => 'nullable|string',
            'groupSize_1' => 'nullable|string',
            'groupSize_2' => 'nullable|string',
            'groupSize_3' => 'nullable|string',
            'groupSize_4' => 'nullable|string',
            'groupSize_5' => 'nullable|string',
            'groupSize_6' => 'nullable|string',
            'groupSize_7' => 'nullable|string',
            'note' => 'nullable|string',
        ];
    }
}
