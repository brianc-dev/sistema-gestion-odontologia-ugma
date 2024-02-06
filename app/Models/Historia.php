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

    public function antecedentesMedicosFamiliares(): HasOne
    {
        return $this->hasOne(AntecedentesMedicosFamiliares::class);
    }

    public function antecedentesMedicosPersonales(): HasOne
    {
        return $this->hasOne(AntecedentesMedicosPersonales::class);
    }

    public function medicamento(): HasOne
    {
        return $this->hasOne(Medicamento::class);
    }

    public function historiaOdontologica(): HasOne
    {
        return $this->hasOne(HistoriaOdontologica::class);
    }

    public function examenRadiografico(): HasOne
    {
        return $this->hasOne(ExamenRadiografico::class);
    }
}
