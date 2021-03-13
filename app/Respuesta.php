<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    //
    protected $table = "respuestas";
    protected $fillable = ["pregunta_id","encuesta_id","valor"];

    public function pregunta(){
        return $this->hasOne(Pregunta::class,'id','pregunta_id');
    }


}
