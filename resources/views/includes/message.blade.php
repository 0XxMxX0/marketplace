@if($mensagem = Session::get('sucesso') and $icon = Session::get('icon') and $typeAlert = Session::get('typeAlert'))
    <div class="alert alert-{{$typeAlert}} d-flex align-items-center" role="alert">
        <i class="bi {{$icon}}"></i>
        <div>
            &nbsp{{$mensagem}}
        </div>
    </div>
@endif
