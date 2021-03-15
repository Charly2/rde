<?php

namespace App\Http\Controllers;

use App\Encuesta;
use App\Pregunta;
use App\Respuesta;
use App\Sucursal;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('admin.home');
    }
    public function list_sucursales($tipo)
    {
        $tipo_rest = $tipo == "encuestas"?"encuestas":"graficas";
        $sucursales = Sucursal::all();
        return view('admin.list_sucursales',['sucursales'=>$sucursales,"tipo_rest"=>$tipo_rest]);
    }
    public function encuesta_now($id)
    {
        $date = Carbon::now();
        $month = $date->month;
        $year = $date->year;
        $encuestas = Encuesta::whereYear('created_at', '=', $year)
            ->whereMonth('created_at', '=', $month)
            ->where('sucursal_id',$id)
            ->get();
        return view('admin.list_sucursales_vista',['encuestas'=>$encuestas,'month'=>$month,'year'=>$year,'id'=>$id]);
    }
    public function encuesta_date($id,$year ,$month)
    {
        $encuestas = Encuesta::whereYear('created_at', '=', $year)
            ->whereMonth('created_at', '=', $month)
            ->where('sucursal_id',$id)
            ->get();
        return view('admin.list_sucursales_vista',['encuestas'=>$encuestas,'month'=>$month,'year'=>$year,'id'=>$id]);
    }
    public function encuesta_detalle($id){
        $encuesta = Encuesta::find($id);

        if ($encuesta){
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
            return view('admin.detalle',['encuesta'=>$encuesta,'pregustas'=>$data]);
        }else{
            echo "NO";
        }
    }


    public function grafica_now($id)
    {
        $date = Carbon::now();
        $month = $date->month;
        $year = $date->year;

        $preguntas = Pregunta::where('estado_pregunta',1)->where('tipo_pregunta',"!=",6)->get();
        $data = [];
        foreach ($preguntas as $item){
            $labels = $item->getLabels();
            $idp = $item->id;
            $respuesta =  DB::select(
                DB::raw("
                SELECT r.valor, count( r.valor) as total from
                respuestas r inner join encuestas e
                on r.encuesta_id = e.id
                where r.pregunta_id  = $idp
                and MONTH (e.created_at) = $month
                and YEAR (e.created_at) = $year
                group by  r.valor
                ")
            );
            $res1 = [];
            foreach ($respuesta as  $res){
                if (key_exists(($res->valor)-1,$labels)){
                    $res1[] = ['valor'=>$res->valor,'total'=>$res->total,'label'=>$labels[($res->valor)-1]];
                }else{
                    $res1[] = ['valor'=>$res->valor,'total'=>$res->total,'label'=>""];
                }
            }
            $item->respuestas_all = $res1;
            $data[] = $item;
        }
        //dd($data);
        return view('admin.grafica',['data'=>$data,'month'=>$month,'year'=>$year,'id'=>$id]);
    }
    public function grafica_date($id,$year ,$month)
    {

        $preguntas = Pregunta::where('estado_pregunta',1)->where('tipo_pregunta',"!=",6)->get();
        $data = [];
        foreach ($preguntas as $item){
            $labels = $item->getLabels();
            $idp = $item->id;
            $respuesta =  DB::select(
                DB::raw("
                SELECT r.valor, count( r.valor) as total from
                respuestas r inner join encuestas e
                on r.encuesta_id = e.id
                where r.pregunta_id  = $idp
                and MONTH (e.created_at) = $month
                and YEAR (e.created_at) = $year
                group by  r.valor
                ")
            );
            $res1 = [];
            foreach ($respuesta as  $res){
                if (key_exists(($res->valor)-1,$labels)){
                    $res1[] = ['valor'=>$res->valor,'total'=>$res->total,'label'=>$labels[($res->valor)-1]];
                }else{
                    $res1[] = ['valor'=>$res->valor,'total'=>$res->total,'label'=>"---"];
                }
            }
            $item->respuestas_all = $res1;
            $data[] = $item;
        }
        //dd($data);
        return view('admin.grafica',['data'=>$data,'month'=>$month,'year'=>$year,'id'=>$id]);
    }

    public function export($id,$year ,$month){
        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename=data.csv');
        $output = fopen("php://output", "w");
        $data1 = [];
        $data1 = ['Id Encuesta','Fecha','Nombre Contacto','Telefono Contacto',"Comentario"];
        $preguntas = Pregunta::where('estado_pregunta',1)->where('tipo_pregunta',"!=",6)->get();
        foreach ($preguntas as $pregunta){
            $data1[] = $pregunta->texto;
        }
        fputcsv($output, array_map("utf8_decode", $data1));
        $encuestas = Encuesta::whereYear('created_at', '=', $year)
            ->whereMonth('created_at', '=', $month)
            ->where('sucursal_id',$id)
            ->get();
        $arregl = ['id_Encuesta','fecha','nombre_contacto','telefono_contacto',"Comentario"];
        foreach ($encuestas as $encuesta){
            $data_pre = [];
            $data_pre = [ $encuesta->id, $encuesta->created_at, $encuesta->nombre_contacto, $encuesta->telefono_contacto,  $encuesta->comentario    ];
            foreach ($encuesta->respuestas as $respuesta){
                $data_pre[] = $respuesta->valor;
            }

            fputcsv($output, array_map("utf8_decode", $data_pre));
        }


        fclose($output);
    }
}
