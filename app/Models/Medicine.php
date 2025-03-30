<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    protected $fillable = [
        'name',
        'brand',
        'description',
        'price',
        'stock',
    ];

    // Relationship with Medicine Orders
    public function orders()
    {
        return $this->hasMany(MedicineOrder::class);
    }
}
