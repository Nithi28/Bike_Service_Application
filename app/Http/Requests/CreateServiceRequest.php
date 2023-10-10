<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateServiceRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'vehicle_name' => 'required|string',
            'service_type' => 'required|in:oil change,water service,general service',
            'selected_date' => 'required|date|after_or_equal:today',
        ];
    }

    public function messages()
{
    return [
        'vehicle_name.required' => 'The vehicle name field is required.',
        'vehicle_name.string' => 'The vehicle name must be a string.',
        'service_type.required' => 'The service type field is required.',
        'service_type.in' => 'The selected service type is invalid.',
        'selected_date.required' => 'The selected date field is required.',
        'selected_date.date' => 'The selected date must be a valid date format.',
        'selected_date.after_or_equal' => 'The selected date must be today or a future date.',
    ];
}

}
