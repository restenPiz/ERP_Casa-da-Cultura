@extends('layouts.layout')
@section('content')
    {{-- * Inicio do conteudo do dash --}}
    <div class="card mb-3">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <h5 class="mb-2">{{Auth::user()->name}} {{Auth::user()->Surname}} (<a href="mailto:{{Auth::user()->email}}">{{Auth::user()->email}}</a>)</h5>
                </div>
                <div class="col-auto d-none d-sm-block">
                    <h6 class="text-uppercase text-600">Formador<span class="fas fa-user ms-2"></span></h6>
                </div>
            </div>
        </div>
        <div class="card-body border-top">
            <div class="d-flex"><span class="fas fa-user text-success me-2" data-fa-transform="down-5"></span>
                <div class="flex-1">
                    <p class="mb-0">Formador foi criado em</p>
                    <p class="fs-10 mb-0 text-600">{{ \Carbon\Carbon::parse(Auth::user()->created_at)->format('d-M-y') }}, {{ \Carbon\Carbon::parse(Auth::user()->created_at)->format('H:i') }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col">
                    <h5 class="mb-0">Detalhes</h5>
                </div>
            </div>
        </div>
        <div class="card-body bg-body-tertiary border-top">
            <div class="row">
                <div class="col-lg col-xxl-5">
                    <h6 class="fw-semi-bold ls mb-3 text-uppercase">Detalhes de Conta</h6>
                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-1">Name Completo</p>
                        </div>
                        <div class="col">{{Auth::user()->name}} {{Auth::user()->Surname}}</div>
                    </div>
                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-1">Email</p>
                        </div>
                        <div class="col"><a href="mailto:tony@gmail.com">{{Auth::user()->email}}</a></div>
                    </div>
                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-1">Nivel de Acesso</p>
                        </div>
                        <div class="col">
                            <p class="fst-italic text-400 mb-1">{{Auth::user()->user_type}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-0">Numero</p>
                        </div>
                        <div class="col">
                            <p class="fst-italic text-400 mb-0">+258 {{Auth::user()->contact}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- * Fim do conteudo da dash --}}
@endsection
