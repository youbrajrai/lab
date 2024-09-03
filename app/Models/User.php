<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class User extends Authenticatable implements HasMedia
{
    use HasApiTokens, HasFactory, Notifiable, InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'address',
        'company_name',
        'email',
        'phone',
        'password',
        'regd_no',
        'website'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function reports() :HasMany
    {
        return $this->hasMany(Report::class);
    }
    public function liverReports() :HasMany
    {
        return $this->hasMany(LiverReport::class);
    }
    public function kidneyReports() :HasMany
    {
        return $this->hasMany(KidneyReport::class);
    }

    public function bloodReports() :HasMany
    {
        return $this->hasMany(BloodReport::class);
    }

    public function lipidProfiles() :HasMany
    {
        return $this->hasMany(LipidProfile::class);
    }
}
