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
                    <button class="btn btn-falcon-primary btn-sm me-2" data-bs-toggle="modal"
                        data-bs-target="#addEventModal{{ $event->id }}" type="button"><span
                            class="fas fa-pen-alt me-1"></span>Editar</button><a
                        href="{{ route('event.delete', ['id' => $event->id]) }}"
                        class="btn btn-falcon-danger btn-sm px-4 px-sm-5" type="button"><span
                            class="fas fa-trash-alt me-1"></span>Eliminar</a>
                </div>

                {{-- * Inicio do modal de Editar --}}
                <div class="modal fade" id="addEventModal{{ $event->id }}" data-bs-keyboard="false"
                    data-bs-backdrop="static" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg mt-6" role="document">
                        <div class="modal-content border-0">
                            <div class="position-absolute top-0 end-0 mt-3 me-3 z-1"><button
                                    class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                                    data-bs-dismiss="modal" aria-label="Close"></button></div>
                            <div class="modal-body p-0">
                                <div class="rounded-top-3 bg-body-tertiary py-3 ps-4 pe-6">
                                    <h4 class="mb-1" id="staticBackdropLabel">Actualizar Evento
                                    </h4>
                                </div><br>
                                <div class="p-4" style="margin-top: -3rem;">
                                    <form action="{{ route('event.update', ['id' => $event->id]) }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label class="form-label" for="event-type">Nome do Evento</label>
                                                <input class="form-control form-control-sm" type="text"
                                                    value="{{$event->Name}}" name="Name" />
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="form-label" for="event-topic">Artista</label><select
                                                    class="form-select" id="event-topic" name="id_artist">
                                                    <option value="" selected="selected">Selecione o Artista</option>
                                                    @foreach ($artists as $artist)
                                                        <option value="{{ $artist->id }}">{{ $artist->Name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="form-label" for="event-type">Localizacao</label>
                                                <input class="form-control form-control-sm" type="text"
                                                    value="{{$event->Location}}" name="Location" />
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="form-label" for="event-type">Numero de Palestrantes</label>
                                                <input class="form-control form-control-sm" type="text"
                                                    value="{{$event->Number_of_speaker}}" name="Number_of_speaker" />
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="form-label" for="event-type">Data do Evento</label>
                                                <input class="form-control form-control-sm" type="date" name="Date" />
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="form-label" for="event-type">Horario do Evento</label>
                                                <input class="form-control form-control-sm" type="time" name="Hour" />
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="form-label" for="event-description">Imagem do Evento</label>
                                                <input class="form-control" value="{{$event->Event_picture}}" name="Event_picture" type="file" />
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="form-label" for="event-type">Preco do Evento</label>
                                                <input class="form-control form-control-sm" type="text"
                                                    value="{{$event->Price}}" name="Price" />
                                            </div>
                                            <div class="col-lg-12">
                                                <label class="form-label" for="event-description">Descricao do
                                                    Evento</label>
                                                <textarea name="Description" class="form-control" id="event-description" rows="6">{{$event->Description}}</textarea>
                                            </div>
                                            <input type="hidden" name="id" value="{{$event->id}}">
                                            {{-- * Fim dos inputs type hidden --}}
                                            <div style="margin-top: 1rem" class="col-12 d-flex"><button
                                                    style="border-radius: 0" class="btn btn-primary"
                                                    type="submit">Actualizar Evento
                                                </button></div>
                                        </div>
                                </div>
                                </form>
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
                        <h6 class="mt-4">Artista Principal</h6>
                        <p class="fs-10 mb-0">{{ $event->artists->Name }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ? Fim da seccao do conteudo da page --}}
@endsection
