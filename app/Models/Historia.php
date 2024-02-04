<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Historia extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero_historia',
        'ano_creacion',
        'estudiante_id'
    ];

    public function estudiante(): BelongsTo
    {
        return $this->belongsTo(Estudiante::class);
    }

    public function paciente(): HasOne
    {
        return $this->hasOne(Paciente::class);
    }
}
