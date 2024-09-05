<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class media_libraries extends Model
{
    use HasFactory;

    protected $fillable = ['tour_id', 'images', 'videos'];

    protected $casts = [
        'images' => 'array', // Biến trường images thành mảng
        'videos' => 'array', // Biến trường videos thành mảng
    ];

    public function tour()
    {
        return $this->belongsTo(tours::class);
    }
}
