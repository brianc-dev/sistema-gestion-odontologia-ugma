<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AntecedentesMedicosPersonales extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $attributes = [
        'descripcion_amt' => ''
    ];

    protected $guarded = [];
}
