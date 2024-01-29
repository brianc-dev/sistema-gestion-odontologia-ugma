<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Estudiante extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $attributes = [
        'profesor_id' => null
    ];

    public function profesor(): ?BelongsTo
    {
        return $this->belongsTo(Profesor::class);
    }
}
