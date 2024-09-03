<?php

namespace App\Http\Requests\StoolReport;

use Illuminate\Foundation\Http\FormRequest;

class StoolReportStoreRequest extends FormRequest
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
            'contact' => ['nullable'],
            'medical_examination_date' => ['required'],
            'referred_by' => ['nullable'],
            'lab' => ['required'],

            // physical examination
            'consistency' => ['nullable'],
            'colour' => ['nullable'],
            'blood' => ['nullable'],
            'mucus' => ['nullable'],

            // chemical examination
            'reaction' => ['nullable'],
            'ocult_blood' => ['nullable'],
            'r_s' => ['nullable'],
            'chemical_others' => ['nullable'],

            // microscopic examination
            'protozoal_parasite' => ['nullable'],
            'cyst_of' => ['nullable'],
            'tryphozoite_of' => ['nullable'],
            'helmeinthic_parasite' => ['nullable'],
            'r_b_c' => ['nullable'],
            'pus_cells' => ['nullable'],
            'undigested_food' => ['nullable'],
            'microscopic_others' => ['nullable'],
        ];
    }
}
