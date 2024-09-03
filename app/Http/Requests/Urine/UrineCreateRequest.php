<?php

namespace App\Http\Requests\Urine;

use Illuminate\Foundation\Http\FormRequest;

class UrineCreateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'urine_color' => ['nullable'],
            'transparency' => ['nullable'],
            'reaction'  => ['nullable'],
            'albumin_sugar' => ['nullable'],
            'albumin' => ['nullable'],
            'sugar' => ['nullable'],
            'urobilinogen'  => ['nullable'],
            'bile_salt' => ['nullable'],
            'bile_pigment' => ['nullable'],
            'acetone' => ['nullable'],
            'ketone_bodies' => ['nullable'],
            'nitrite' => ['nullable'],
            'pus_cells' => ['nullable'],
            'rbc_hpf' => ['nullable'],
            'epithelial_cells' => ['nullable'],
            'urates' => ['nullable'],
            'casts' => ['nullable'],
            'ca_oxalate' => ['nullable'],
        ];
    }
}
