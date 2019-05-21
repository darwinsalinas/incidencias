<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incidencia extends Model
{
    protected $fillable = [
        'titulo',
        'descripcion',
        'tipo_incidencia_id',
        'modulo_id',
        'user_id'
    ];
}
