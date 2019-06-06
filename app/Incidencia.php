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

    public function modulo()
    {
        return $this->belongsTo(Modulo::class);
    }

    public function tipo()
    {
        return $this->belongsTo(TipoIncidencia::class, 'tipo_incidencia_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
