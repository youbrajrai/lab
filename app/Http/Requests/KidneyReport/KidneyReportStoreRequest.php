<?php

namespace App\Http\Requests\KidneyReport;

use Illuminate\Foundation\Http\FormRequest;

class KidneyReportStoreRequest extends FormRequest
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
            'name' => ['required', 'max:255'],
            'age' => ['required'],
            'sex' => ['required'],
            // 'marital_status' => ['required'],
            'medical_examination_date' => ['required'],
            'address' => ['nullable'],
            'contact' => ['nullable'],
            'referred_by' => ['required'],
            'lab' => ['required'],
            'urea' => ['nullable'],
            'creatinine' => ['nullable'],
            'sodium' => ['nullable'],
            'potassium' => ['nullable'],
            'uric_acid_male' => ['nullable'],
            'uric_acid_female' => ['nullable'],
            'user_id' => ['required'],
        ];
    }
}
