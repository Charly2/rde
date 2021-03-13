<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="titulo_pre" id="pre_{{$id_pregunta}}"> {{$texto_pregunta}}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="cont_resp">
                <div class="resp_item" data-id_Pregunta="{{$id_pregunta}}" data-value="1">
                    <img src="{{asset('assets/img/resp/res_t_3.svg')}}" alt="">
                    <p>Personal muy bueno</p>
                </div>
                <div class="resp_item" data-id_Pregunta="{{$id_pregunta}}" data-value="2">
                    <img src="{{asset('assets/img/resp/res_t_2.svg')}}" alt="">
                    <p>Capacitar al personal</p>
                </div>
                <div class="resp_item" data-id_Pregunta="{{$id_pregunta}}" data-value="3">
                    <img src="{{asset('assets/img/resp/res_t_1.svg')}}" alt="">
                    <p>Observar al personal</p>
                </div>
            </div>
        </div>
    </div>
</div>
