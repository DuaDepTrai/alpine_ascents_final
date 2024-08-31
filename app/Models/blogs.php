<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogs extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'content',
        'user_id',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(users::class);
    }
}
