@extends('layouts.layout')
@section('content')
    {{-- ! Inicio do conteudo da minha pagina de detalhes --}}
    <div class="row g-3">
        <div class="col-xxl-12 col-xl-9">
            <h4 class="mb-0 mt-1">Filtro de dados do aluno</h4><br>
            <div class="card mb-3">
                <div class="card-header position-relative">
                    <form action="{{ route('student.search') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-sm-5 mb-3">
                                <label class="form-label" for="course-category">Curso<span
                                        class="text-danger">*</span></label>
                                <select class="form-select" id="course-category" name="id_course">
                                    <option>Selecione o seu Curso</option>
                                    @foreach ($courses as $course)
                                        <option value="{{ $course->id }}">{{ $course->Course_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-5 mb-3">
                                <label class="form-label" for="year-select">Ano<span class="text-danger">*</span></label>
                                <select class="form-select" id="year-select" name="year">
                                    <option>Selecione o Ano</option>
                                    @for ($year = 2020; $year <= date('Y'); $year++)
                                        <option value="{{ $year }}">{{ $year }}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col-sm-2 mb-3">
                                <label class="form-label" for="course-category"><span class="text-danger"></span></label>
                                <button style="margin-top:2.1rem;" name="submit" class="btn btn-falcon-default btn-sm"
                                    type="submit">
                                    <span class="fas fa-external-link-alt" data-fa-transform="shrink-3 down-2"></span>
                                    <span class="d-none d-sm-inline-block ms-1">Filtrar</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><br>

            {{-- ! Inicio do conteudo restante --}}

                @if(!empty($students) && count($students) > 0)
                    <h4>Estudantes Filtrados</h4>
                    <table class="table table-sm table-striped fs-10 mb-0 overflow-hidden">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Data de Nascimento</th>
                                <th>Curso</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                                <tr>
                                    <td>{{ $student->name }} {{ $student->Surname }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->Date_of_birth }}</td>
                                    <td>
                                        @foreach ($student->courses as $course)
                                            {{ $course->Course_name }}
                                        @endforeach
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            
            {{-- ! Fim do conteudo restante --}}
        </div>
    </div>

    {{-- ! Fim do conteudo da minha pagina de detalhes --}}
@endsection
