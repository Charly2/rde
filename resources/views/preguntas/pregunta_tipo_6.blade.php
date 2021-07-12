<div class="container ssaassa">
    <div class="row">
        <div class="col-md-12">
            <h1 class="titulo_pre" id="pre_{{$id_pregunta}}"> {{$texto_pregunta}}</h1>
        </div>
    </div>
    <div class="row position-relative">
        <div class="col-md-12">
            <textarea name="" id="_com{{$id_pregunta}}" class="teclado_comnet" cols="30" rows="4"></textarea>
        </div>
    </div>
    @if($vista == "desktop")
        @include('libs.teclado',['id'=>"_com"])
    @endif

    <div class="row">
        <div class="col-md-12 float-left ">
            <div class="app-btns v4 text-center btnse">
                <a onclick="next_S(this,'_com{{$id_pregunta}}',{{$id_pregunta}})" data-id_Pregunta="{{$id_pregunta}}" data-value="" class="app-btn align-self-center abntnt">
                                <span class="app-btn-icon">
                                    <i class="fa fa-check-double"></i>
                                </span>
                    <span class="app-btn-text">
                                    <small class="display_block" style="line-height: 1.2">Finalizar<strong  style="line-height: .5em;margin-top: 10px;">Evaluación</strong></small>
                                </span>
                </a>

            </div>
        </div>
    </div>
</div>
