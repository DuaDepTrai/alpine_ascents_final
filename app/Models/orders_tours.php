<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders_tours extends Model
{
    use HasFactory;

    protected $table = 'orders_tours';

    protected $fillable = [
        'user_id',
        'tour_id',
        'quantity',
        'total',
        'note',
    ];

    public function user()
    {
        return $this->belongsTo(users::class);
    }

    public function tour()
    {
        return $this->belongsTo(tours::class);
    }
}
