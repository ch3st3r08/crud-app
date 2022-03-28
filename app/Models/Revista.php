<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Revista extends Model
{
    use HasFactory;
    protected $table = 'revista';
    public $timestamps = true;

    protected $fillable = [
        'nombre',
        'num_revista',
        'fecha_edicion',
        'num_paginas',
        'editorial'
    ];
}
