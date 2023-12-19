<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ScheduleStoreRequest extends FormRequest
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
            'kt_calendar_datepicker_start_date' => 'required',
            'kt_calendar_datepicker_end_date' => 'required|date|after:kt_calendar_datepicker_start_date',
            'patient_id' => 'required|exists:patients,id',
            'employee_id' => 'required|exists:employees,id',
            'task' => 'required',
            'sc_sub_addon_id' => 'required',
            'bill_unit_type' => 'required',
            'scheduling_status' => 'required',
            'payor_sub_addon_id' => 'required|exists:addon_sub_categories,id',
        ];
    }
}
