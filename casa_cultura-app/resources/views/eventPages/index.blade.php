@extends('layouts.layout')
@section('content')

    {{-- !Inicio da minha view --}}
    <div class="row g-0">
        <div class="col-lg-8 pe-lg-2">

            {{-- !Inicio da tabela de todos eventos --}}
            <div class="card mb-3 mb-lg-0">
                <div class="card-header bg-body-tertiary d-flex justify-content-between">
                    <h5 class="mb-0">Todos Eventos</h5>
                </div>
                <div class="card-body fs-10">
                    <div class="row">
                        @foreach ($events as $event)
                            <div class="col-md-6 h-100">
                                <div class="d-flex btn-reveal-trigger">
                                    <div class="calendar"><span class="calendar-month">{{ \Carbon\Carbon::parse($event->Date)->format('M') }}</span><span
                                            class="calendar-day">{{ \Carbon\Carbon::parse($event->Date)->format('d') }}</span></div>
                                    <div class="flex-1 position-relative ps-3">
                                        <h6 class="fs-9 mb-0"><a href="event-detail.html">{{$event->Name}} </a></h6>
                                        <p class="mb-1">Organizado pela <a href="#!" class="text-700">Casa de Cultura</a></p>
                                        <p class="text-1000 mb-0">Horario: {{ \Carbon\Carbon::parse($event->Hour)->format('H:i') }}</p>
                                        <p class="text-1000 mb-0">Localizacao: {{$event->Location}}</p>
                                        <p class="text-1000 mb-0">Preco de Bilhete: {{$event->Price}} MT</p>
                                        <div class="border-bottom border-dashed my-3"></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            {{-- !Fim da tabela de todos eventos --}}

        </div>
        <div class="col-lg-4 ps-lg-2">
            <div class="sticky-sidebar">
                <div class="card mb-lg-0">
                    <div class="card-header">
                        <h5 class="mb-0">Formulario de Insercao</h5>
                    </div>
                    <div class="card-body bg-body-tertiary">
                        <form action="{{route('event.store')}}" method="post">
                            @csrf
                            {{--*Inicio do formulario--}}
                            <div class="mb-3"><label class="form-label" for="event-type">Nome do Evento</label>
                            <input class="form-control form-control-sm" type="text" placeholder="Nome do Evento" name="Name" /></div>
                            <div class="mb-3"><label class="form-label" for="event-topic">Artista</label><select
                                class="form-select" id="event-topic" name="id_artist">
                                <option value="" selected="selected">Selecione o Artista</option>
                                @foreach ($artists as $artist)
                                    <option value="{{$artist->id}}">{{$artist->Name}}</option>
                                @endforeach
                            </select></div>
                            <div class="mb-3"><label class="form-label" for="event-type">Localizacao</label>
                            <input class="form-control form-control-sm" type="text" placeholder="Localizacao" name="Location" /></div>
                            <div class="mb-3"><label class="form-label" for="event-type">Numero de Palestrantes</label>
                            <input class="form-control form-control-sm" type="text" placeholder="Numero de Palestrantes" name="Number_of_speaker" /></div>
                            {{--?Inicio da primeira seccao--}}
                            <div class="border-bottom border-dashed my-3"></div>
                            <div class="mb-3"><label class="form-label" for="event-type">Data do Evento</label>
                            <input class="form-control form-control-sm" type="date" name="Date" /></div>
                            <div class="mb-3"><label class="form-label" for="event-type">Horario do Evento</label>
                            <input class="form-control form-control-sm" type="time" name="Hour" /></div>
                            {{--?Inicio da segunda seccao--}}
                            <div class="border-bottom border-dashed my-3"></div>
                            {{--?Inicio da terceira seccao--}}
                            <div class="mb-3"><label class="form-label" for="event-description">Imagem do Evento</label>
                            <input class="form-control" name="Event_picture" type="file" />
                            </div>
                            {{--?Inicio da quarta seccao--}}
                            <div class="border-bottom border-dashed my-3"></div>
                            <div class="mb-3"><label class="form-label" for="event-type">Preco do Evento</label>
                            <input class="form-control form-control-sm" type="text" placeholder="Preco dos bilhetes" name="Price" /></div>
                            <div class="mb-3"><label class="form-label" for="event-description">Descricao do Evento</label><textarea name="Description" class="form-control" id="event-description" rows="6"></textarea>
                            </div>
                            {{--?Inicio da seccao do butao--}}
                            <div class="mb-3">
                                <button style="border-radius:0" class="btn btn-falcon-default btn-sm me-2" name="submit" type="submit">Adicionar</button>
                            </div>
                            {{--*Fim do formulario--}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- !Fim da minha view --}}
@endsection
