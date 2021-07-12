<?php

namespace App\Mail;

use App\Encuesta;
use App\Pregunta;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\DB;

class EncuestaMail extends Mailable
{
    use Queueable, SerializesModels;
    private $encuesta;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        //
        $this->encuesta = Encuesta::find($id);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $id = $this->encuesta->id;
        $encuesta = $this->encuesta;
        $sucursal = $encuesta->sucursal;
        $sucursal_name = $sucursal->nombre;
        $data = [];
        $preguntas = Pregunta::where('estado_pregunta',1)->where('tipo_pregunta',"!=",6)->get();
        foreach ($preguntas as $item){
            $labels = $item->getLabels();
            $idp = $item->id;
            $respuesta =  DB::select(
                DB::raw("
                SELECT valor from
                respuestas r inner join encuestas e
                on r.encuesta_id = e.id
                where e.id = $id and r.pregunta_id = $idp
                ")
            );
            $res1 = [];
            foreach ($respuesta as  $res){
                if (key_exists(($res->valor)-1,$labels)){
                    $item->valor = $res->valor;
                    $item->label =$labels[($res->valor)-1];
                }else{
                    $item->valor = 0;
                    $item->valor = "";
                }
            }
            $data[] = $item;
        }
        return $this->subject('Nueva Encuesta Realizada!')->view('mail.send_encuesta',['encuesta'=>$this->encuesta,'pregustas'=>$data,"sucursal"=>$sucursal_name]);
    }
}
