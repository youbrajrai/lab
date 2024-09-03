<?php

namespace App\Http\Requests\GeneralExam;

use Illuminate\Foundation\Http\FormRequest;

class GeneralUpdateRequest extends FormRequest
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
            'height' => ['required'],
            'weight' => ['required'],
            'pulse'  => ['required'],
            'temperature' => ['required'],
            'blood_pressure' => ['required'],
            'jaundice'  => ['required'],
            'paller' => ['required'],
            'cynosis' => ['required'],
            'clubbing' => ['required'],
            'odema' => ['required'],
            'ascitis' => ['required'],
            'lymph_node' => ['required'],
            'serious_illness' => ['required'],
            'allergy_history' => ['required'],
        ];
    }
}
