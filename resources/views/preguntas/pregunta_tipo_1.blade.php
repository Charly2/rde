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
                    <img src="{{asset('assets/img/resp/res_a_1.svg')}}" alt="">
                    <p style="color:#009b7a">Excelente</p>
                </div>
                <div class="resp_item" data-id_Pregunta="{{$id_pregunta}}" data-value="2">
                    <img src="{{asset('assets/img/resp/res_a_3.svg')}}" alt="">
                    <p style="color: #7fef37">Buena</p>
                </div>
                <div class="resp_item" data-id_Pregunta="{{$id_pregunta}}" data-value="3">
                    <img src="{{asset('assets/img/resp/res_a_2.svg')}}" alt="">
                    <p style="color: #f2db36">Regular</p>
                </div>
                <div class="resp_item" data-id_Pregunta="{{$id_pregunta}}" data-value="4">
                    <img src="{{asset('assets/img/resp/res_a_4.svg')}}" alt="">
                    <p style="color:#dc3545">Mala</p>
                </div>
            </div>
        </div>
    </div>
</div>
