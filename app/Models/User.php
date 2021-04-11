<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'phone',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($user){
            $user->profile()->create([
                'introduction'=>'This profile doesnt have introduction',
            ]);
        });
    }

    public function following(): BelongsToMany
    {
        return $this->belongsToMany(Profile::class);
    }
    public function profile(): HasOne
    {
        return $this->hasOne(Profile::class);
    }

    public function cars(): HasMany
    {
        return $this->hasMany(Car::class)->orderBy('created_at','DESC');
    }
    public function boats(): HasMany
    {
        return $this->hasMany(Boat::class)->orderBy('created_at','DESC');
    }
    public function offices(): HasMany
    {
        return $this->hasMany(Office::class)->orderBy('created_at','DESC');
    }
}
