@extends('layouts.layout')
@section('content')
    {{-- Inicio do conteudo --}}
    <div class="card mb-3" id="customersTable"
        data-list='{"valueNames":["name","email","phone","address","joined"],"page":10,"pagination":true}'>
        <div class="card-header">
            <div class="row flex-between-center">
                <div class="col-4 col-sm-auto d-flex align-items-center pe-0">
                    <h5 class="fs-9 mb-0 text-nowrap py-2 py-xl-0">Formadores</h5>
                </div>
                <div class="col-8 col-sm-auto text-end ps-2">
                    <div class="d-none" id="table-customers-actions">
                        <div class="d-flex"><select class="form-select form-select-sm" aria-label="Bulk actions">
                                <option selected="">Bulk actions</option>
                                <option value="Refund">Refund</option>
                                <option value="Delete">Delete</option>
                                <option value="Archive">Archive</option>
                            </select><button class="btn btn-falcon-default btn-sm ms-2" type="button">Apply</button></div>
                    </div>
                    <div id="table-customers-replace-element"><button class="btn btn-falcon-default btn-sm"
                            type="button"><span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span><span
                                class="d-none d-sm-inline-block ms-1">New</span></button><button
                            class="btn btn-falcon-default btn-sm mx-2" type="button"><span class="fas fa-filter"
                                data-fa-transform="shrink-3 down-2"></span><span
                                class="d-none d-sm-inline-block ms-1">Filter</span></button><button
                            class="btn btn-falcon-default btn-sm" type="button"><span class="fas fa-external-link-alt"
                                data-fa-transform="shrink-3 down-2"></span><span
                                class="d-none d-sm-inline-block ms-1">Export</span></button></div>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive scrollbar">
                <table class="table table-sm table-striped fs-10 mb-0 overflow-hidden">
                    <thead class="bg-200">
                        <tr>
                            <th>
                                <div class="form-check fs-9 mb-0 d-flex align-items-center"><input class="form-check-input"
                                        id="checkbox-bulk-customers-select" type="checkbox"
                                        data-bulk-select='{"body":"table-customers-body","actions":"table-customers-actions","replacedElement":"table-customers-replace-element"}' />
                                </div>
                            </th>
                            <th class="text-900 sort pe-1 align-middle white-space-nowrap" data-sort="name">Name</th>
                            <th class="text-900 sort pe-1 align-middle white-space-nowrap" data-sort="email">Email</th>
                            <th class="text-900 sort pe-1 align-middle white-space-nowrap" data-sort="phone">Phone</th>
                            <th class="text-900 sort pe-1 align-middle white-space-nowrap ps-5" data-sort="address"
                                style="min-width: 200px;">Billing Address</th>
                            <th class="text-900 sort pe-1 align-middle white-space-nowrap" data-sort="joined">Actividade
                            </th>
                            <th class="align-middle no-sort"></th>
                        </tr>
                    </thead>
                    <tbody class="list" id="table-customers-body">
                        @foreach ($trainers as $trainer)
                            <tr class="btn-reveal-trigger">
                                <td class="align-middle py-2" style="width: 28px;">
                                    <div class="form-check fs-9 mb-0 d-flex align-items-center"><input
                                            class="form-check-input" type="checkbox" id="customer-1"
                                            data-bulk-select-row="data-bulk-select-row" /></div>
                                </td>
                                <td class="name align-middle {{-- white-space-nowrap --}} py-2"><a href="customer-details.html">
                                        <div class="d-flex d-flex align-items-center">
                                            <div class="avatar avatar-xl me-2">
                                                <img class="rounded-circle"
                                                    src="{{ asset('storage/' . $trainer->upload_file) }}" alt="" />
                                            </div>
                                            <div class="flex-1">
                                                <h5 class="mb-0 fs-10">{{ $trainer->name }}</h5>
                                            </div>
                                        </div>
                                    </a>
                                </td>
                                <td class="email align-middle py-2"><a
                                        href="mailto:emma@example.com">{{ $trainer->email }}</a></td>
                                <td class="phone align-middle white-space-nowrap py-2"><a
                                        href="tel:2122288403">{{ $trainer->contact }}</a></td>
                                <td class="address align-middle white-space-nowrap ps-5 py-2">{{ $trainer->place }}</td>
                                <td class="joined align-middle py-2">{{ $trainer->function }}</td>
                                <td class="align-middle white-space-nowrap py-2 text-end">
                                    <div class="dropdown font-sans-serif position-static"><button
                                            class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button"
                                            id="customer-dropdown-1" data-bs-toggle="dropdown" data-boundary="window"
                                            aria-haspopup="true" aria-expanded="false"><span
                                                class="fas fa-ellipsis-h fs-10"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end border py-0"
                                            aria-labelledby="customer-dropdown-1">
                                            <div class="py-2"><a class="dropdown-item" href="#staticBackdrop"
                                                    data-bs-toggle="modal" data-bs-target="#staticBackdrop">Edit</a><a
                                                    class="dropdown-item text-danger"
                                                    href="{{ route('trainer.delete', ['id' => $trainer->id]) }}">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            {{-- Início do modal da parte de editar --}}
                            <div class="modal fade" id="staticBackdrop" data-bs-keyboard="false"
                                data-bs-backdrop="static" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-lg mt-6" role="document">
                                    <div class="modal-content border-0">
                                        <!-- Botão de fechar -->
                                        <div class="position-absolute top-0 end-0 mt-3 me-3 z-1">
                                            <button
                                                class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body p-0">
                                            <!-- Cabeçalho do Modal -->
                                            <div class="rounded-top-3 bg-body-tertiary py-3 ps-4 pe-6">
                                                <h4 class="mb-1" id="staticBackdropLabel">Editar os dados do formador
                                                </h4>
                                                <p class="fs-11 mb-0">Adicionado por <a class="link-600 fw-semi-bold"
                                                        href="#!">{{ Auth::user()->name }}</a></p>
                                            </div>
                                            <div class="p-4">
                                                <!-- Início do Formulário -->
                                                <form action="{{ route('users.update', $user->id) }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="row">
                                                        <!-- Input de Imagem no Topo -->
                                                        <div class="col-12 d-flex justify-content-center mb-4">
                                                            <div
                                                                class="avatar avatar-5xl avatar-profile shadow-sm img-thumbnail rounded-circle">
                                                                <div
                                                                    class="h-100 w-100 rounded-circle overflow-hidden position-relative">
                                                                    <!-- Imagem Atual -->
                                                                    <img src="{{ asset('storage/' . $user->upload_file) }}"
                                                                        width="200" alt="Foto do Formador" />
                                                                    <!-- Input de Arquivo (Oculto) -->
                                                                    <input name="upload_file" class="d-none"
                                                                        id="profile-image" type="file"
                                                                        accept="image/*" />
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

                                                        <!-- Primeiro Nome -->
                                                        <div class="col-lg-6">
                                                            <label class="form-label" for="first-name">Primeiro
                                                                Nome</label>
                                                            <input name="name"
                                                                class="form-control @error('name') is-invalid @enderror"
                                                                id="first-name" type="text"
                                                                placeholder="Digite o Seu Nome"
                                                                value="{{ old('name', $user->name) }}" required />
                                                            @error('name')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>

                                                        <!-- Apelido -->
                                                        <div class="col-lg-6">
                                                            <label class="form-label" for="last-name">Apelido</label>
                                                            <input name="Surname"
                                                                class="form-control @error('Surname') is-invalid @enderror"
                                                                id="last-name" type="text"
                                                                placeholder="Digite o seu apelido"
                                                                value="{{ old('Surname', $user->Surname) }}" />
                                                            @error('Surname')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>

                                                        <!-- Email -->
                                                        <div class="col-lg-6">
                                                            <label class="form-label" for="email">Email</label>
                                                            <input name="email" placeholder="mauropeniel@gmail.com"
                                                                class="form-control @error('email') is-invalid @enderror"
                                                                id="email" type="email"
                                                                value="{{ old('email', $user->email) }}" required />
                                                            @error('email')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>

                                                        <!-- Contacto -->
                                                        <div class="col-lg-6">
                                                            <label class="form-label" for="contact">Contacto</label>
                                                            <input
                                                                class="form-control @error('contact') is-invalid @enderror"
                                                                id="contact" type="text" name="contact"
                                                                placeholder="258 123 456"
                                                                value="{{ old('contact', $user->contact) }}" />
                                                            @error('contact')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>

                                                        <!-- Password -->
                                                        <div class="col-lg-6">
                                                            <label class="form-label" for="password">Password</label>
                                                            <input name="password" placeholder="Digite a Sua Senha"
                                                                class="form-control @error('password') is-invalid @enderror"
                                                                id="password" type="password" />
                                                            @error('password')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>

                                                        <!-- Password de Confirmação -->
                                                        <div class="col-lg-6">
                                                            <label class="form-label" for="password_confirmation">Password
                                                                de Confirmação</label>
                                                            <input name="password_confirmation"
                                                                placeholder="Digite a Sua Senha"
                                                                class="form-control @error('password_confirmation') is-invalid @enderror"
                                                                id="password_confirmation" type="password" />
                                                            @error('password_confirmation')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>

                                                        <!-- Número de BI -->
                                                        <div class="col-lg-6">
                                                            <label class="form-label" for="bi">Número de BI</label>
                                                            <input class="form-control @error('bi') is-invalid @enderror"
                                                                id="bi" type="text" name="bi"
                                                                placeholder="0290290927329BS"
                                                                value="{{ old('bi', $user->bi) }}" />
                                                            @error('bi')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>

                                                        <!-- Data de Nascimento -->
                                                        <div class="col-lg-6">
                                                            <label class="form-label" for="Date_of_birth">Data de
                                                                Nascimento</label>
                                                            <input
                                                                class="form-control @error('Date_of_birth') is-invalid @enderror"
                                                                id="Date_of_birth" type="date" name="Date_of_birth"
                                                                value="{{ old('Date_of_birth', $user->Date_of_birth) }}" />
                                                            @error('Date_of_birth')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>

                                                        <!-- Residência -->
                                                        <div class="col-lg-6">
                                                            <label class="form-label" for="place">Residência</label>
                                                            <input
                                                                class="form-control @error('place') is-invalid @enderror"
                                                                id="place" type="text"
                                                                placeholder="Local de Residência" name="place"
                                                                value="{{ old('place', $user->place) }}" />
                                                            @error('place')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>

                                                        <!-- Cargo -->
                                                        <div class="col-lg-6">
                                                            <label class="form-label" for="function">Cargo</label>
                                                            <input
                                                                class="form-control @error('function') is-invalid @enderror"
                                                                id="function" type="text"
                                                                placeholder="Digite o seu cargo" name="function"
                                                                value="{{ old('function', $user->function) }}" />
                                                            @error('function')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>

                                                        <!-- Tipo de Usuário (Hidden) -->
                                                        <div class="col-lg-6 d-none">
                                                            <input class="form-control" value="Trainer" id="user_type"
                                                                type="hidden" name="user_type" />
                                                        </div>

                                                        <!-- Botão de Submissão -->
                                                        <div class="col-12 d-flex justify-content-end">
                                                            <button class="btn btn-primary" type="submit">Adicionar
                                                                Formador</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!-- Fim do Formulário -->
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
        <div class="card-footer d-flex align-items-center justify-content-center"><button
                class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous"
                data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
            <ul class="pagination mb-0"></ul><button class="btn btn-sm btn-falcon-default ms-1" type="button"
                title="Next" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
        </div>
    </div>
    </div>
    {{-- Fim do conteudo --}}
@endsection
