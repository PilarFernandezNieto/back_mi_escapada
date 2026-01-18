<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    protected $table = 'participantes';

    protected $fillable = [
        'nombre',
        'contacto',
        'email',
        'telefono',
        'calle',
        'cp',
        'ciudad',
        'provincia',
        'web',
    ];

       protected $casts = [
        'es_hotel' => 'boolean',
        'coordenadas' => 'array'
    ];
}
