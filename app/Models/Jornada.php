<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jornada extends Model
{
    protected $table = 'jornadas';

     protected $fillable = [
        'nombre',
        'descripcion',
        'fecha_inicio',
        'fecha_fin',
        'propuesta_generica',
        'precio_generico',
        'color',
        'imagen_ficha_jornada',
        'imagen_portada'
    ];
}
