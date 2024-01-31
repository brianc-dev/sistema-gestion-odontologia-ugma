<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Historia extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero_historia'
    ];

    public function alumno(): BelongsTo
    {
        return $this->belongsTo(Estudiante::class);
    }
}
