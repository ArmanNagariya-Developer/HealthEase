<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MedicineOrder extends Model
{
    protected $fillable = [
        'user_id',
        'medicine_id',
        'quantity',
        'total_price',
        'status',
    ];

    // Relationship with User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relationship with Medicine
    public function medicine()
    {
        return $this->belongsTo(Medicine::class);
    }
}
