<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    
    public const ROLE_USER = 'user';
    public const ROLE_ADMIN = 'admin';
    
    protected $fillable = [
        'name', 'email', 'password', 'role'
    ];
    
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function isAdmin(): bool {
        return $this->role === self::ROLE_ADMIN;
    }
    
    public function isUser(): bool {
        return $this->role === self::ROLE_USER;
    }
}
