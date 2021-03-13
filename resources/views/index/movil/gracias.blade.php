@extends("layouts.app")

@section("content")



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


    <div class="app welcome-area v4" id="home">
        <div class="container">
            <div class="main_area">
                <div class="row">
                    <div class="col-12">
                        <div class="welcome-text">
                            <h1 style="text-transform: uppercase">Gracias por  <br> participar en  <br> nuestra encuesta</h1>
                            <p>Su opinion es muy importante para nosotros, <br>siempre estamos buscando mejorar nuestro sericio.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="effect_1">
        <img src="{{asset('assets/img/v3_polygon_1.png')}}" alt="">
    </div>
    <div class="effect_2">
        <img src="{{asset('assets/img/v3_circle_1.png')}}" alt="">
    </div>
    <div class="effect_3">
        <img src="{{asset('assets/img/v3_polygon_1.png')}}" alt="">
    </div>
    <div class="effect_4">
        <img src="{{asset('assets/img/v3_circle_1.png')}}" alt="">
    </div>
    <div class="effect_5">
        <img src="{{asset('assets/img/v3_circle_1.png')}}" alt="">
    </div>
    <div class="welcome_right" id="section1">
        <div class="cross">
            <img src="{{asset('assets/img/cross-_1.png')}}" alt="">
        </div>
        <div class="cross cross-2">
            <img src="{{asset('assets/img/cross-_1.png')}}" alt="">
        </div>
        <div class="cross cross-3">
            <img src="{{asset('assets/img/cross-_1.png')}}" alt="">
        </div>
        <div class="cross cross-4">
            <img src="{{asset('assets/img/cross-_1.png')}}" alt="">
        </div>
        <div class="circle">
            <img src="{{asset('assets/img/circle-i.png')}}" alt="">
        </div>
        <div class="circle circle-2">
            <img src="{{asset('assets/img/circle-i.png')}}" alt="">
        </div>
        <div class="share">
            <img src="{{asset('assets/img/share_i.png')}}" alt="">
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            setTimeout(function () {
                window.location.href = '{{url('movil/'.$sucursal.'/')}}';
            },5000);
        });
    </script>
@endsection
