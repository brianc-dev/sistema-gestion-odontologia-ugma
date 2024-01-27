<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\RefreshDatabase;

class Role extends Model
{
    use HasFactory, RefreshDatabase;

    protected $fillable = [
        'id',
        'nombre'
    ];
}
