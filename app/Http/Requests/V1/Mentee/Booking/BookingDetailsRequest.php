<?php

namespace App\Http\Requests\V1\Mentee\Booking;

use Illuminate\Foundation\Http\FormRequest;

class BookingDetailsRequest extends FormRequest
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
            'message1' => 'required|string|min:20|max:800',
            'message2' => 'required|string|min:20|max:800',
            'message3' => 'required|string|min:20|max:800',
            'message4' => 'required|string|min:20|max:800',
        ];
    }
}
