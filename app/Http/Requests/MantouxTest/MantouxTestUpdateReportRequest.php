<?php

namespace App\Http\Requests\MantouxTest;

use Illuminate\Foundation\Http\FormRequest;

class MantouxTestUpdateReportRequest extends FormRequest
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
            'passport_no' => ['nullable'],
            'address' => ['nullable'],
            'age' => ['required'],
            'sex' => ['required'],
            'date' => ['required'],

            'result' => ['nullable'],
            'injected_side' => ['nullable'],
            'volume' => ['nullable'],

            'user_id' => ['required'],
        ];
    }
}
