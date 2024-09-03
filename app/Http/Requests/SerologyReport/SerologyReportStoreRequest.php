<?php

namespace App\Http\Requests\SerologyReport;

use Illuminate\Foundation\Http\FormRequest;

class SerologyReportStoreRequest extends FormRequest
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
            //
            'name' => ['required', 'max:255'],
            'age' => ['required'],
            'sex' => ['required'],
            'medical_examination_date' => ['required'],
            'address' => ['nullable'],
            'contact' => ['nullable'],
            'referred_by' => ['required'],
            'lab' => ['required'],

            'hiv_test' => ['nullable'],
            'hcv' => ['nullable'],
            'hbs_ag' => ['nullable'],
            'vdrl' => ['nullable'],
            'tpha' => ['nullable'],
            'rheumatoid' => ['nullable'],
            'crp' => ['nullable'],
            'aso_titre' => ['nullable'],
            'sr_k39' => ['nullable'],
            'optimal_test' => ['nullable'],

            'user_id' => ['required'],
        ];
    }
}
