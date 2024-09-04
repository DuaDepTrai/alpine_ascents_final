<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
    use HasFactory;

    protected $table = 'gallery';

    protected $fillable = [
        'tour_id',
        'name',
        'images',
        'videos',
    ];

    /**
     * Relationship with Tour
     */
    public function tour()
    {
        return $this->belongsTo(tours::class);
    }
}
