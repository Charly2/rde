@extends('layouts.admin',['item_active'=>'graficas'])

@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 text-gray-800">Lista de encuestas</h1>

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
            <div class="row" style="margin-top: 50px">

                @foreach($data as $item)
                <div class="col-md-6 mb-4">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">{{$item->texto}}</h6>
                        </div>
                        <div class="card-body">
                            <div class="chart-bar">
                                <canvas id="myPieChart{{$item->id}}"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>

    <script>
        window.chartColors = {
            red: 'rgb(255, 99, 132)',
            green: 'rgb(75, 192, 192)',
            orange: 'rgb(255, 159, 64)',
            yellow: 'rgb(255, 205, 86)',
            blue: 'rgb(54, 162, 235)',
            purple: 'rgb(153, 102, 255)',
            grey: 'rgb(201, 203, 207)'
        };
        var options= {
            maintainAspectRatio: false,
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
            },
            legend: {
                display: true
            },
            cutoutPercentage: 80,
        };


        $(document).ready(function() {

            @foreach($data as $item)

                /*
                *
                *
                * */


                @php
                    $labales = [];
                    $value = [];
                @endphp
                @foreach($item->respuestas_all as $res)
                    @php
                        $labales[] = $res['label'];
                        $value[] = $res['total'];
                    @endphp
                @endforeach



                data{{$item->id}} = {
                datasets: [{
                    data: [
                        @php
                            echo "'".implode("','",$value)."'";
                        @endphp
                    ],
                    backgroundColor: [
                        window.chartColors.red,
                        window.chartColors.orange,
                        window.chartColors.yellow,
                        window.chartColors.green,
                        window.chartColors.blue,
                    ]
                }
                ],
                // These labels appear in the legend and in the tooltips when hovering different arcs
                labels: [
                    @php
                        echo "'".implode("','",$labales)."'";
                    @endphp
                ]
            };
            var ctx{{$item->id}} = document.getElementById("myPieChart{{$item->id}}");
            var myDoughnutChart = new Chart(ctx{{$item->id}}, {
                type: 'doughnut',
                data: data{{$item->id}},
                options: options
            });

            @endforeach


        });


        $(document).ready(function() {

            $('.sssddds').click(function (e) {

                var mes = $('#mes').val();
                var ano = $('#ano').val();
                console.log("{{url('/graficas/lista_sucursales/'.$id)}}"+'/'+ano+"/"+mes)
                window.location.href = "{{url('/graficas/lista_sucursales/'.$id)}}"+'/'+ano+"/"+mes
            });

        });




    </script>
@endsection
