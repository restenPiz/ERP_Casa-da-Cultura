@extends('layouts.layout')
@section('content')
    {{-- ! Inicio da minha view --}}
    <div class="row mt-5">
        <div class="col-lg-6 col-xl-12 col-xxl-4 h-100">
            <div class="d-flex mb-4"><span class="fa-stack me-2 ms-n1"><i class="fas fa-circle fa-stack-2x text-300"></i><i
                        class="fa-inverse fa-stack-1x text-primary fas fa-spinner"></i></span>
                <div class="col">
                    <h5 class="mb-0 text-primary position-relative"><span class="bg-200 dark__bg-1100 pe-3">Inscricao de
                            Alunos</span><span
                            class="border position-absolute top-50 translate-middle-y w-100 start-0 z-n1"></span></h5>
                    {{-- <p class="mb-0">You can easily show your stats content by using these cards.</p> --}}
                </div>
            </div>
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
                        {{-- <li class="nav-item"><a class="nav-link fw-semi-bold" href="#bootstrap-wizard-tab3"
                                data-bs-toggle="tab" data-wizard-step="3"><span class="nav-item-circle-parent"><span
                                        class="nav-item-circle"><span class="fas fa-dollar-sign"></span></span></span><span
                                    class="d-none d-md-block mt-1 fs-10">Outros</span></a></li> --}}
                        <li class="nav-item"><a class="nav-link fw-semi-bold" href="#bootstrap-wizard-tab4"
                                data-bs-toggle="tab" data-wizard-step="4"><span class="nav-item-circle-parent"><span
                                        class="nav-item-circle"><span class="fas fa-thumbs-up"></span></span></span><span
                                    class="d-none d-md-block mt-1 fs-10">Confirmacao</span></a></li>
                    </ul>
                </div>
                <div class="card-body py-4">
                    <div class="tab-content">

                        {{-- ? Inicio da Primeira Seccao --}}

                        <div class="tab-pane active px-sm-3 px-md-5" role="tabpanel" aria-labelledby="bootstrap-wizard-tab1"
                            id="bootstrap-wizard-tab1">
                            <form novalidate="novalidate" data-wizard-form="1">
                                <div class="mb-3"><label class="form-label"
                                        for="bootstrap-wizard-wizard-name">Nome</label><input class="form-control"
                                        type="text" name="name" placeholder="Picardo Olindo"
                                        id="bootstrap-wizard-wizard-name" /></div>
                                <div class="mb-3"><label class="form-label"
                                        for="bootstrap-wizard-wizard-email">Email*</label><input class="form-control"
                                        type="email" name="email" placeholder="picardo@gmail.com"
                                        pattern="^([a-zA-Z0-9_\.\-])+@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$"
                                        required="required" id="bootstrap-wizard-wizard-email"
                                        data-wizard-validate-email="true" />
                                </div>
                                <div class="mb-3"><label class="form-label"
                                        for="bootstrap-wizard-wizard-name">Senha</label><input class="form-control"
                                        type="password" name="password" id="bootstrap-wizard-wizard-name" /></div>
                                <div class="mb-3"><label class="form-label" for="bootstrap-wizard-wizard-name">Senha de
                                        Confirmacao</label><input class="form-control" type="password"
                                        name="password_confirmation" id="bootstrap-wizard-wizard-name" /></div>
                            </form>
                        </div>

                        {{-- ? Inicio da segunda seccao --}}

                        <div class="tab-pane px-sm-3 px-md-5" role="tabpanel" aria-labelledby="bootstrap-wizard-tab2"
                            id="bootstrap-wizard-tab2">
                            <form data-wizard-form="2">
                                <div class="mb-3">
                                    <input class="form-control" type="file" name="Upload_file"
                                        accept=".jpg,.jpeg,.png,.gif,.docx,.pdf,.txt" />
                                </div>
                                <div class="mb-3"><label class="form-label"
                                        for="bootstrap-wizard-wizard-phone">Contacto</label><input class="form-control"
                                        type="text" name="contact" placeholder="855686307"
                                        id="bootstrap-wizard-wizard-phone" /></div>
                                <div class="mb-3"><label class="form-label"
                                        for="bootstrap-wizard-wizard-datepicker">Date of Birth</label><input
                                        class="form-control datetimepicker" type="date" placeholder="dd/mm/yy"
                                        data-options='{"dateFormat":"dd/mm/yy","disableMobile":true}'
                                        id="bootstrap-wizard-wizard-datepicker" /></div>
                                    <div class="mb-3"><label class="form-label" for="bootstrap-wizard-wizard-phone">
                                        Idade</label><input class="form-control" type="text" name="age"
                                        placeholder="12 Anos" id="bootstrap-wizard-wizard-phone" /></div>
                                <div class="mb-3"><label class="form-label" for="bootstrap-wizard-wizard-phone">Numero
                                        de BI</label><input class="form-control" type="text" name="bi"
                                        placeholder="EX: 083902130290380213BM" id="bootstrap-wizard-wizard-phone" /></div>
                            </form>
                        </div>

                        {{-- ? Inicio da outra seccao --}}

                        <div class="tab-pane text-center px-sm-3 px-md-5" role="tabpanel"
                            aria-labelledby="bootstrap-wizard-tab4" id="bootstrap-wizard-tab4">
                            <div class="mb-3">
                                    <label class="form-label" for="bootstrap-wizard-gender">Curso a se inscrever</label><select
                                        class="form-select" name="gender" id="bootstrap-wizard-gender">
                                        <option value="">Seleccione o Curso...</option>
                                        @foreach ($courses as $course)
                                            <option value="{{$course->id}}">{{$course->Course_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary px-5 my-3" style="text-align: none"
                                href="wizard.html">Inscrever Aluno</button>
                        </div>

                        {{--! Fim das seccoes--}}

                    </div>
                </div>
            </div>
        </div>

        {{-- *Inicio da outra coluna --}}
        <div class="col-lg-6 col-xl-12 col-xxl-8 h-100">

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
                                            Name</th>
                                        <th class="text-900 sort pe-1 align-middle white-space-nowrap" data-sort="email">
                                            Email
                                        </th>
                                        <th class="text-900 sort pe-1 align-middle white-space-nowrap" data-sort="phone">
                                            Phone
                                        </th>
                                        <th class="text-900 sort pe-1 align-middle white-space-nowrap ps-5"
                                            data-sort="address" style="min-width: 200px;">Billing Address</th>
                                        <th class="text-900 sort pe-1 align-middle white-space-nowrap" data-sort="joined">
                                            Actividade
                                        </th>
                                        <th class="align-middle no-sort"></th>
                                    </tr>
                                </thead>
                                <tbody class="list" id="table-customers-body">
                                    @foreach ($users as $trainer)
                                        <tr class="btn-reveal-trigger">
                                            <td class="name align-middle {{-- white-space-nowrap --}} py-2"><a
                                                    href="customer-details.html">
                                                    <div class="d-flex d-flex align-items-center">
                                                        <div class="avatar avatar-xl me-2">
                                                            <img class="rounded-circle"
                                                                src="{{ asset('storage/' . $trainer->upload_file) }}"
                                                                alt="" />
                                                        </div>
                                                        <div class="flex-1">
                                                            <h5 class="mb-0 fs-10">{{ $trainer->name }}
                                                                {{ $trainer->Surname }}
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="email align-middle py-2"><a
                                                    href="mailto:emma@example.com">{{ $trainer->email }}</a></td>
                                            <td class="phone align-middle white-space-nowrap py-2"><a
                                                    href="tel:2122288403">{{ $trainer->contact }}</a></td>
                                            <td class="address align-middle white-space-nowrap ps-5 py-2">
                                                {{ $trainer->place }}
                                            </td>
                                            <td class="joined align-middle py-2">{{ $trainer->function }}</td>
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
                                                                href="{{ route('trainer.delete', ['id' => $trainer->id]) }}">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
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
