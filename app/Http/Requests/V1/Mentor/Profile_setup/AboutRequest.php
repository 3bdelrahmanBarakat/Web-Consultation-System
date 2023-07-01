<?php

namespace App\Http\Requests\V1\Mentor\Profile_setup;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
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
            'gender' => 'required',
            'date_of_birth' => 'required',
            'mentor_id' => 'required',
            'address' => 'required|string|min:6|max:255',
            'bio' => 'required|string|min:6|max:255',
            'job_title' => 'required|string|min:6|max:255',
            'country' => 'required|string',
            'city' => 'required|string',
            'zip_code' => 'required',
            'photo' => 'required|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }
}
