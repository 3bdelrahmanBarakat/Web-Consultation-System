<?php

namespace App\Http\Requests\V1\Mentor\Schedule_Timings;

use Illuminate\Foundation\Http\FormRequest;

class ScheduleTimingsRequest extends FormRequest
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
            'day' => 'required',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time|before_or_equal:' . date('H:i', strtotime('+1 hour', strtotime($this->input('start_time')))),

        ];
    }
}
