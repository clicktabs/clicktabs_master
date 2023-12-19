<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobTitleRequest extends FormRequest
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
            'job_title' => 'required|max:255',
            'reference_code' => 'required|max:255',
            'job_title_short' => 'required|max:255',
            'organisation_id' => 'required|max:255'
        ];
    }
}
