<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FichaEndodontica extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $attributes = [
        'sintomas' => '',
        'signos' => '',
        'etiologia' => '',
        'interpretacion_radiografica' => '',
    ];
}
