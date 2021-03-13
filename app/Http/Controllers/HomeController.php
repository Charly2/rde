<?php

namespace App\Http\Controllers;

use App\Encuesta;
use App\Respuesta;
use App\Sucursal;
use Carbon\Carbon;
use Illuminate\Http\Request;

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
        return view('admin.home');
    }
    public function list_sucursales()
    {
        $sucursales = Sucursal::all();
        return view('admin.list_sucursales',['sucursales'=>$sucursales]);
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
            $resp = Respuesta::where('encuesta_id',$encuesta->id)->get();
            foreach ($resp as $item){
                $pregunta = $item->pregunta()->first();
                print_r([$item->pregunta_id,$item->valor,$pregunta->texto,$pregunta->tipo_pregunta,$pregunta->opciones_respuesta]);
            }
        }
    }
}
