<?php

namespace App\Http\Requests\Serology;

use Illuminate\Foundation\Http\FormRequest;

class SerologyUpdateRequest extends FormRequest
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
            'hbs_ag' => ['nullable'],
            'anti_hiv' => ['nullable'],
            'anti_hcv'  => ['nullable'],
            'vdrl' => ['nullable'],
            'tpha' => ['nullable'],
            'blood_group'  => ['nullable'],
            'malaria_parasite' => ['nullable'],
        ];
    }
}
