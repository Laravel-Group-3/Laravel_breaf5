<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    // Define the many-to-one relationship with the Farm model
    public function farm()
    {
        return $this->belongsTo(Farm::class);
    }
}
