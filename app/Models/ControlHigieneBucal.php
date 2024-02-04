<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ControlHigieneBucal extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $attributes = [
        'tecnica_cepillado' => '',
        'cepillo_recomendado' => '',
        'metodos_auxiliares_requeridos' => '',
        'tratamiento' => '',
    ];
}
