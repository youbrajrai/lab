<?php

namespace App\Http\Requests\XrayReport;

use Illuminate\Foundation\Http\FormRequest;

class XrayReportStoreRequest extends FormRequest
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
            'country' => ['required'],
            'requested_for' => ['required'],
            'clinical_history' => ['required'],
            'clinical_other'=>['nullable'],
            'requested_by' => ['required'],
            'medical_examination_date' => ['required'],
            'radiologist_opinion' => ['nullable'],
            'defect_seen' => ['required'],
            'other'=>['nullable'],
            'user_id' => ['required'],
        ];
    }
}
