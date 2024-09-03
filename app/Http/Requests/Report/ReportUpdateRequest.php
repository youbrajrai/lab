<?php

namespace App\Http\Requests\Report;

use Illuminate\Foundation\Http\FormRequest;

class ReportUpdateRequest extends FormRequest
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
            'cno'=>['required'],
            'name'  => ['required', 'max:255'],
            'age'  => ['required'],
            'sex'  => ['required'],
            'marital_status' => ['required'],
            'contact'=>['required'],
            'nationality' => ['required'],
            // 'job_country'   => ['required'],
            'passport_number' => ['nullable'],
            'passport_expiry' => ['nullable'],
            'passport_issue_place' => ['nullable'],
            'job_title' => ['required'],
            'medical_examination_date' => ['required'],
            'referred_by' => ['nullable'],
        ];
    }
}
