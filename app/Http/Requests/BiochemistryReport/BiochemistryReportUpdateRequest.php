<?php

namespace App\Http\Requests\BiochemistryReport;

use Illuminate\Foundation\Http\FormRequest;

class BiochemistryReportUpdateRequest extends FormRequest
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
            //
            'name' => ['required', 'max:255'],
            'age' => ['required'],
            'sex' => ['required'],
            'medical_examination_date' => ['required'],
            'address' => ['nullable'],
            'contact' => ['nullable'],
            'referred_by' => ['required'],
            'lab' => ['required'],

            'blood_sugar_r' => ['nullable'],
            'blood_sugar_f' => ['nullable'],
            'blood_sugar_pp' => ['nullable'],

            'hba1c' => ['nullable'],
            'blood_urea' => ['nullable'],
            's_ceratinine' => ['nullable'],

            'user_id' => ['required'],
        ];
    }
}
