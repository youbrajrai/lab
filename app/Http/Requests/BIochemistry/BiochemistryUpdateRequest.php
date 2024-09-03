<?php

namespace App\Http\Requests\BIochemistry;

use Illuminate\Foundation\Http\FormRequest;

class BiochemistryUpdateRequest extends FormRequest
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
            'urea' => ['nullable'],
            'creatinine' => ['nullable'],
            'sodium'  => ['nullable'],
            'potassium' => ['nullable'],
            'blood_sugar' => ['nullable'],
            'sr_bilirubin_total_direct'  => ['nullable'],
            'sr_bilirubin_total'  => ['nullable'],
            'sr_bilirubin_direct' => ['nullable'],
            'alkaline_phosphatase' => ['nullable'],
            'sgpt' => ['nullable'],
            'sgot' => ['nullable'],
            'fasting_blood_sugar' => ['nullable'],
            'blood_urea' => ['nullable'],
        ];
    }
}
