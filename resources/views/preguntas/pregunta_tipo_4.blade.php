<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="titulo_pre" id="pre_{{$id_pregunta}}"> {{$texto_pregunta}}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="cont_resp wi30">
                <div class="resp_item" style="margin-left: 10px" data-id_Pregunta="{{$id_pregunta}}" data-value="1">
                    <img src="{{asset('assets/img/resp/res_d_1.svg')}}" alt="">
                    <p>Excelente</p>
                </div>
                <div class="resp_item" style="margin-left: 10px" data-id_Pregunta="{{$id_pregunta}}" data-value="2">
                    <img src="{{asset('assets/img/resp/res_d_2.svg')}}" alt="">
                    <p>Buena</p>
                </div>
                <div class="resp_item" style="margin-left: 10px" data-id_Pregunta="{{$id_pregunta}}" data-value="3">
                    <img src="{{asset('assets/img/resp/res_d_3.svg')}}" alt="">
                    <p>Regular</p>
                </div>
                <div class="resp_item" style="margin-left: 10px" data-id_Pregunta="{{$id_pregunta}}" data-value="4">
                    <img src="{{asset('assets/img/resp/res_d_4.svg')}}" alt="">
                    <p>Mala</p>
                </div>
                <div class="resp_item" style="margin-left: 10px" data-id_Pregunta="{{$id_pregunta}}" data-value="5">
                    <img src="{{asset('assets/img/resp/res_d_5.svg')}}" alt="">
                    <p>Pésima</p>
                </div>
            </div>
        </div>
    </div>
</div>
