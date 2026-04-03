<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UpdateDormRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('dorms')->where(
                    fn($query) =>
                    $query->where('category_id', $this->category_id)
                )->ignore($this->dorm->id),
            ],
            'total_beds' => ['required', 'integer', 'min:1'],
            'floor_number' => ['required', 'integer'],
            'is_active' => ['boolean'],
            'description' => ['nullable', 'string', 'max:1000'],
            'category_id' => ['required', 'exists:categories,id'],
        ];
    }
}
