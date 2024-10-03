<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Traits\HasRoles;

class users extends Authenticatable
{
    use HasFactory, Notifiable;
    use HasRoles;

    protected $guard_name = 'web';

    protected $fillable = [
        'name',
        'phone',
        'email',
        'password',
        'avatar',
        'role',
        'verification_code',
        'status'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'role' => 'boolean',
    ];

    public function orders()
    {
        return $this->hasMany(orders_tours::class);
    }

    public function hasRole($role)
{
    return $this->roles()->where('name', $role)->exists();
}

}
