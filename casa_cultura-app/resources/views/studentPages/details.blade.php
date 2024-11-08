@extends('layouts.layout')
@section('content')
    {{-- ! Inicio do conteudo da minha pagina de detalhes --}}
    <div class="row g-3">
        <div class="col-xxl-12 col-xl-9">
            <h4 class="mb-0 mt-1">Pesquisa de dados do aluno</h4><br>
            <div class="card mb-3">
                <div class="card-header position-relative">
                    <form action="{{ route('student.search') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-sm-5 mb-3">
                                <label class="form-label" for="course-category">Nome do Aluno<span
                                        class="text-danger">*</span></label>
                                <select class="form-select @error('id_user') is-invalid @enderror" id="course-category"
                                    name="name">
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
                            <div class="col-sm-5 mb-3">
                                <label class="form-label" for="course-category">Curso<span
                                        class="text-danger">*</span></label>
                                <select class="form-select @error('id_user') is-invalid @enderror" id="course-category"
                                    name="id_course">
                                    <option>Selecione o seu Curso</option>
                                    @foreach ($courses as $course)
                                        <option value="{{ $course->id }}">{{ $course->Course_name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('id_user')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-2 mb-3">
                                <label class="form-label" for="course-category"><span class="text-danger"></span></label>
                                <button style="margin-top:2.1rem;" name="submit"
                                 class="btn btn-falcon-default btn-sm" type="submit">
                                    <span class="fas fa-external-link-alt" data-fa-transform="shrink-3 down-2"></span>
                                    <span class="d-none d-sm-inline-block ms-1">Filtrar</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            {{-- ! Inicio do conteudo restante --}}
            @if (session('course'))
                <div class="card-body p-0">
                    <div class="table-responsive scrollbar">
                        <div class="container">
                            <h3>Resultados da Pesquisa</h3>

                                {{-- Tabela de informações do aluno --}}
                                <table class="table table-bordered mb-4">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Informações do Aluno</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>Nome do Aluno</strong></td>
                                            <td>{{ $student->name }} {{ $student->Surname }}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Email</strong></td>
                                            <td>{{ $student->email }}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Telefone</strong></td>
                                            <td>{{ $student->contact }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    @else
        <p class="text-danger">Nenhum resultado encontrado para os critérios de pesquisa selecionados.</p>
    @endif
    {{-- ! Fim do conteudo restante --}}

    </div>
    </div>

    {{-- ! Fim do conteudo da minha pagina de detalhes --}}
@endsection
