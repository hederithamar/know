<?php

namespace App\Models\CitaReparacion;

use Illuminate\Database\Eloquent\Model;

class CitaReparacion extends Model
{
    protected $table = 'cita_reparaciones';

    protected $fillable = [
        'id_cliente',
        'id_centro',
        'fecha',
        'hora'
    ];
}
