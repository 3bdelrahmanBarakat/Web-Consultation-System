<?php

namespace App\Http\Requests\V1\Mentee\Booking;

use Illuminate\Foundation\Http\FormRequest;

class BookingTimingsRequest extends FormRequest
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
            'timing_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'timing_id' => 'Please add timing slot.',
        ];
    }
}
