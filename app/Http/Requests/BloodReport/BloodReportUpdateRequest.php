<?php

namespace App\Http\Requests\BloodReport;

use Illuminate\Foundation\Http\FormRequest;

class BloodReportUpdateRequest extends FormRequest
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
            'name'  => 'required|max:255',
            'age'   => 'required',
            'sex'   => 'required',
            // 'marital_status' => 'required',
            'medical_examination_date' => 'required',
            'address' => 'nullable',
            // 'contact' => 'required',
            // 'passport_number' => 'required',
            'specimen' => 'required',
            'sample' => 'required',
            'referred_by' => 'required',
            'wbc' => 'nullable',
            'rbc_male' => 'nullable',
            'rbc_female' => 'nullable',
            'hemoglobin' => 'nullable',
            'platelets' => 'nullable',
            'user_id'   => 'required',
            'neutrophils' => 'nullable',
            'lymphocytes' => 'nullable',
            'eosinophils' => 'nullable',
            'monocytes' => 'nullable',
            'basophils' => 'nullable',
            'pcv' => 'nullable',
            'mcv' => 'nullable',
            'mch' => 'nullable',
            'mchc' => 'nullable',
            'pt' => 'nullable',
            'inr' => 'nullable',
            'esr' => 'nullable',
            'fasting_blood_sugar' => 'nullable',
            'blood_urea' => 'nullable',
            'hbs_ag' => 'nullable',
            'anti_hiv' => 'nullable',
            'anti_hcv' => 'nullable',
            'vdrl' => 'nullable',
            'tpha' => 'nullable',
            'malarial_parasites' => 'nullable',
        ];
    }
}
