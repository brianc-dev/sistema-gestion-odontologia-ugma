<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamenRadiografico extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $attributes = [
        'zona_nasomaxilar' => '',
        'zona_atm' => '',
        'zona_mandibular' => '',
        'zona_dasi' => '',
        'estudio_periapicales' => '',
        'estudio_coronales' => ''
    ];

    protected $guarded = [];
}
