<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded=[];

    public function profileimage(): string
    {
        return ($this->image) ? '/storage/' . $this->image : '/storage/uploads/profiles/K8fwNsjs5ISnbp28Ge49wjwME1nPMXcsyGhg0Ufi.png';
    }
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class); //Belongs to user
    }
}
