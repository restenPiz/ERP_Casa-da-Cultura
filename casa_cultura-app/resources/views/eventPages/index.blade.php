@extends('layouts.layout')
@section('content')

    {{-- !Inicio da minha view --}}
    <div class="row g-0">
        <div class="col-lg-8 pe-lg-2">

            {{-- !Inicio da tabela de todos eventos --}}
            <div class="card mb-3 mb-lg-0" style="background-image: url('../../imagem/n10.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center; height: 100vh; margin: 0;">
                <div class="card-header bg-body-tertiary d-flex justify-content-between">
                    <h5 class="mb-0">Todos Eventos</h5>
                </div>
                <div class="card-body fs-10" >
                    <div class="row" style="background-color:white">
                        @foreach ($events as $event)
                            <div class="col-md-6 h-100">
                                <div class="d-flex btn-reveal-trigger">
                                    <div class="calendar"><span class="calendar-month">{{ \Carbon\Carbon::parse($event->Date)->format('M') }}</span><span
                                            class="calendar-day">{{ \Carbon\Carbon::parse($event->Date)->format('d') }}</span></div>
                                    <div class="flex-1 position-relative ps-3">
                                        <h6 class="fs-9 mb-0"><a href="{{route('event.detail',['id'=>$event->id])}}">{{$event->Name}} </a></h6>
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
                        <h5 class="mb-0"></h5>
                    </div>
                    <div class="card-body bg-body-tertiary">
                        <form action="{{route('event.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            {{--*Inicio do formulario--}}
                            <div class="mb-3">
                                <label class="form-label" for="event-type">Nome do Evento</label>
                                <input class="form-control form-control-sm @error('Name') is-invalid @enderror" type="text" placeholder="Nome do Evento" name="Name" value="{{ old('Name') }}" />
                                @error('Name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="event-topic">Artista</label>
                                <select class="form-select @error('id_artist') is-invalid @enderror" id="event-topic" name="id_artist">
                                    <option value="" selected="selected">Selecione o Artista</option>
                                    @foreach ($artists as $artist)
                                        <option value="{{ $artist->id }}" {{ old('id_artist') == $artist->id ? 'selected' : '' }}>{{ $artist->Name }}</option>
                                    @endforeach
                                </select>
                                @error('id_artist')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="event-type">Local</label>
                                <input class="form-control form-control-sm @error('Location') is-invalid @enderror" type="text" placeholder="Localizacao" name="Location" value="{{ old('Location') }}" />
                                @error('Location')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="event-type">Numero de Palestrantes</label>
                                <input class="form-control form-control-sm @error('Number_of_speaker') is-invalid @enderror" type="text" placeholder="Numero de Palestrantes" name="Number_of_speaker" value="{{ old('Number_of_speaker') }}" />
                                @error('Number_of_speaker')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="border-bottom border-dashed my-3"></div>

                            <div class="mb-3">
                                <label class="form-label" for="event-type">Data do Evento</label>
                                <input class="form-control form-control-sm @error('Date') is-invalid @enderror" type="date" name="Date" value="{{ old('Date') }}" />
                                @error('Date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="event-type">Horario do Evento</label>
                                <input class="form-control form-control-sm @error('Hour') is-invalid @enderror" type="time" name="Hour" value="{{ old('Hour') }}" />
                                @error('Hour')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="border-bottom border-dashed my-3"></div>

                            <div class="mb-3">
                                <label class="form-label" for="event-description">Imagem do Evento</label>
                                <input class="form-control @error('Event_picture') is-invalid @enderror" name="Event_picture" type="file" />
                                @error('Event_picture')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="border-bottom border-dashed my-3"></div>

                            <div class="mb-3">
                                <label class="form-label" for="event-type">Preço do Evento</label>
                                <input class="form-control form-control-sm @error('Price') is-invalid @enderror" type="text" placeholder="Preço dos bilhetes" name="Price" value="{{ old('Price') }}" />
                                @error('Price')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="event-description">Descrição do Evento</label>
                                <textarea class="form-control @error('Description') is-invalid @enderror" name="Description" id="event-description" rows="6">{{ old('Description') }}</textarea>
                                @error('Description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{--?Inicio da seccao do butao--}}
                            <div class="mb-3">
                                <button style="border-radius:0; color:white" class="btn bg-primary btn-falcon-def btn-sm me-2" name="submit" type="submit">Adicionar</button>
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
