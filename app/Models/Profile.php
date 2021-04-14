<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Profile extends Model
{
    protected $guarded=[];

    public function profileimage(): string
    {
        return ($this->image) ? '/storage/' .   $this->image : '/storage/uploads/profiles/K8fwNsjs5ISnbp28Ge49wjwME1nPMXcsyGhg0Ufi.png';
    }

    public function followers(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
