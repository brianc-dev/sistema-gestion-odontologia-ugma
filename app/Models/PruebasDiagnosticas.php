<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PruebasDiagnosticas extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    protected $attributes = [
        'examen_tejidos_periodontales' => '',
        'pruebas_vitalidad' => '',
        'diagnostico_presuntivo' => '',
        'diagnostico_definitivo' => '',
        'morfologia_conducto' => '',
        'tratamiento_conducto' => '',
        'metodos_obturacion' => '',
        'tecnica_preparacion_biomecanica' => '',
        'preparacion_quimica' => '',
        'numero_ultima_lima_utilizada' => '',
        'material_obturacion' => '',
        'medicacion' => '',
        'justificacion_medicacion' => '',
        'observaciones' => '',
    ];
}
