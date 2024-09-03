<?php

namespace App\Http\Requests\Urine;

use Illuminate\Foundation\Http\FormRequest;

class UrineReportUpdateRequest extends FormRequest
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
            'name' => ['required', 'max:255'],
            'age' => ['required'],
            'sex' => ['required'],
            // 'marital_status' => ['required'],
            'medical_examination_date' => ['required'],
            'address' => ['nullable'],
            'contact' => ['nullable'],
            'referred_by' => ['required'],
            'lab' => ['required'],

            // physical examination
            'color' => ['nullable'],
            'transparency' => ['nullable'],
            'sp_gravity' => ['nullable'],

            // chemical examination
            'reaction'  => ['nullable'],
            'albumin' => ['nullable'],
            'sugar' => ['nullable'],
            'urobilinogen'  => ['nullable'],
            'bile_salt' => ['nullable'],
            'bile_pigment' => ['nullable'],
            'pregnancy_test' => ['nullable'],
            'cannabies_test' => ['nullable'],

            // microscopic examination
            'pus_cell' => ['nullable'],
            'rbc' => ['nullable'],
            'epithelial_cells' => ['nullable'],
            'urates' => ['nullable'],
            'casts' => ['nullable'],
            'ca_oxalate' => ['nullable'],
            'other' => ['nullable'],

            'acetone' => ['nullable'],
            'ketone_bodies' => ['nullable'],
            'nitrite' => ['nullable'],

            'user_id' => ['required'],
        ];
    }
}
