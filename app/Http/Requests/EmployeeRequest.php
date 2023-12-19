<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
            'first_name'=> 'required|max:255',
            'last_name'=> 'required|max:255',
            'dob'=> 'date',
            'doh' => 'date',
            'ssn' => 'required',
            'gender'=> 'required',
            'status'=> 'required',
            'type'=> 'required',
            'job_title'=> 'required',
            'credentials'=> 'required',
            'agency_branch'=> 'required',
            'address_line_1'=> 'required',
//            'address_line_2'=> 'required',
            'city'=> 'required',
            'county'=> 'required',
            'email'=> 'required',
            'state'=> 'required',
            'zip'=> 'required',
            'prefered_contact'=> 'required',
        ];
    }
}
