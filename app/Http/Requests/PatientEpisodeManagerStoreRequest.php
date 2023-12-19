<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientEpisodeManagerStoreRequest extends FormRequest
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
            'start_of_care_date' => 'required',
            'episode_start_date' => 'required',
            'episode_end_date' => 'required',
            'case_manager' => 'required|exists:employees,id',
            'primary_insurance' => 'required',
            'secondary_insurance' => 'required',
            'primary_physician' => 'required|exists:physicians,id',
            'comment' => 'required',
        ];
    }
}
