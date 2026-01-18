<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParticipanteImagen extends Model
{
    protected $table = 'participante_imagenes';

    protected $fillable = [
        'participante_id',
        'ruta',
        'titulo',
        'orden',
        'es_principal'
    ];
}
