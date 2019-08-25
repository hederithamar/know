<?php

namespace App\Models\Motos;

use Illuminate\Database\Eloquent\Model;

class Moto extends Model
{
    protected $table = 'cat_motos';

    protected $fillable = [
        'precio',
        'ubicacion',
        'anio',
        'kilometraje',
        'color',
        'hecho _por',
        'modelo',
        'submodelo',
        'tipo',
        'porcentaje',
    ];
}
