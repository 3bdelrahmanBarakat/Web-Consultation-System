<?php

namespace App\Http\Requests\V1\Admin;

use Illuminate\Foundation\Http\FormRequest;

class generateReportRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
        'mentor_ids' => 'required|array',
        'mentor_ids.*' => 'integer|exists:mentors,id',
        'start_date' => 'required|date_format:d/m/Y',
        'end_date' => 'required|date_format:d/m/Y|after:start_date',
        ];
    }
}
