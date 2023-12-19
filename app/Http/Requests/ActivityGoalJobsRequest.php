<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActivityGoalJobsRequest extends FormRequest
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
            'job_description' => 'nullable|string|max:255',
            'job_1' => 'nullable|string|max:255',
            'int_1' => 'nullable|string|max:255',
            'job_2' => 'nullable|string|max:255',
            'int_2' => 'nullable|string|max:255',
            'job_3' => 'nullable|string|max:255',
            'int_3' => 'nullable|string|max:255',
            'job_4' => 'nullable|string|max:255',
            'int_4' => 'nullable|string|max:255',
            'job_5' => 'nullable|string|max:255',
            'int_5' => 'nullable|string|max:255',
            'job_6' => 'nullable|string|max:255',
            'int_6' => 'nullable|string|max:255',
            'job_7' => 'nullable|string|max:255',
            'int_7' => 'nullable|string|max:255',
            'job_8' => 'nullable|string|max:255',
            'int_8' => 'nullable|string|max:255',
            'job_9' => 'nullable|string|max:255',
            'int_9' => 'nullable|string|max:255',
            'job_10' => 'nullable|string|max:255',
            'int_10' => 'nullable|string|max:255',
        ];
    }
}
