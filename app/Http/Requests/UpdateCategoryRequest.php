<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
            'name' => 'required|string|max:255|unique:categories, name,' . $this->category->id,
            'description' => 'nullable|string|max:1000',
            'currency' => 'required|string|size:3',
            'base_price' => 'required|numeric|min:0',
            'gender_type' => 'required|string|in:mixed,female_only,male_only',
            'is_ensuite' => 'boolean',
            'has_ac' => 'boolean',
            'has_lockers' => 'boolean',
            'has_individual_plugs' => 'boolean',
            'has_curtains' => 'boolean'
        ];
    }
}
