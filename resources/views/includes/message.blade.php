@if($mensagem = Session::get('sucesso') and $icon = Session::get('icon') and $typeAlert = Session::get('typeAlert'))
    <div class="alert alert-{{$typeAlert}} d-flex align-items-center" role="alert">
        <i class="bi {{$icon}}"></i>
        <div>
            &nbsp{{$mensagem}}
        </div>
        <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
