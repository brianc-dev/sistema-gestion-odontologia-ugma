<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HigieneBucal extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $attributes = [
        'tipo_cepillo' => '',
        'metodo_cepillado' => '',
        'metodos_auxiliares' => ''
    ];

    protected $guarded = [];
}
