<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Historia extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero_historia',
        'ano_creacion',
        'estudiante_id',
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

    public function periodontograma(): HasOne
    {
        return $this->hasOne(Periodontograma::class);
    }

    public function planTratamiento(): HasMany
    {
        return $this->hasMany(PlanTratamiento::class);
    }

    public function modificacionesPlanTratamiento(): HasMany
    {
        return $this->hasMany(ModificacionesPlanTratamiento::class);
    }

    public function presupuesto(): HasMany
    {
        return $this->hasMany(Presupuesto::class);
    }

    public function secuenciaTratamiento(): HasMany
    {
        return $this->hasMany(SecuenciaTratamiento::class);
    }

    public function historiaPeriodontal(): HasOne
    {
        return $this->hasOne(HistoriaPeriodontal::class);
    }

    public function fichaEndodontica(): HasOne
    {
        return $this->hasOne(FichaEndodontica::class);
    }

    public function pruebasDiagnosticas(): HasOne
    {
        return $this->hasOne(PruebasDiagnosticas::class);
    }

    public function radiografias(): HasOne
    {
        return $this->hasOne(Radiografias::class);
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(HistoriaStatus::class);
    }
}
