<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class galleries extends Model
{
    use HasFactory;

    protected $fillable = ['tours_id', 'images', 'videos'];

    public function tour()
    {
        return $this->belongsTo(tours::class, 'tours_id');
    }
}