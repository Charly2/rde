<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    //
    protected $table = 'sucursales';

    public  function getCount(){
        return Encuesta::where('sucursal_id', $this->id)->count();
    }

}
