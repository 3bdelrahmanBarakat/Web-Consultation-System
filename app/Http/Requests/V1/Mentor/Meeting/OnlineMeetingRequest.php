<?php

namespace App\Http\Requests\V1\Mentor\Meeting;

use Illuminate\Foundation\Http\FormRequest;

class OnlineMeetingRequest extends FormRequest
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
            'start_time' => 'required',
            'duration' => 'required',
            'password' => 'required|min:6|max:20',
        ];
    }
}
