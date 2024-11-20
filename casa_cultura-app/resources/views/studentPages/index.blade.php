@extends('layouts.layout')
@section('content')
    {{-- ! Inicio da minha view --}}
    <div class="row mt-5">
        <div class="col-lg-6 col-xl-12 col-xxl-4 h-100">
            {{-- <div class="d-flex mb-4"><span class="fa-stack me-2 ms-n1"><i class="fas fa-circle fa-stack-2x text-300"></i><i
                        class="fa-inverse fa-stack-1x text-primary fas fa-spinner"></i></span>
                <div class="col">
                    <h5 class="mb-0 text-primary position-relative"><span class="bg-200 dark__bg-1100 pe-3">Inscricao de
                            Alunos</span><span
                            class="border position-absolute top-50 translate-middle-y w-100 start-0 z-n1"></span></h5>
                    </div>
            </div> --}}
            <div class="card theme-wizard mb-5">
                <div class="card-header bg-body-tertiary pt-3 pb-2">
                    <ul class="nav justify-content-between nav-wizard">
                        <li class="nav-item"><a class="nav-link active fw-semi-bold" href="#bootstrap-wizard-tab1"
                                data-bs-toggle="tab" data-wizard-step="1"><span class="nav-item-circle-parent"><span
                                        class="nav-item-circle"><span class="fas fa-lock"></span></span></span><span
                                    class="d-none d-md-block mt-1 fs-10">Acesso</span></a></li>
                        <li class="nav-item"><a class="nav-link fw-semi-bold" href="#bootstrap-wizard-tab2"
                                data-bs-toggle="tab" data-wizard-step="2"><span class="nav-item-circle-parent"><span
                                        class="nav-item-circle"><span class="fas fa-user"></span></span></span><span
                                    class="d-none d-md-block mt-1 fs-10">Dados Pessoais</span></a></li>
                        <li class="nav-item"><a class="nav-link fw-semi-bold" href="#bootstrap-wizard-tab4"
                                data-bs-toggle="tab" data-wizard-step="4"><span class="nav-item-circle-parent"><span
                                        class="nav-item-circle"><span class="fas fa-thumbs-up"></span></span></span><span
                                    class="d-none d-md-block mt-1 fs-10">Confirmacao</span></a></li>
                    </ul>
                </div>
                <form action="{{ route('student.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body py-4">
                        <div class="tab-content">

                            {{-- !Inicio do formulario --}}

                            <div class="tab-pane active px-sm-3 px-md-2" role="tabpanel"
                                aria-labelledby="bootstrap-wizard-tab1" id="bootstrap-wizard-tab1">
                                <div class="mb-3">
                                    <label class="form-label" for="bootstrap-wizard-wizard-name">Nome</label>
                                    <input class="form-control @error('name') is-invalid @enderror" type="text"
                                        name="name" placeholder="Picardo" value="{{ old('name') }}"
                                        id="bootstrap-wizard-wizard-name" />
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="bootstrap-wizard-wizard-name">Apelido</label>
                                    <input class="form-control @error('Surname') is-invalid @enderror" type="text"
                                        name="Surname" placeholder="Olindo" value="{{ old('Surname') }}"
                                        id="bootstrap-wizard-wizard-name" />
                                    @error('Surname')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="bootstrap-wizard-wizard-email">Email*</label>
                                    <input class="form-control @error('email') is-invalid @enderror" type="email"
                                        name="email" placeholder="picardo@gmail.com" value="{{ old('email') }}"
                                        required="required" id="bootstrap-wizard-wizard-email" />
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                {{-- !Inicio do input de senha --}}
                                <input name="password" class="form-control" id="email3" type="hidden"
                                    value="aluno123" />
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <input name="password_confirmation" class="form-control" id="email3" type="hidden"
                                    value="aluno123" />
                                @error('password_confirmation')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                {{-- !Fim do input de senha --}}
                            </div>

                            {{-- Segunda Seção --}}
                            <div class="tab-pane px-sm-3 px-md-2" role="tabpanel" aria-labelledby="bootstrap-wizard-tab2"
                                id="bootstrap-wizard-tab2">
                                <div class="mb-3">
                                    <label class="form-label" for="bootstrap-wizard-wizard-phone">Contacto</label>
                                    <input class="form-control @error('contact') is-invalid @enderror" type="text"
                                        name="contact" placeholder="855686307" value="{{ old('contact') }}"
                                        id="bootstrap-wizard-wizard-phone" />
                                    @error('contact')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="bootstrap-wizard-wizard-datepicker">Date of
                                        Birth</label>
                                    <input class="form-control @error('Date_of_birth') is-invalid @enderror"
                                        type="date" name="Date_of_birth" value="{{ old('Date_of_birth') }}"
                                        id="bootstrap-wizard-wizard-datepicker" />
                                    @error('Date_of_birth')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="bootstrap-wizard-wizard-phone">Numero de BI</label>
                                    <input class="form-control @error('bi') is-invalid @enderror" type="text"
                                        name="bi" placeholder="EX: 083902130290380213BM"
                                        value="{{ old('bi') }}" id="bootstrap-wizard-wizard-phone" />
                                    @error('bi')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            {{-- Outra Seção --}}
                            <div class="tab-pane text-center px-sm-3 px-md-2" role="tabpanel"
                                aria-labelledby="bootstrap-wizard-tab4" id="bootstrap-wizard-tab4">
                                <div class="mb-3">
                                    <label class="form-label" for="bootstrap-wizard-gender">Curso a se inscrever</label>
                                    <select class="form-select @error('id_course') is-invalid @enderror" name="id_course"
                                        id="bootstrap-wizard-gender">
                                        <option value="">Seleccione o Curso...</option>
                                        @foreach ($courses as $course)
                                            <option value="{{ $course->id }}"
                                                {{ old('id_course') == $course->id ? 'selected' : '' }}>
                                                {{ $course->Course_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('id_course')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <input type="hidden" name="user_type" value="Users">
                                <input type="hidden" name="status" value="Activo">
                                <button type="submit" name="submit" class="btn btn-primary px-5 my-3"
                                    style="text-align: none">Inscrever Aluno</button>
                            </div>

                            {{-- ! Fim das seccoes --}}

                        </div>
                    </div>
                </form>
            </div>
        </div>

        {{-- *Inicio da outra coluna --}}
        <div class="col-lg-6 col-xl-12 col-xxl-8 h-100">
            <div class="d-flex mb-4"><span class="fa-stack me-2 ms-n1"><i
                        class="fas fa-circle fa-stack-2x text-300"></i><i
                        class="fa-inverse fa-stack-1x text-primary fas fa-spinner"></i></span>
                <div class="col">
                    <h5 class="mb-0 text-primary position-relative"><span class="bg-200 dark__bg-1100 pe-3">Todos
                            Alunos</span><span
                            class="border position-absolute top-50 translate-middle-y w-100 start-0 z-n1"></span></h5>
                    {{-- <p class="mb-0">You can easily show your stats content by using these cards.</p> --}}
                </div>
            </div>
            {{-- *inicio da tabela --}}
            <div class="card mb-3" id="customersTable"
                data-list='{"valueNames":["name","email","phone","address","joined"],"page":10,"pagination":true}'>
                <div class="card-header">
                    <div class="card-body p-0">
                        <div class="table-responsive scrollbar">
                            <table class="table table-sm table-striped fs-10 mb-0 overflow-hidden">
                                <thead class="bg-200">
                                    <tr>
                                        <th class="text-900 sort pe-1 align-middle white-space-nowrap" data-sort="name">
                                            Nome Completo</th>
                                        <th class="text-900 sort pe-1 align-middle white-space-nowrap" data-sort="email">
                                            Email
                                        </th>
                                        <th class="text-900 sort pe-1 align-middle white-space-nowrap" data-sort="phone">
                                            Contacto
                                        </th>
                                        <th class="text-900 sort pe-1 align-middle white-space-nowrap" data-sort="joined">
                                            Status
                                        </th>
                                        <th class="align-middle no-sort"></th>
                                    </tr>
                                </thead>
                                <tbody class="list" id="table-customers-body">
                                    @foreach ($users as $trainer)
                                        <tr class="btn-reveal-trigger">
                                            <td class="email align-middle py-2">{{ $trainer->name }}
                                                {{ $trainer->Surname }}</td>
                                            <td class="email align-middle py-2">{{ $trainer->email }}</td>
                                            <td class="phone align-middle white-space-nowrap py-2">{{ $trainer->contact }}
                                            </td>
                                            <td class="address align-middle white-space-nowrap ps-5 py-2">
                                                {{-- ! Inicio da condicao de verificacao de status de usuario --}}
                                                @if ($trainer->status == 'Activo')
                                                    <small
                                                        class="badge rounded badge-subtle-success false">{{ $trainer->status }}</small>
                                                @endif

                                                @if ($trainer->status == 'Pendente')
                                                    <small
                                                        class="badge rounded badge-subtle-danger false">{{ $trainer->status }}</small>
                                                @endif
                                                {{-- ! Fim da Verificacao de Status do usuario --}}
                                            </td>
                                            <td class="align-middle white-space-nowrap py-2 text-end">
                                                <div class="dropdown font-sans-serif position-static"><button
                                                        class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal"
                                                        type="button" id="customer-dropdown-1" data-bs-toggle="dropdown"
                                                        data-boundary="window" aria-haspopup="true"
                                                        aria-expanded="false"><span
                                                            class="fas fa-ellipsis-h fs-10"></span></button>
                                                    <div class="dropdown-menu dropdown-menu-end border py-0"
                                                        aria-labelledby="customer-dropdown-1">
                                                        <div class="py-2"><a class="dropdown-item"
                                                                href="#staticBackdrop" data-bs-toggle="modal"
                                                                data-bs-target="#staticBackdrop{{ $trainer->id }}">Edit</a><a
                                                                class="dropdown-item text-danger"
                                                                href="{{ route('student.delete', ['id' => $trainer->id]) }}">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        {{-- Inicio do modal de Editat --}}
                                        <div class="modal fade" id="staticBackdrop{{ $trainer->id }}"
                                            data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1"
                                            aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg mt-6" role="document">
                                                <div class="modal-content border-0">
                                                    <div class="position-absolute top-0 end-0 mt-3 me-3 z-1"><button
                                                            class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                                                            data-bs-dismiss="modal" aria-label="Close"></button></div>
                                                    <div class="modal-body p-0">
                                                        <div class="rounded-top-3 bg-body-tertiary py-3 ps-4 pe-6">
                                                            <h4 class="mb-1" id="staticBackdropLabel">Editar os dados do
                                                                formador
                                                            </h4>
                                                            <p class="fs-11 mb-0">Adicionado por <a
                                                                    class="link-600 fw-semi-bold"
                                                                    href="#!">{{ Auth::user()->name }}</a></p>
                                                        </div><br>
                                                        <div class="p-4" style="margin-top: -3rem;">
                                                            <form
                                                                action="{{ route('student.update', ['id' => $trainer->id]) }}"
                                                                method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="row">

                                                                    <div class="col-lg-6"> <label class="form-label"
                                                                            for="first-name">Primeiro Nome</label><input
                                                                            name="name" class="form-control"
                                                                            id="first-name" type="text"
                                                                            value="{{ $trainer->name }}" />
                                                                    </div>
                                                                    <div class="col-lg-6"> <label class="form-label"
                                                                            for="last-name">Apelido</label><input
                                                                            name="Surname" class="form-control"
                                                                            id="last-name" type="text"
                                                                            value="{{ $trainer->Surname }}" /></div>
                                                                    <div class="col-lg-6"> <label class="form-label"
                                                                            for="email1">Email</label><input
                                                                            name="email" value="{{ $trainer->email }}"
                                                                            class="form-control" id="email1"
                                                                            type="text" /></div>
                                                                    <div class="col-lg-6"> <label class="form-label"
                                                                            for="email2">Contacto</label><input
                                                                            class="form-control" id="email2"
                                                                            type="text"
                                                                            value="{{ $trainer->contact }}"
                                                                            name="contact" />
                                                                    </div>
                                                                    <div class="col-lg-6"> <label class="form-label"
                                                                            for="email2">Numero de BI</label><input
                                                                            class="form-control" id="email2"
                                                                            type="text" name="bi"
                                                                            value="{{ $trainer->bi }}" /></div>
                                                                    <div class="col-lg-6"> <label class="form-label"
                                                                            for="email2">Data
                                                                            de Nascimento</label><input
                                                                            class="form-control" id="email2"
                                                                            type="date"
                                                                            value="{{ $trainer->Date_of_birth }}"
                                                                            name="Date_of_birth" />
                                                                    </div>

                                                                   
                                                                    {{-- Inicio dos inputs type hidden --}}
                                                                    <input name="password" class="form-control" id="email3" type="hidden"
                                                                        value="aluno123" />
                                                                    @error('password')
                                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                                    @enderror
                                                                    <input name="password_confirmation" class="form-control" id="email3" type="hidden"
                                                                        value="aluno123" />
                                                                    @error('password_confirmation')
                                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                                    @enderror
                                                                    <input type="hidden" name="user_type" value="Users">
                                                                    <input type="hidden" name="status" value="Activo">
                                                                    <div class="col-lg-6"> <label class="form-label"
                                                                            for="email2"></label><input
                                                                            class="form-control"
                                                                            value="{{ $trainer->id }}" id="email2"
                                                                            type="hidden" name="id" />
                                                                    </div>
                                                                    {{-- Fim dos inputs type hidden --}}

                                                                    <div class="col-12 d-flex justify-content-end"><button
                                                                            class="btn btn-primary" type="submit"
                                                                            name="submit">Actualizar Aluno
                                                                        </button></div>
                                                                </div>
                                                            </form>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Fim do modal de editar --}}
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- ! Fim da minha view --}}
@endsection
