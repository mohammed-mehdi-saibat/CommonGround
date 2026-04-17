<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateGuestRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'cin' => [
                'nullable',
                'string',
                'max:20',
                'required_without:passport_number',
                'unique:guests,cin,' . $this->user()->guest->id
            ],
            'passport_number' => [
                'nullable',
                'string',
                'max:20',
                'required_without:cin',
                'unique:guests,passport_number,' . $this->user()->guest->id
            ],
            'nationality' => ['required', 'string', 'max:100']
        ];
    }

    public function messages(): array
    {
        return [
            'cin.required_without' => 'Please provide either a CIN or a passport number',
            'passport_number.required_without' => 'Please provide either a passport number or a CIN'
        ];
    }
}
