<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class StoreBedRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check() && Auth::user()->role === 'admin';
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'dorm_id' => ['required', 'integer', 'exists:dorms,id'],
            'bed_number' => ['required', 'string', Rule::unique('beds')->where(
                fn($query) => $query->where('dorm_id', $this->dorm_id)
            )],
            'is_functional' => ['boolean'],
            'notes' => ['nullable', 'string', 'max:1000']
        ];
    }
}
