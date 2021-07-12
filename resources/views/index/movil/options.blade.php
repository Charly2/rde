@extends("layouts.app")

@section("content")
<style>
        body{
            background-image: url("/assets/img/v2/DRD3D_App_Layout12.jpg")!important;
        }
        
    </style>
    <div class="index_header">
        <div class="row">
            <div class="col-sm-6 index_header_img">
                <img src="http://www.drd3d.com/images/LogoColor1.png" alt="">
            </div>
            <div class="col-sm-6 index_header_title">
                <h1 >Recopilador de Encuestas de Calidad en el Servicio</h1>
            </div>
        </div>
    </div>
    <div class= " app welcome-area v4 p200" id="home">
        <div class="container">
            <div class="main_area">
                <div class="row">
                    <div class="col-12">
                        <div class="welcome-text">
                            <h1>¿Comó desea ayudarnos? </h1>
                            <p>La información que usted nos proporciona nos <br>ayuda a mejorar nuestro servicio.</p>
                        </div>

                        <div class="app-btns v4">
                            <a href="{{url('movil/'.$sucursal.'/encuesta/'.$nombre.'/'.$telefono)}}" class="app-btn align-self-center">
                                <span class="app-btn-icon">
                                    <i class="fa fa-check-double"></i>
                                </span>
                                <span class="app-btn-text">
                                    <small>Desea hacer una <strong>Evaluación</strong></small>
                                </span>
                            </a>
                            <a href="{{url('movil/'.$sucursal.'/comentario/'.$nombre.'/'.$telefono)}}" class="app-btn active align-self-center">
                                <span class="app-btn-icon">
                                    <i class="fa fa-pencil"></i>
                                </span>
                                <span class="app-btn-text">
                                    <small>Desea dejar un  <strong>Comentario</strong></small>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div id="borrar_f" class="btn btn-danger btn-circle btn-lg salir_">
                    <i class="fa fa-times"></i>
                </div>
            </div>
        </div>
    </div>




@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $("#borrar_f").click(function (e) {
                e.preventDefault();
                window.location.href = "{{url('movil/'.$sucursal.'/')}}"
            })



        })
    </script>

@endsection

