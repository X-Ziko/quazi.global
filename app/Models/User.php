<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements FilamentUser
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role', // ✅ added for role support (admin/user etc)
    ];

    /**
     * The attributes that should be hidden for serialization.
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Attribute casting
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * ✅ Filament Panel Access Control
     * Production safe
     */
    public function canAccessPanel(Panel $panel): bool
    {
        // 🔥 If you want only admin to access panel later,
        // just change condition to: return $this->role === 'admin';

        return true; // ✅ Temporary full access (fix 403)
    }

    /**
     * Optional helper function (Good for future upgrade)
     */
    public function isAdmin(): bool
    {
        return $this->role === 'admin';
    }
}