@extends('layouts.admin',['item_active'=>'evaluaciones'])

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 text-center">Lista de sucursales</h1>

    </div>



    <div class="row">

        @foreach($sucursales as $item)
            <div class="col-xl-3 col-md-6 mb-4">
                <a href="{{url('/encuestas/lista_sucursales/'.$item->id)}}">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">{{$item->nombre}}</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$item->getCount()}} Evaluaciones</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach



    </div>


    <script>
        $(document).ready(function() {

        });



    </script>
@endsection
