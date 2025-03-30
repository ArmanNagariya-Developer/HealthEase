<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
    ];

    // Relationship with Appointments
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
