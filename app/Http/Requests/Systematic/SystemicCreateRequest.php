<?php

namespace App\Http\Requests\Systematic;

use Illuminate\Foundation\Http\FormRequest;

class SystemicCreateRequest extends FormRequest
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
            'cardiovascular' => ['nullable'],
            'pulmonary' => ['nullable'],
            'gastroenterology'  => ['nullable'],
            'neurology' => ['nullable'],
            'musculoskeletal' => ['nullable'],
            'genitourinary'  => ['nullable'],
            'dental' => ['nullable'],
            'extremities_deformities' => ['nullable'],
            'varicose_veins' => ['nullable'],
            'hernia' => ['nullable'],
            'hydrocele' => ['nullable'],
            'left_eye' => ['nullable'],
            'right_eye' => ['nullable'],
            'left_ear' => ['nullable'],
            'right_ear' => ['nullable'],
            'others' => ['nullable'],
            'chest_x_ray' => ['nullable'],
            'ecg' => ['nullable'],
            'clinical_impression' => ['nullable'],
        ];
    }
}
