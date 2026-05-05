<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreBookingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return Auth::check() && Auth::user()->role === 'guest';
    }

    public function rules(): array
    {
        return [
            'beds'                  => ['required', 'array', 'min:1'],
            'beds.*.bed_id'         => ['required', 'integer', 'exists:beds,id'],
            'beds.*.check_in'       => ['required', 'date', 'after_or_equal:today'],
            'beds.*.check_out'      => ['required', 'date', 'after:beds.*.check_in'],
            'notes'                 => ['nullable', 'string', 'max:1000'],
        ];
    }
}
