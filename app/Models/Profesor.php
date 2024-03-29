<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Profesor extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = [];

    protected $attributes = [
      'nombre' => '',
      'apellido' => '',
    ];

    public function estudiantes(): HasMany
    {
        return $this->hasMany(Estudiante::class);
    }
}
