<?php

namespace App\Http\Requests\LiverReport;

use Illuminate\Foundation\Http\FormRequest;

class LiverReportUpdateRequest extends FormRequest
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
            'sr_bilirubin_total' => ['nullable'],
            'sr_bilirubin_direct' => ['nullable'],
            'alkaline_phosphate' => ['nullable'],
            'sgpt' => ['nullable'],
            'sgot' => ['nullable'],
            'total_protein' => ['nullable'],
            'serum_albumin' => ['nullable'],
            'user_id' => ['required'],
        ];
    }
}
