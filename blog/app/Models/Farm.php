<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farm extends Model
{
    use HasFactory;

    protected $table = 'farms';

    // Define the many-to-one relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Define the one-to-many relationship with the Images model
    public function images()
    {
        return $this->hasMany(Image::class);
    }

    // Define the many-to-many relationship with the Appointment model
    public function appointments()
    {
        return $this->belongsToMany(Appointment::class);
    }

    // Define the one-to-many relationship with the Comment model
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // Define the many-to-many relationship with the Payment model
    public function payments()
    {
        return $this->belongsToMany(Payment::class);
    }
<<<<<<< HEAD
=======
    public function getFirstImageUrl()
    {
        $firstImage = $this->images->first();
        if ($firstImage) {
            return asset('storage/' . $firstImage->path);
        }
        return null;
    }

>>>>>>> a73342c5cfd531372d8f9b8a8820c436acc91a4b
}
