@extends('layouts.layout')
@section('content')
    {{-- Inicio do conteudo --}}
    <div class="card overflow-hidden mb-3" data-bs-theme="light">
        <div class="card-body bg-black">
            <div class="bg-holder rounded-3"
                style="background-image:url(../../../assets/img/icons/spot-illustrations/course-details-bg.png);"></div>
            <!--/.bg-holder-->
            <div class="row">
                <div class="col-xl-8 position-relative">
                    <div class="row g-3 align-items-center">
                        <div class="col-lg-5">
                            <div class="position-relative">
                                <div class="bg-holder rounded-1 overlay"
                                    style="background-image: url('{{ asset('storage/' . $course->Upload_file) }}');">
                                </div><!--/.bg-holder-->
                                <a class="text-decoration-none position-relative d-block py-7 text-center"
                                    href="../../../assets/video/beach.mp4" data-gallery="attachment-bg"><img
                                        class="rounded-1" src="../../../assets/img/icons/play.svg" width="60"
                                        alt="" /></a>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            @foreach ($course->users as $user)
                                <h6 class="fw-semi-bold text-400">O formador do curso e <a class="text-info"
                                        href="../trainer-profile.html">{{ $user->name }} {{ $user->Surname }}</a></h6>
                            @endforeach
                            <h2 class="fw-bold text-white">{{ $course->Course_name }} </h2>
                        </div>
                    </div>
                    <hr class="text-secondary text-opacity-50" />
                    <ul class="list-unstyled d-flex flex-wrap gap-3 fs-10 fw-semi-bold text-300 mt-3 mb-0">
                        <li><span class="fas fa-graduation-cap text-white me-1"> </span>{{ $countStudent }} Numero de
                            Estudantes Inscritos
                        </li>
                        <li><span class="fas fa-headphones text-white me-1"> </span>Portugues</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row g-lg-3">
        <div class="col-lg-8 order-1 order-lg-0">

            <div class="card mb-3">
                <div class="card-header bg-body-tertiary">
                    <div class="d-flex flex-between-center">
                        <h5 class="mb-0 text-truncate">Este curso vai te ensinar sobre</h5>
                    </div>
                </div>
                <div class="card-body position-relative">
                    <div class="bg-holder bg-card d-none d-md-block"
                        style="background-image:url(../../../assets/img/icons/spot-illustrations/corner-6.png);"></div>
                    <!--/.bg-holder-->
                    <ul class="list-unstyled position-relative row g-2 fs-10 mb-0 p-0">
                        <li class="col-md-12 d-flex gap-2"><span class="fas fa-circle mt-1"
                                data-fa-transform="shrink-8"></span><span
                                style="text-align:justify">{{ $course->Description }}</span></li>
                    </ul>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header bg-body-tertiary">
                    <h5 class="mb-0">Objectivos do Curso</h5>
                </div>
                <div class="card-body position-relative">
                    <div class="bg-holder bg-card d-none d-md-block"
                        style="background-image:url(../../../assets/img/icons/spot-illustrations/corner-7.png);"></div>
                    <!--/.bg-holder-->
                    <ul class="list-unstyled position-relative fs-10 p-0 m-0">
                        <li class="mb-2">
                            <div class="d-flex"><span class="fas fa-circle me-2 mt-1"
                                    data-fa-transform="shrink-8"></span><span
                                    style="text-align: justify">{{ $course->Goals }}</span></div>
                        </li>
                    </ul>
                </div>
            </div>

            {{-- Inicio da div de aulas --}}
            <div class="card mb-3">
                <div class="card-header bg-body-tertiary">
                    <div class="row">
                        <div class="col">
                            <h5 class="mb-0">Plano de Aulas</h5>
                        </div>
                        <div class="col" style="text-align: right">
                            <a href="#staticBackdrop" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                class="btn btn-link btn-sm py-2 px-0" href="#!">Adicionar Capitulo<span
                                    class="fas fa-plus ms-1 fs-11"></span></a>
                        </div>
                    </div>
                </div>

                {{-- * Inicio do modal de adicao de Capitulos --}}
                <div class="modal fade" id="staticBackdrop" data-bs-keyboard="false" data-bs-backdrop="static"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg mt-6" role="document">
                        <div class="modal-content border-0">
                            <div class="position-absolute top-0 end-0 mt-3 me-3 z-1"><button
                                    class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                                    data-bs-dismiss="modal" aria-label="Close"></button></div>
                            <div class="modal-body p-0">
                                <div class="rounded-top-3 bg-body-tertiary py-3 ps-4 pe-6">
                                    <h4 class="mb-1" id="staticBackdropLabel">Adicionar Capitulo
                                    </h4>
                                </div>
                                <div class="p-4" style="margin-top:-3rem">
                                    <form action="{{ route('chapter.store') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            {{-- ? Inicio da coluna contendo a Imagem --}}
                                            <div class="col-12 d-flex justify-content-center mb-4">
                                                <div
                                                    class="avatar avatar-5xl avatar-profile shadow-sm img-thumbnail rounded-circle">
                                                    <div
                                                        class="h-100 w-100 rounded-circle overflow-hidden position-relative">
                                                        <!-- Imagem Atual -->
                                                        <img src="../../../assets/img/elearning/lessons/chapter1.png"
                                                            width="200" alt="Foto do Formador" />
                                                        <!-- Input de Arquivo (Oculto) -->
                                                        <input name="Chapter_file" class="d-none" id="profile-image"
                                                            type="file" accept="image/*" />
                                                        <!-- Label que Atua como Botão para Selecionar a Imagem -->
                                                        <label class="mb-0 overlay-icon d-flex flex-center"
                                                            for="profile-image">
                                                            <span class="bg-holder overlay overlay-0"></span>
                                                            <span
                                                                class="z-1 text-white dark__text-white text-center fs-10">
                                                                <span class="fas fa-camera"></span>
                                                                <span class="d-block">Adicionar Foto</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- ? Fim da coluna contendo a Imagem --}}
                                            <div class="col-lg-6"> <label class="form-label" for="first-name">
                                                    Titulo do Capitulo</label><input name="Title" class="form-control"
                                                    id="first-name" type="text" /></div>
                                            <div class="col-lg-6"> <label class="form-label"
                                                    for="last-name">Subtitulo</label><input name="Description"
                                                    class="form-control" id="last-name" type="text" /></div>
                                            <input type="hidden" name="id_course" value="{{ $course->id }}">
                                            {{-- Fim dos inputs type hidden --}}
                                            <div style="margin-top: 1rem" class="col-12 d-flex"><button
                                                    style="border-radius: 0" class="btn btn-primary"
                                                    type="submit">Adicionar Capitulo
                                                </button></div>
                                        </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- * Fim do modal de adicao de Capitulos --}}

                @foreach ($chapters as $chapter)
                    <div class="card-body p-0">
                        <div class="d-flex align-items-center px-x1 py-2 border-bottom border-200">
                            <div class="hoverbox me-3 my-1"><a class="text-decoration-none"
                                    href="../../../assets/video/beach.mp4" data-gallery="attachment-bg">
                                    <div class="bg-attachment bg-attachment-square">
                                        <div class="bg-holder"
                                            style="background-image:url(../../../assets/img/elearning/lessons/chapter1.png);">
                                        </div><!--/.bg-holder-->
                                    </div>
                                </a>
                                <div class="hoverbox-content flex-center pe-none bg-holder overlay overlay-1 rounded">
                                    <div class="position-relative fs-7 text-white" data-bs-theme="light"><span
                                            class="fas fa-play-circle"></span></div>
                                </div>
                            </div>
                            <div class="flex-1">
                                <h5 class="fs-9"><a class="text-decoration-none" href="../../../assets/video/beach.mp4"
                                        data-gallery="attachment-title">{{ $chapter->Title }}</a></h5>
                                <p class="fs-10 mb-0">{{ $chapter->Description }}</p>
                            </div>
                            <div class="btn-group">
                                <a href="#staticBackdro{{ $chapter->id }}" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdro{{ $chapter->id }}"
                                    class="btn btn-sm btn-primary me-1">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="{{ route('chapter.delete', ['id' => $chapter->id]) }}" type="submit"
                                    class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- ? Inicio do modal de Edicao de Capitulos --}}
                    <div class="modal fade" id="staticBackdro{{ $chapter->id }}" data-bs-keyboard="false"
                        data-bs-backdrop="static" tabindex="-1" aria-labelledby="staticBackdropLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg mt-6" role="document">
                            <div class="modal-content border-0">
                                <div class="position-absolute top-0 end-0 mt-3 me-3 z-1"><button
                                        class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                                        data-bs-dismiss="modal" aria-label="Close"></button></div>
                                <div class="modal-body p-0">
                                    <div class="rounded-top-3 bg-body-tertiary py-3 ps-4 pe-6">
                                        <h4 class="mb-1" id="staticBackdropLabel">Actualizar Capitulo
                                        </h4>
                                    </div>
                                    <div class="p-4" style="margin-top:-3rem">
                                        <form action="{{ route('chapter.update', ['id' => $chapter->id]) }}"
                                            method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                {{-- ? Inicio da coluna contendo a Imagem --}}
                                                <div class="col-12 d-flex justify-content-center mb-4">
                                                    <div
                                                        class="avatar avatar-5xl avatar-profile shadow-sm img-thumbnail rounded-circle">
                                                        <div
                                                            class="h-100 w-100 rounded-circle overflow-hidden position-relative">
                                                            <!-- Imagem Atual -->
                                                            <img src="{{ asset('storage/' . $chapter->Chapter_file) }}"
                                                                width="200" alt="Foto do Formador" />
                                                            <!-- Input de Arquivo (Oculto) -->
                                                            <input name="Chapter_file" class="d-none" id="profile-image"
                                                                type="file" accept="image/*"
                                                                value="{{ $chapter->Chapter_file }}" />
                                                            <!-- Label que Atua como Botão para Selecionar a Imagem -->
                                                            <label class="mb-0 overlay-icon d-flex flex-center"
                                                                for="profile-image">
                                                                <span class="bg-holder overlay overlay-0"></span>
                                                                <span
                                                                    class="z-1 text-white dark__text-white text-center fs-10">
                                                                    <span class="fas fa-camera"></span>
                                                                    <span class="d-block">Actualizar Foto</span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- ? Fim da coluna contendo a Imagem --}}
                                                <div class="col-lg-6"> <label class="form-label" for="first-name">
                                                        Titulo do Capitulo</label><input name="Title"
                                                        value="{{ $chapter->Title }}" class="form-control"
                                                        id="first-name" type="text" /></div>
                                                <div class="col-lg-6"> <label class="form-label"
                                                        for="last-name">Subtitulo</label><input name="Description"
                                                        class="form-control" id="last-name" type="text"
                                                        value="{{ $chapter->Description }}" /></div>
                                                <input type="hidden" name="id_course" value="{{ $course->id }}">
                                                {{-- Fim dos inputs type hidden --}}
                                                <div style="margin-top: 1rem" class="col-12 d-flex"><button
                                                        style="border-radius: 0" class="btn btn-primary"
                                                        type="submit">Actualizar Capitulo
                                                    </button></div>
                                            </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- ? Fim do modal de Edicao de Capitulos --}}
                @endforeach

            </div>
            {{-- Fim da div de aulas --}}

            {{-- ? Inicio da tabela contendo os estudantes do curso --}}
            <div class="card mb-3">
                <div class="card-header bg-body-tertiary">
                    <div class="row">
                        <div class="col">
                            <h5 class="mb-0">Alunos Inscritos</h5>
                        </div>
                    </div>
                </div>


                @foreach ($users->users as $user)
                    <div class="card-body p-0">
                        <div class="d-flex align-items-center justify-content-between px-x1 py-2 border-bottom border-200">
                            <div class="d-flex align-items-center">
                                <div class="hoverbox me-3 my-1">
                                    <div class="bg-attachment bg-attachment-square">
                                        <div class="bg-holder"
                                            style="background-image:url({{ asset('storage/' . $user->upload_file) }});">
                                        </div><!--/.bg-holder-->
                                    </div>
                                    <div class="hoverbox-content flex-center pe-none bg-holder overlay overlay-1 rounded">
                                        <div class="position-relative fs-7 text-white" data-bs-theme="light"></div>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h5 class="fs-9">
                                        <a class="text-decoration-none" href="#staticBackdr" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdr" data-gallery="attachment-title">
                                            {{ $user->name }} {{ $user->Surname }}
                                        </a>
                                    </h5>
                                    <h5 class="fs-9 mb-0">{{ $user->email }}</h5>
                                    <p class="fs-10 mb-0">Data de Nascimento: {{ $user->Date_of_birth }}</p>
                                </div>
                            </div>

                            <!-- Botão para adicionar notas -->
                            <div>
                                <a style="border-radius:0" href="#staticBackdro" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdro{{ $user->id }}" class="btn btn-sm btn-primary">
                                    Adicionar Nota de Avaliacao
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- ! Inicio do modal de adicao de notas --}}
                    <div class="modal fade" id="staticBackdro{{ $user->id }}" data-bs-keyboard="false"
                        data-bs-backdrop="static" tabindex="-1" aria-labelledby="staticBackdropLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg mt-6" role="document">
                            <div class="modal-content border-0">
                                <div class="position-absolute top-0 end-0 mt-3 me-3 z-1"><button
                                        class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                                        data-bs-dismiss="modal" aria-label="Close"></button></div>
                                <div class="modal-body p-0">
                                    <div class="rounded-top-3 bg-body-tertiary py-3 ps-4 pe-6">
                                        <h4 class="mb-1" id="staticBackdropLabel">Adicionar Nota de Avaliacoes
                                        </h4>
                                    </div>
                                    <div class="p-4" style="margin-top:-3rem">
                                        <form action="{{ route('storeValue') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                {{-- ? Fim da coluna contendo a Imagem --}}
                                                <div class="col-lg-4"> <label class="form-label" for="first-name">
                                                        Primeira Avaliacao</label>
                                                    <input class="form-control" type="number" name="First">
                                                </div>
                                                <div class="col-lg-4"> <label class="form-label" for="first-name">
                                                        Segunda Avaliacao</label>
                                                    <input class="form-control" type="number" name="Second">
                                                </div>

                                                <div class="col-lg-4"> <label class="form-label" for="first-name">
                                                        Terceira Avaliacao</label>
                                                    <input class="form-control" type="number" name="Third">
                                                </div>
                                                <input type="hidden" name="id_user" value="{{ $user->id }}">
                                                {{-- Fim dos inputs type hidden --}}
                                                <div style="margin-top: 1rem" class="col-12 d-flex"><button
                                                        style="border-radius: 0" class="btn btn-primary"
                                                        type="submit">Adicionar Nota
                                                    </button></div>
                                            </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- ! Fim do modal de adicao de notas --}}

                    {{-- ! Inicio do modal show de notas --}}
                    <div class="modal fade" id="staticBackdr" data-bs-keyboard="false" data-bs-backdrop="static"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg mt-6" role="document">
                            <div class="modal-content border-0">
                                <div class="position-absolute top-0 end-0 mt-3 me-3 z-1">
                                    <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body p-0">
                                    <div class="rounded-top-3 bg-body-tertiary py-3 ps-4 pe-6">
                                        <h4 class="mb-1" id="staticBackdropLabel">Detalhes do Estudante</h4>
                                    </div>
                                    <div class="p-4" style="margin-top:-3rem">
                                        {{-- * Inicio da tabela de notas do estudante --}}
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Primeira Avaliacao</th>
                                                        <th>Segunda Avaliacao</th>
                                                        <th>Terceira Avaliacao</th>
                                                        <th>Ações</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($user->values as $value)
                                                        {{-- Supondo que o relacionamento 'values' esteja configurado no modelo User --}}
                                                        <tr>
                                                            <td>{{ $value->First }}</td>
                                                            <td>{{ $value->Second }}</td>
                                                            <td>{{ $value->Third }}</td>
                                                            <td>
                                                                <button type="button" class="btn btn-primary btn-sm"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#editNoteModal{{ $value->id }}">Editar</button>
                                                                <form action=""
                                                                    method="POST" style="display:inline;">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                        class="btn btn-danger btn-sm">Excluir</button>
                                                                </form>
                                                            </td>
                                                        </tr>

                                                        {{-- Modal para edição de notas --}}
                                                        <div class="modal fade" id="editNoteModal{{ $value->id }}"
                                                            tabindex="-1"
                                                            aria-labelledby="editNoteLabel{{ $value->id }}"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="editNoteLabel{{ $value->id }}">Editar
                                                                            Nota</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form
                                                                            action=""
                                                                            method="POST">
                                                                            @csrf
                                                                            @method('PUT')
                                                                            <div class="mb-3">
                                                                                <label for="First"
                                                                                    class="form-label">Primeira
                                                                                    Nota</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="First" name="First"
                                                                                    value="{{ $value->First }}">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="Second"
                                                                                    class="form-label">Segunda Nota</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="Second" name="Second"
                                                                                    value="{{ $value->Second }}">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="Third"
                                                                                    class="form-label">Terceira
                                                                                    Nota</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="Third" name="Third"
                                                                                    value="{{ $value->Third }}">
                                                                            </div>
                                                                            <button type="submit"
                                                                                class="btn btn-primary">Salvar
                                                                                Alterações</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- ! Fim do modal de adicao de notas --}}
                @endforeach


            </div>
            {{-- ? Fim da tabela contendo os estudantes do curso --}}

            <div class="card mb-3">
                <div class="card-header d-flex flex-between-center">
                    <h5 class="mb-0">Formador</h5>
                </div>
                <div class="card-body bg-body-tertiary">
                    <div class="row g-4 text-center text-md-start">
                        @foreach ($course->users as $user)
                            <div class="col-md-auto"><a href="../trainer-profile.html">
                                    <div class="avatar avatar-4xl">
                                        <img class="rounded-circle" src="{{ asset('storage/' . $user->upload_file) }}"
                                            alt="" />
                                    </div>
                                </a></div>
                            <div class="col">

                                <h5 class="mb-2"> <a href="../trainer-profile.html">{{ $user->name }}
                                        {{ $user->Surname }}</a></h5>
                                <h6 class="fs-10 text-800 fw-normal mb-3">{{ $user->function }}</h6>

                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="course-details-sticky-sidebar mb-lg-8 mt-xl-n10 pe-xl-4 pe-xxl-7">
                <div class="card mb-3">
                    <div class="card-header bg-body-tertiary d-none d-lg-block">
                        <h5 class="mb-0">Plano de Pagamento</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7 col-lg-12 order-md-1 order-lg-0">
                                <h2 class="fw-medium d-flex align-items-center">{{ $course->Price }} MZN</h2>
                                {{-- <button class="btn btn-primary btn-lg w-100 fs-9 mt-1" id="course-purchase-btn">Efectuar
                                    Pagamento</button> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-none d-xl-block position-absolute z-n1 top-0 end-0 text-end me-n2 me-xxl-4 mt-xl-6"><img
                        class="bg-card" src="../../../assets/img/illustrations/bg-wave.png" alt=""
                        style="max-width: 23.75rem;" /></div>
            </div>
        </div>
    </div>

    {{-- Fim do conteudo --}}
@endsection
