@extends("layouts.app")

@section("content")

    <div id="overlay"></div>

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

    <div class="app welcome-area matop v4">
        <div class="container">
            <div id="fullpage">
                <div class="section">
                    <div class="slide ">
                        <div class="main_area a_1">
                            <div class="row">
                                <div class="col-12">
                                    <div class="welcome-text">
                                        <h1>Bienvenido</h1>
                                        <p class="mb-z0">La información que usted nos proporciona nos <br>ayuda a mejorar nuestro servicio.</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="username">Nombre del paciente</label>
                                                <input autocomplete="off"  type="text" class="form-control input_mobil not_event" id="nombre" aria-describedby="emailHelp"  placeholder="Ingrese su nombre completo">
                                            </div>
                                        </div>
                                    </div>

                                    @include('libs.teclado',['id'=>'nombre_keyboard'])

                                    <div class="app-btns v4 text-center righshs">
                                        <a class="app-btn align-self-center next_to" >
                                        <span class="app-btn-icon" style="line-height: 1">
                                            <i class="fa fa-check"></i>
                                        </span>
                                            <span class="app-btn-text" style="font-size: 1.4em;text-align: center">
                                            <small style="    margin-top: 3px;display: block;"><strong>Continuar</strong></small>
                                        </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide ">
                        <div class="main_area a_2">
                            <div class="back_to " id="Capa_1_c">
                                <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 477.175 477.175" style="enable-background:new 0 0 477.175 477.175;" xml:space="preserve"><g><path style="fill: #009b7a;" d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="welcome-text">
                                        <h1>Bienvenido</h1>
                                        <p class="mb-z0">La información que usted nos proporciona nos <br>ayuda a mejorar nuestro servicio.</p>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="username">Teléfono del paciente</label>
                                                <input autocomplete="off"  type="tel" class="form-control input_mobil_finish not_event" id="telefono" aria-describedby="emailHelp"  placeholder="Ingrese su número telefónico">
                                            </div>
                                        </div>
                                    </div>

                                    @include('libs.teclado_num',['id'=>'telefono_keyboard'])

                                    <div class="app-btns v4 text-right fotter_btns">
                                        <div class="btns_next">
                                            <button  class="app-btn align-self-center next_to_options">
                                            <span class="app-btn-icon" style="line-height: 1">
                                                <i class="fa fa-check"></i>
                                            </span>
                                                <span class="app-btn-text" style="font-size: 1.4em;text-align: center">
                                                <small style="margin-top: 3px;display: block;"><strong>Continuar</strong></small>
                                            </span>
                                            </button>
                                        </div>
                                        <div class="btns_back">
                                            <div class="btns_back_atras">
                                                <button  class="app-btn align-self-center back_to ">
                                                    <small style="margin-top: 3px;display: block;"><strong>Regresar</strong></small>
                                                </button>
                                            </div>
                                            <div class="btns_back_salir">
                                                <button  class="app-btn align-self-center reset_to btn-danger ">
                                                    <small style="margin-top: 3px;display: block;"><strong>Salir</strong></small>
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $("#overlay").click(function (){
                $(this).fadeOut(null,function (e) {
                    $("#overlay").remove();
                })
            });


            $('#nombre_keyboard .keyboard .row-keyboard div').on('click', function(e){
                e.preventDefault();
                var inputtext = $('#nombre').val();
                if (e.target.id == 'del') {
                    var temp = inputtext.substring(0, inputtext.length - 1);
                    temp = temp.substring(0, temp.length - 1);
                    console.log(temp)
                    temp =  temp+'|';
                    $('#nombre').val(temp);
                }else{
                    let temp = $(this).data('value');
                    inputtext = inputtext.substring(0, inputtext.length - 1);
                    temp = inputtext + temp+'|';
                    $('#nombre').removeClass("error");
                    $('#nombre').val(temp);
                }
            });

            $('#telefono_keyboard .keyboard .row-keyboard div').on('click', function(e){
                e.preventDefault();
                var inputtext = $('#telefono').val();
                if (e.target.id == 'del') {
                    var temp = inputtext.substring(0, inputtext.length - 1);
                    temp = temp.substring(0, temp.length - 1);
                    console.log(temp)
                    temp =  temp+'|';
                    $('#telefono').val(temp);
                }else{
                    let temp = $(this).data('value');
                    inputtext = inputtext.substring(0, inputtext.length - 1);
                    temp = inputtext + temp+'|';
                    $('#telefono').removeClass("error");
                    $('#telefono').val(temp);
                }
            });


            $(".input_mobil").on("keypress", function(event){
                if (event.keyCode == 13) {
                    event.preventDefault();
                    event.target.blur();
                    fullpage_api.moveSlideRight();
                }
            });
            $(".input_mobil_finish").on("keypress", function(event){
                if (event.keyCode == 13) {
                    event.preventDefault();
                    event.target.blur();
                    window.location.href = "{{url('desktop/'.$sucursal.'/options/')}}/"+$('#nombre').val()+'/'+$('#telefono').val()
                }
            });

            var myFullpage = new fullpage('#fullpage', {
                loopHorizontal:false,
                navigation: false,
                afterRender: function(){
                    var pluginContainer = this;
                    fullpage_api.setAllowScrolling(false);
                }
            });
            $('.next_to').click(function (e) {
                e.preventDefault();
                fullpage_api.moveSlideRight();
            });
            $('.next_to_options').click(function (e) {
                e.preventDefault();
                var nombre = $('#nombre').val() != "" ? $('#nombre').val() : "sin_nombre";
                var telefono = $('#telefono').val()  != "" ? $('#telefono').val() :"sin_numero";
                window.location.href = "{{url('desktop/'.$sucursal.'/options/')}}/"+nombre+'/'+telefono
            });
            $('.back_to').click(function (e) {
                e.preventDefault();
                fullpage_api.moveSlideLeft();
            });
            $('.reset_to').click(function (e) {
                e.preventDefault();
                window.location.href = "{{url('desktop/'.$sucursal)}}"
            });
        })
    </script>

@endsection
