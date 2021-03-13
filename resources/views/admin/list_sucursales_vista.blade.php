@extends('layouts.admin',['item_active'=>'evaluaciones'])

@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 text-gray-800">Lista de encuestas</h1>
        <form method="get" action="" align="center">
            <button type="submit" href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Exportar CSV</button>
        </form>
    </div>

    <!-- Page Heading -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="row">
                <div class="col-md-12 _jus">
                    <div class="">
                        <div class="small mb-1">Mes:</div>
                        <select name="" id="mes">
                            <option {{$month==1?"selected":''}} value="1">Enero</option>
                            <option {{$month==2?"selected":''}} value="2">Febrero</option>
                            <option {{$month==3?"selected":''}} value="3">Marzo</option>
                            <option {{$month==4?"selected":''}} value="4">Abril</option>
                            <option {{$month==5?"selected":''}} value="5">Mayo</option>
                            <option {{$month==6?"selected":''}} value="6">Junio</option>
                            <option {{$month==7?"selected":''}} value="7">Julio</option>
                            <option {{$month==8?"selected":''}} value="8">Agosto</option>
                            <option {{$month==9?"selected":''}} value="9">Septiembre</option>
                            <option {{$month==10?"selected":''}} value="10">Octubre</option>
                            <option {{$month==11?"selected":''}} value="11">Noviembre</option>
                            <option {{$month==12?"selected":''}} value="12">Diciembre</option>
                        </select>
                    </div>
                    <div class="">
                        <div class="small mb-1">Año:</div>
                        <select name="" id="ano">
                            @for($i=2019;$i<2030;$i++)
                            <option {{$year==$i?"selected":''}} value="{{$i}}">{{$i}}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="">
                        <div class="small mb-1">&nbsp;</div>
                        <button  class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm sssddds"><i class="fas fa-check fa-sm text-white-50"></i> Buscar</button>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Teléfono</th>
                        <th>Fecha</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($encuestas as $item )
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->nombre_contacto}}</td>
                        <td>{{$item->telefono_contacto}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>
                            <a href="{{url('/encuestas/detalle/'.$item->id)}}" class="btn btn-success btn-icon-split">
                                <span class="text">Ver</span>
                            </a>
                        </td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();


            $('.sssddds').click(function (e) {

                var mes = $('#mes').val();
                var ano = $('#ano').val();
                console.log("{{url('/encuestas/lista_sucursales/'.$id)}}"+'/'+ano+"/"+mes)
                window.location.href = "{{url('/encuestas/lista_sucursales/'.$id)}}"+'/'+ano+"/"+mes
            });


        });




    </script>
@endsection
