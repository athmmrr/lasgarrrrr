<?php
// app/Models/User.php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'role',
    ];

    public function hasRole($role)
    {
        return $this->role === $role;
    }

    // Menambahkan metode hasAnyRole
    public function hasAnyRole(array $roles)
    {
        return in_array($this->role, $roles);
    }
}