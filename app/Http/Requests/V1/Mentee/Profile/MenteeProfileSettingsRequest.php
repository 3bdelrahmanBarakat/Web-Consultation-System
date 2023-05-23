<?php

namespace App\Http\Requests\V1\Mentee\Profile;

use Illuminate\Foundation\Http\FormRequest;

class MenteeProfileSettingsRequest extends FormRequest
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
            'name' => 'required|min:3|string',
            'username' => 'required|min:3|unique:mentees,username,' . auth()->user()->id
        ];
    }
}
