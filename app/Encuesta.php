<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
    //
    protected $table = 'encuestas';
    protected $fillable = ['sucursal_id','comentario','nombre_contacto','telefono_contacto'];

    public function sucursal(){
        return $this->hasOne(Sucursal::class,'id','sucursal_id');
    }
    public function respuestas(){
        return $this->hasMany(Respuesta::class,'encuesta_id','id');
    }

}
