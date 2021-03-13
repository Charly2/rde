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

    <div class="app welcome-area v4 matop">
        <div class="container">
            <div id="fullpage">
                <div class="main_area">
                    <div class="row">
                        <div class="section">
                            @foreach($preguntas as $pregunta)
                                <div class="slide ">
                                    @include('preguntas.pregunta_tipo_'.$pregunta->tipo_pregunta,['texto_pregunta'=>$pregunta->texto,'id_pregunta'=>$pregunta->id,'vista'=>'movil'])
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>





@endsection

@section('salir')
    <div id="borrar_f" class="btn btn-danger btn-circle btn-lg salir_ salir_gral">
        <i class="fa fa-times"></i>
    </div>
@endsection

@section('script')
    <script>
        var _DATOS = [];
        var _TOTAL = {{sizeof($preguntas)}};
        var _ACTIVO = 1;
        var _NOMBRE = '{{$nombre}}';
        var _TELEFONO = '{{$telefono}}';


        function next_S(ele,id,id_pregunta){
            console.log(ele,id);
            console.log(_DATOS);
            var data = {
                nombre: _NOMBRE,
                telefono: _TELEFONO,
                data : _DATOS,
                _token: '{{csrf_token()}}',
                comentario : document.getElementById(id).value
            }
            console.log(data);
            $.post('{{url('movil/'.$sucursal.'/save_encuesta')}}',data).done(function (e) {
                console.log(e);
                window.location.href = '{{url('movil/'.$sucursal.'/gracias')}}';
            });
        }

        $(document).ready(function () {

            $("#borrar_f").click(function (e) {
                e.preventDefault();
                window.location.href = "{{url('movil/'.$sucursal.'/')}}"
            })

            $(".index_header").click(function (){
                window.location.reload()
            });



            var myFullpage = new fullpage('#fullpage', {
                loopHorizontal:false,
                afterRender: function(){
                    var pluginContainer = this;
                    fullpage_api.setAllowScrolling(false);
                }
            });
            function nxt() {
                console.log(fullpage_api.moveSlideRight());
            }

            $('.resp_item').click(function (e) {
                var a = $(this).data();
                a.txt = $(this).find('p').html();
                a.preg = $('#pre_'+a.id_pregunta).html();
                _DATOS.push(a);
                console.log(a)
                if(a.ios=="on"){
                    console.log($(this).parents('.slide').next().remove());
                }
                if(_ACTIVO < _TOTAL){
                    _ACTIVO++;
                    console.log($(this).parent('cont_resp').children('.resp_item'))
                    $(this).addClass('acti');
                    setTimeout(function () {
                        nxt();
                    },280);
                }else{

                }

            });
        })
    </script>

@endsection
