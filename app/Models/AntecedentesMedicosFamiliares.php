<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AntecedentesMedicosFamiliares extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $attributes = [
        'madre' => '',
        'padre' => '',
        'hermanos' => '',
        'abuelos_maternos' => '',
        'abuelos_paternos' => '',
    ];

    protected $guarded = [];

    protected $primaryKey = 'historia_id';
    public $incrementing = false;
}
