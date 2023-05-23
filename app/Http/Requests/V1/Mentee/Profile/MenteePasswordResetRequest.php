<?php

namespace App\Http\Requests\V1\Mentee\Profile;

use Illuminate\Foundation\Http\FormRequest;

class MenteePasswordResetRequest extends FormRequest
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
            'password' => 'required|min:8|exists:mentees,password',
            'new_password' => 'required|min:8|max:25|confirmed'
        ];
    }
}
