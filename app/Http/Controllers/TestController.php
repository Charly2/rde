<?php

namespace App\Http\Controllers;

use App\Encuesta;
use App\Pregunta;
use App\Respuesta;
use App\Sucursal;
use Illuminate\Http\Request;
use Illuminate\Support\Debug\Dumper;

class TestController extends Controller
{
    //
    public function index(){
        echo "HOLA";

        $encuesta = Encuesta::latest()->first();
        (new Dumper)->dump($encuesta);
        $respuestas = $encuesta->respuestas()->get();
        foreach( $respuestas as $item){
            (new Dumper)->dump($item);
        }


        die();


    }





}
