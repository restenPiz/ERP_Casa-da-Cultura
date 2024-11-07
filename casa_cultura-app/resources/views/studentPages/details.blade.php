@extends('layouts.layout')
@section('content')
    {{-- ! Inicio do conteudo da minha pagina de detalhes --}}
    <div class="row g-3">
        <div class="col-xxl-12 col-xl-9">
            <h4 class="mb-0 mt-1">Pesquisa de dados do aluno</h4><br>
            <div class="card mb-3">
                <div class="card-header position-relative">
                    {{-- <h5 class="mb-0 mt-1">Todos Cursos</h5>
                    <div class="bg-holder d-none d-md-block bg-card"
                        style="background-image:url(../../../assets/img/illustrations/corner-6.png);">
                    </div> --}}
                    <!--/.bg-holder-->
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-sm-4 mb-3">
                                <label class="form-label" for="course-category">Nome do Aluno<span
                                        class="text-danger">*</span></label>
                                <select class="form-select @error('id_user') is-invalid @enderror" id="course-category"
                                    name="id_user[]">
                                    <option>Selecione o Nome do Aluno</option>
                                    @foreach ($trainers as $trainer)
                                        <option value="{{ $trainer->id }}">{{ $trainer->name }} {{ $trainer->Surname }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('id_user')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-4 mb-3">
                                <label class="form-label" for="course-category">Curso<span
                                        class="text-danger">*</span></label>
                                <select class="form-select @error('id_user') is-invalid @enderror" id="course-category"
                                    name="id_user[]">
                                    <option>Selecione o seu Curso</option>
                                    @foreach ($courses as $course)
                                        <option value="{{ $course->id }}">{{ $course->Name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('id_user')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-4 mb-3">
                                <label class="form-label" for="course-category"><span
                                        class="text-danger"></span></label>
                                <button style="margin-top:2.1rem;" class="btn btn-falcon-default btn-sm" type="button">
                                    <span class="fas fa-external-link-alt" data-fa-transform="shrink-3 down-2"></span>
                                    <span class="d-none d-sm-inline-block ms-1">Filtrar</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            {{-- ! Inicio do conteudo restante --}}

            {{-- ! Fim do conteudo restante --}}

        </div>
    </div>

    {{-- ! Fim do conteudo da minha pagina de detalhes --}}
@endsection
