<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaxilarInferior extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    protected $attributes = [
        'tipo_arco' => '',
        'forma_arco' => '',
        'simetria_arco' => '',
        'piso_boca' => '',
        'malposiciones_dentarias' => '',
        'dientes_ausentes' => '',
        'facetas_desgaste' => '',
        'diastemas' => '',
        'anomalias_forma_tamano_numero' => '',
    ];
}
