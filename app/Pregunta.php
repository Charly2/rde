<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    //

    public function getLabels(){
        return explode(',',$this->opciones_respuesta)??[];
    }

}
