<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'doctor_id',
        'user_id',
        'appointment_date',
        'status',
    ];

    // Relationship with Doctor
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    // Relationship with Patient (via User Model)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
