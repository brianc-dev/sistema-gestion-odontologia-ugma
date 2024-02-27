<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelosOclusion extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = [];

    protected $attributes = [
        'linea_media' => '',
        'sobresalte' => 0,
        'sobrepase' => 0,
        'relacion_canina' => '',
        'relacion_molar' => '',
        'mordida_anterior' => '',
        'mordida_posterior' => '',
        'curvas_compensacion' => '',
        'plano_oclusal' => '',
    ];
}
