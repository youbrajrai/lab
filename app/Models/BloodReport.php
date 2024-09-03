<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BloodReport extends Model
{
    use HasFactory;
    protected $fillable  = [
        'name',
        'age',
        'sex',
        'marital_status',
        'medical_examination_date',
        'address',
        'contact',
        'passport_number',
        'specimen',
        'sample',
        'referred_by',
        'wbc',
        'rbc_male',
        'rbc_female',
        'hemoglobin',
        'platelets',
        'user_id',
        'neutrophils',
        'lymphocytes',
        'eosinophils',
        'monocytes',
        'basophils',
        'pcv',
        'mcv',
        'mch',
        'mchc',
        'pt',
        'inr',
        'esr',
        'fasting_blood_sugar',
        'blood_urea',
        'hbs_ag',
        'anti_hiv',
        'anti_hcv',
        'vdrl',
        'tpha',
        'malarial_parasites'
    ];
    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
