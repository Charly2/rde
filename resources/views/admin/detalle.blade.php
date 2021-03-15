@extends('layouts.admin',['item_active'=>'encuestas'])

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 text-center">Encuesta  {{$encuesta->id}}</h1>
        <button id="impr" onclick="imprimit()" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>  Imprimir</button>
    </div>

    <div class="row">

        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Datos Generales</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Teléfono</th>
                                <th>Fecha y hora</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{$encuesta->id}}</td>
                                <td>{{$encuesta->nombre_contacto}}</td>
                                <td>{{$encuesta->telefono_contacto}}</td>
                                <td>{{$encuesta->created_at}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @if(!empty($pregustas))
    <div class="row">

        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Evaluación</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Pregunta</th>
                                <th>Respuesta</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($pregustas as $pre2)
                            <tr>
                                <td width="50%">{{$pre2->texto}}</td>
                                <td width="50%">{{$pre2->label}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    @if(!empty($encuesta->id))

    <div class="row">
        <div class="col-md-12 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Comentario</h6>
                </div>
                <div class="card-body">
                    {{$encuesta->comentario}}
                </div>
            </div>
        </div>
    </div>
    @endif

    <script>
        $(document).ready(function() {





        });

        function imprimit() {
            $('#wrapper .navbar').css('display',"none");
            $('#accordionSidebar').css('display',"none");
            $('#impr').css('display',"none!important");
            window.print();
            $('#wrapper .navbar').css('display',"block");
            $('#accordionSidebar').css('display',"block");
            $('#impr').css('display',"block!important");
        }



    </script>
@endsection
