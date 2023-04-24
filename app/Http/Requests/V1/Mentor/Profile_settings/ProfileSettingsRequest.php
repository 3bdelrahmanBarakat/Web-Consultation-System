<?php

namespace App\Http\Requests\V1\Mentor\Profile_settings;

use Illuminate\Foundation\Http\FormRequest;

class ProfileSettingsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'date_of_birth' => 'required',
            'address' => 'required|string|min:6|max:255',
            'country' => 'required|string',
            'city' => 'required|string',
            'phone' => 'required|numeric',
            'zip_code' => 'required',
            'company_name' => 'required|string|min:6|max:255',
            'start_date' => 'required',
            'end_date' => 'required',
            'years_of_experience' => 'required',
            'description' => 'required|string|min:6|max:255',
        ];
    }
}
