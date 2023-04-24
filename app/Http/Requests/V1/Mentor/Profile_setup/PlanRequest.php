<?php

namespace App\Http\Requests\V1\Mentor\Profile_setup;

use Illuminate\Foundation\Http\FormRequest;

class PlanRequest extends FormRequest
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
            "standard_price" => 'required|numeric',
            "standard_sessions" => 'required|numeric',
            "standard_chat" => 'nullable',
            "standard_type" => 'required',
            "standard_response_time" => 'required|numeric',
            "standard_description" => 'required|string|min:15|max:255',
            "pro_price" => 'required|numeric',
            "pro_sessions" => 'required|numeric',
            "pro_chat" => 'nullable',
            "pro_type" => 'required',
            "pro_response_time" => 'required|numeric',
            "pro_description" => 'required|string|min:15|max:255',
            "per_session_price" => 'required|numeric',
            "per_session_chat" => 'nullable',
            "per_session_type" => 'required',
            "per_session_description" => 'required|string|min:15|max:255',
        ];
    }
}
