<?php

namespace App\Http\Controllers;

use App\Encuesta;
use App\Pregunta;
use App\Respuesta;
use Illuminate\Http\Request;

class IndexDesktopController extends Controller
{
    //
    public function index($sucursal){
        return view('index.desktop.index',['sucursal'=>$sucursal]);
    }
    public function gracias($sucursal){
        return view('index.desktop.gracias',['sucursal'=>$sucursal]);
    }
    public function options($sucursal,$nombre,$telefono){
        return view('index.desktop.options',['sucursal'=>$sucursal,'nombre'=>$nombre,'telefono'=>$telefono]);
    }
    public function comentario($sucursal,$nombre,$telefono){
        $preguntas = Pregunta::where('estado_pregunta',1)->where('tipo_pregunta',6)->get();
        //dd($preguntas);
        return view('index.desktop.comentario',['sucursal'=>$sucursal,'preguntas'=>$preguntas,'nombre'=>$nombre,'telefono'=>$telefono]);
    }
    public function encuesta($sucursal,$nombre,$telefono){
        $preguntas = Pregunta::where('estado_pregunta',1)->get();
        //dd($preguntas);
        return view('index.desktop.encuesta',['sucursal'=>$sucursal,'preguntas'=>$preguntas,'nombre'=>$nombre,'telefono'=>$telefono]);
    }

    public function save_encuesta($sucursal,Request $request){
        $nombre = $request->input('nombre');
        $telefono = $request->input('telefono');
        $comentario = $request->input('comentario');
        $data = $request->input('data');
        $encuesta = Encuesta::create([
            'sucursal_id' =>  $sucursal ,
            'comentario' => $comentario ,
            'nombre_contacto' =>  $nombre,
            'telefono_contacto' =>$telefono
        ]);
        foreach ($data as $item ){
            $respuesta = Respuesta::create([
                "pregunta_id" => $item['id_pregunta'],
                "encuesta_id" => $encuesta->id,
                "valor" =>$item['value']
            ]);
            $respuesta->save();
        }
        $encuesta->save();
        return response()->json(['estatus'=>1]);
    }
    public function save_comentario($sucursal,Request $request){
        $nombre = $request->input('nombre');
        $telefono = $request->input('telefono');
        $comentario = $request->input('comentario');
        $encuesta = Encuesta::create([
            'sucursal_id' =>  $sucursal ,
            'comentario' => $comentario ,
            'nombre_contacto' =>  $nombre,
            'telefono_contacto' =>$telefono
        ]);
        $encuesta->save();
        return response()->json(['estatus'=>1]);
    }
}
