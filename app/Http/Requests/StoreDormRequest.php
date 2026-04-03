<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class StoreDormRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255', Rule::unique('dorms')->where(
                fn($query) =>
                $query->where('category_id', $this->category_id)
            ),],
            'total_beds' => ['required', 'integer', 'min:1'],
            'floor_number' => ['required', 'integer'],
            'is_active' => ['boolean'],
            'description' => ['nullable', 'string', 'max:1000'],
            'category_id' => ['required', 'exists:categories,id'],
        ];
    }
}
