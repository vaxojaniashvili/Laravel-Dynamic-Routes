<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'first_name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function getNameAttribute()
    {
        return $this->first_name;
    }

    public function setNameAttribute($value)
    {
        $this->attributes['first_name'] = $value;
    }
    public function canAccessPanel(Panel $panel): bool
    {
        return $this->email === 'admin@gmail.com';
        // ან, მაგალითად, მხოლოდ მომხმარებლებს, რომელთაც is_admin ნიშანი აქვთ
        // return $this->is_admin;
    }
}
