<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function estudiante(): ?HasOne
    {
        return $this->hasOne(Estudiante::class);
    }

    public function profesor(): ?HasOne
    {
        if ($this->role_id != 2) return null;

        return $this->hasOne(Profesor::class);
    }

    public function isAdmin(): bool
    {
        return $this->role_id == 0;
    }

    public function isAdmision(): bool
    {
        return $this->role_id == 1;
    }

    public function isProfesor(): bool
    {
        return $this->role_id == 2;
    }

    public function isEstudiante(): bool
    {
        return $this->role_id == 3;
    }
}
