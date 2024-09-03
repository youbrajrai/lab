<?php

namespace App\Http\Requests\Other;

use Illuminate\Foundation\Http\FormRequest;

class OtherCreateRequest extends FormRequest
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
            'opiates' => ['nullable'],
            'cannabies' => ['nullable'],
            'mantoux_test'  => ['nullable'],
            'urine_pregnancy_test' => ['nullable'],
            'x_ray_requested_for' => ['nullable'],
            'clinical_history'  => ['nullable'],
            'request_doctor' => ['nullable'],
            'opinion' => ['nullable'],
            'defect_seen' => ['nullable'],
            'total_cholestrol' => ['nullable'],
            'hdl_cholestrol' => ['nullable'],
            'ldl_cholestrol' => ['nullable'],
            'triglyceride' => ['nullable'],
        ];
    }
}
