<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function farms()
    {
        return $this->hasMany(Farm::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
