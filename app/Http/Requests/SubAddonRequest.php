<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubAddonRequest extends FormRequest
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
            'sub_addons_name' => 'required',
            'sub_addon_status' => 'required'
        ];
    }
}
