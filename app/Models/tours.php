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
        'location',
        'features',
        'besttime',
        'directions',
        'trekkingroutes',
        'items',
        'cautions',
        'requirements',
    ];

    public function orders()
    {
        return $this->hasMany(orders_tours::class);
    }

    public function galleries()
    {
        return $this->hasMany(galleries::class, 'tours_id');
    }

    protected $table = 'tours'; // Tên bảng trong database
}
