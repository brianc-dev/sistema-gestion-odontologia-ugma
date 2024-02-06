<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodontograma extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = [];
    protected $primaryKey = 'historia_id';
    public $incrementing = false;
}
