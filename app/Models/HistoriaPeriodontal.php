<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoriaPeriodontal extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $attributes = [
        'control_placa_dental_url' => '',
        'porcentaje' => 0
    ];
}
