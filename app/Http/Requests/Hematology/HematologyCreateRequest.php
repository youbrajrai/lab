<?php

namespace App\Http\Requests\Hematology;

use Illuminate\Foundation\Http\FormRequest;

class HematologyCreateRequest extends FormRequest
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
            'wbc' => ['nullable'],
            'rbc' => ['nullable'],
            'hemoglobin'  => ['nullable'],
            'platelets' => ['nullable'],
            'neutrophils' => ['nullable'],
            'lymphocytes'  => ['nullable'],
            'eosinophils' => ['nullable'],
            'monocytes' => ['nullable'],
            'basophils' => ['nullable'],
            'esr' => ['nullable'],
            'malaria_parasite' => ['nullable'],
            'micro_filaria' => ['nullable'],
            'pcv' => ['nullable'],
            'mcv' => ['nullable'],
            'mch' => ['nullable'],
            'mchc' => ['nullable'],
        ];
    }
}
