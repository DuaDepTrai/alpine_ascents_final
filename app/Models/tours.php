<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tours extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'image',
        'introduce',
        'types',
        'techniques',
        'records',
        'requirement',
        'sheltering',
        'hazards',
    ];

    public function orders()
    {
        return $this->hasMany(orders_tours::class);
    }
}
