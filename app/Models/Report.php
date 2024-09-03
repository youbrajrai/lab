<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use \Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Collection;
use Spatie\MediaLibrary\Conversions\Conversion;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\FileAdder;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * @method void prepareToAttachMedia(Media $media, FileAdder $fileAdder)
 */
class Report extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $guarded = [];

    public function generalExams(): HasOne
    {
        return $this->hasOne(GeneralExam::class);
    }

    public function  systemicExams(): HasOne
    {
        return $this->hasOne(SystemicExam::class);
    }

    public function  hematologies(): HasOne
    {
        return $this->hasOne(Hematology::class);
    }

    public function  biochemistries(): HasOne
    {
        return $this->hasOne(Biochemistry::class);
    }

    public function  serologies(): HasOne
    {
        return $this->hasOne(Serology::class);
    }

    public function  urines(): HasOne
    {
        return $this->hasOne(Urine::class);
    }

    public function  others(): HasOne
    {
        return $this->hasOne(Other::class);
    }

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
