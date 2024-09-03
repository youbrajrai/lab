<?php

namespace App\Http\Requests\CannabiesPregnancyTest;

use Illuminate\Foundation\Http\FormRequest;

class CannabiesPregnancyTestStoreRequest extends FormRequest
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
            'user_id' => ['required'],

            'name' => ['required', 'max:255'],
            'age' => ['required'],
            'sex' => ['required'],
            'address' => ['nullable'],
            'contact' => ['nullable'],
            'medical_examination_date' => ['required'],
            'lab' => ['required'],
            'referred_by' => ['required'],

            'pregnancy_test' => ['nullable'],
            'cannabies_test' => ['nullable'],

        ];
    }
}
