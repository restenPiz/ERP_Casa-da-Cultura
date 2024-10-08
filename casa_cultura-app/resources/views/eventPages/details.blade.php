@extends('layouts.layout')
@section('content')
    {{-- ? Inicio da seccao de conteudo --}}
    <div class="card mb-3"><img class="card-img-top" src="{{ asset('storage/' . $event->Event_picture) }}" alt="" />
        <div class="card-body">
            <div class="row justify-content-between align-items-center">
                <div class="col">
                    <div class="d-flex">
                        <div class="calendar me-2"><span
                                class="calendar-month">{{ \Carbon\Carbon::parse($event->Date)->format('M') }}
                            </span><span class="calendar-day">{{ \Carbon\Carbon::parse($event->Date)->format('d') }}
                            </span></div>
                        <div class="flex-1 fs-10">
                            <h5 class="fs-9">{{ $event->Name }}</h5>
                            <p class="mb-0">pela <a href="#!">Casa da Cultura</a></p><span
                                class="fs-9 text-warning fw-semi-bold">{{ $event->Price }} MZN</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-auto mt-4 mt-md-0">
                    <a href="{{ route('event.index') }}" class="btn btn-falcon-secondary btn-sm px-4 px-sm-5"
                        type="button">Todos Eventos</a>
                    <button class="btn btn-falcon-primary btn-sm me-2" 
                    data-bs-toggle="modal" data-bs-target="#addEventModal" type="button"><span
                            class="fas fa-pen-alt me-1"></span>Editar</button><a
                        href="{{ route('event.delete', ['id' => $event->id]) }}"
                        class="btn btn-falcon-danger btn-sm px-4 px-sm-5" type="button"><span
                            class="fas fa-trash-alt me-1"></span>Eliminar</a>
                </div>

                {{-- * Inicio do modal de Editar --}}
                <div class="modal fade" id="addEventModal" tabindex="-1" aria-labelledby="addEventModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addEventModalLabel">Editar Evento</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Fechar"></button>
                            </div>
                            <div class="modal-body">

                                {{--* Inicio do formulario do modal--}}

                                {{--* Fim do formulario do modal--}}

                            </div>  
                        </div>
                    </div>
                </div>

                {{-- * Fim do modal de editar --}}

            </div>
        </div>
    </div>
    <div class="row g-0">
        <div class="col-lg-8 pe-lg-2">
            <div class="card mb-3 mb-lg-0">
                <div class="card-body">
                    <h5 class="fs-9 mb-3">Descricao do Evento</h5>
                    <p style="text-align: justify">{{ $event->Description }}</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 ps-lg-2">
            <div class="sticky-sidebar">
                <div class="card mb-3 fs-10">
                    <div class="card-body">
                        <h6>Data e Hora</h6>
                        <p class="mb-1">{{ \Carbon\Carbon::parse($event->Date)->format('d-m-Y') }},
                            {{ \Carbon\Carbon::parse($event->Hour)->format('H:i') }} </p>
                        <h6 class="mt-4">Localizacao</h6>
                        <div class="mb-1">{{ $event->Location }}<br /></div>
                        <h6 class="mt-4">Numero de Palestrentas</h6>
                        <p class="fs-10 mb-0">{{ $event->Number_of_speaker }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ? Fim da seccao do conteudo da page --}}
@endsection
