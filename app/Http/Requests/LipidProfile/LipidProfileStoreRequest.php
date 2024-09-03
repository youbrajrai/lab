<?php

namespace App\Http\Requests\LipidProfile;

use Illuminate\Foundation\Http\FormRequest;

class LipidProfileStoreRequest extends FormRequest
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
            'medical_examination_date' => ['required'],
            'address' => ['nullable'],
            'contact' => ['nullable'],
            'referred_by' => ['required'],
            'lab' => ['required'],
            'total_cholestrol' => ['nullable'],
            'hdl_cholestrol' => ['nullable'],
            'ldl_cholestrol' => ['nullable'],
            'triglyceride' => ['nullable'],
            'others' => ['nullable'],
            'user_id' => ['required'],
        ];
    }
}
