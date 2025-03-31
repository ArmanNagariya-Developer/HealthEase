<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'patient_id',
        'doctor_id',
        'name',
        'email',
        'phone',
        'address',
        'appointment_date',
        'notes',
        'user_id',
        'status'
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
