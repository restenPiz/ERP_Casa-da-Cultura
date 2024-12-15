@extends('layouts.layout')
@section('content')
    {{-- * Inicio do conteudo do dash --}}
    <div class="card mb-3">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <h5 class="mb-2">{{Auth::user()->name}} {{Auth::user()->Surname}} </h5>
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
<div class="row g-3">
        <div class="col-xxl-12 col-xl-9">
            <div class="card mb-3">
                <div class="card-header position-relative">
                    <h5 class="mb-0 mt-1">Eventos da Casa de Cultura</h5>
                    <div class="bg-holder d-none {{--d-md-block--}} bg-card"
                        style="background-image:url(../../../assets/img/illustrations/corner-6.png);"></div>
                </div>
            </div>
            <div class="row mb-3 g-3">
                @foreach ($events as $course)
                    <article class="col-md-6 col-xxl-4">
                        <div class="card h-100 overflow-hidden">
                            <div class="card-body p-0 d-flex flex-column justify-content-between">
                                <div>
                                    <div class="hoverbox text-center">s<img
                                                class="w-100 h-100 object-fit-cover"
                                                src="{{ asset('storage/' . $course->Event_picture) }}" alt="" /></a>
                                        <div class="hoverbox-content flex-center pe-none bg-holder overlay overlay-2"><img
                                                class="z-1" src=""
                                                width="60" alt="" /></div>
                                    </div>
                                    <div class="p-3">
                                        <h5 class="fs-9 mb-2"><a class="text-1100">
                                                {{ $course->Name }}</a></h5>
                                        {{-- <h5 class="fs-9">Formador: <a href="../trainer-profile.html"></a></h5> --}}
                                    </div>
                                </div>
                                <div class="row g-0 mb-3 align-items-end">
                                    <div class="col ps-3">
                                        <h4 class="fs-8 text-warning d-flex align-items-center"> <span>Data: {{ \Carbon\Carbon::parse($course->Date)->format('d-M-Y') }}
                                                </span>
                                            {{-- <del class="ms-2 fs-10 text-700">$139.90</del> --}}
                                        </h4>
                                        {{-- <p class="mb-0 fs-10 text-800">92,632 Learners Enrolled</p> --}}
                                    </div>

                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
    {{-- * Fim do conteudo da dash --}}
@endsection
