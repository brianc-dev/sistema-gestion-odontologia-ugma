<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaxilarSuperior extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    protected $attributes = [
        'tipo_arco' => '',
        'forma_arco' => '',
        'simetria_arco' => '',
        'paladar' => '',
        'malposiciones_dentarias' => '',
        'dientes_ausentes' => '',
        'facetas_desgaste' => '',
        'diastemas' => '',
        'anomalias_forma_tamano_numero' => '',
    ];
}
