<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Estudiante extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = [];

    protected $attributes = [
        'nombre' => '',
        'apellido' => '',
        'profesor_id' => null,
    ];

    public function profesor(): ?BelongsTo
    {
        return $this->belongsTo(Profesor::class);
    }

    public function historias(): HasMany
    {
        return $this->hasMany(Historia::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function lapso(): BelongsTo
    {
        return $this->belongsTo(Lapso::class);
    }
}
