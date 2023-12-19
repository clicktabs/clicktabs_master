<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeePayRateRequest extends FormRequest
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
            'pay_rate_service_code' => 'required|string',
            'pay_rate_start_date' => 'required|date',
            'pay_rate_end_date' => 'required|date',
            'pay_rate_pay_type' => 'required|string',
            'pay_rate_amount' => 'required|numeric',
            'pay_rate_billing_code' => 'required|string'
        ];
    }
}
