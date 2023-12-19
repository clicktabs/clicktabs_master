<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddonCategoryRequest extends FormRequest
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
            'addons_name' => 'required|max:255',
            'addon_status' => 'required|max:255'
        ];
    }
}
