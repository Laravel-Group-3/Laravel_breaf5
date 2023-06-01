<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    // Define the many-to-many relationship with the Farm model
    public function farms()
    {
        return $this->belongsToMany(Farm::class);
    }

    // Define the many-to-many relationship with the User model
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    // Define the one-to-one relationship with the Payment model
    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}
