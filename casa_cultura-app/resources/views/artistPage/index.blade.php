@extends('layouts.layout')
@section('content')
    {{-- Inicio do conteudo --}}
    <div class="card mb-3" id="customersTable"
        data-list='{"valueNames":["name","email","phone","address","joined"],"page":10,"pagination":true}'>
        <div class="card-header">
            <div class="row flex-between-center">
                <div class="col-4 col-sm-auto d-flex align-items-center pe-0">
                    <h5 class="fs-9 mb-0 text-nowrap py-2 py-xl-0">Artistas</h5>
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
                    <div id="table-customers-replace-element"><a class="btn btn-falcon-default btn-sm"
                            type="button" data-bs-target="#staticBackdro" href="#staticBackdro"
                                                    data-bs-toggle="modal"><span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span><span
                                class="d-none d-sm-inline-block ms-1">New</span></a>
                            <button class="btn btn-falcon-default btn-sm" type="button"><span class="fas fa-external-link-alt"
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
                            <th class="text-900 sort pe-1 align-middle white-space-nowrap" data-sort="name">Name</th>
                            <th class="text-900 sort pe-1 align-middle white-space-nowrap" data-sort="email">Endereco</th>
                            <th class="text-900 sort pe-1 align-middle white-space-nowrap" data-sort="phone">Phone</th>
                            <th class="text-900 sort pe-1 align-middle white-space-nowrap ps-5" data-sort="address"
                                style="min-width: 200px;">Billing Address</th>
                            <th class="text-900 sort pe-1 align-middle white-space-nowrap" data-sort="joined">Actividade
                            </th>
                            <th class="align-middle no-sort"></th>
                        </tr>
                    </thead>
                    <tbody class="list" id="table-customers-body">
                        @foreach ($artists as $artist)
                            <tr class="btn-reveal-trigger">
                                
                                <td class="email align-middle py-2"><a
                                        href="mailto:emma@example.com">{{ $artist->Name }}</a></td>
                                <td class="phone align-middle white-space-nowrap py-2"><a
                                        href="tel:2122288403">{{ $artist->Address }}</a></td>
                                <td class="address align-middle white-space-nowrap ps-5 py-2">{{ $artist->Cell_number }}</td>
                                <td class="joined align-middle py-2">{{ $artist->Activity }}</td>
                                <td class="align-middle white-space-nowrap py-2 text-end">
                                    <div class="dropdown font-sans-serif position-static"><button
                                            class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button"
                                            id="customer-dropdown-1" data-bs-toggle="dropdown" data-boundary="window"
                                            aria-haspopup="true" aria-expanded="false"><span
                                                class="fas fa-ellipsis-h fs-10"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end border py-0"
                                            aria-labelledby="customer-dropdown-1">
                                            <div class="py-2"><a class="dropdown-item" href="#staticBackdrop"
                                                    data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$artist->id}}">Edit</a><a
                                                    class="dropdown-item text-danger"
                                                    href="{{ route('trainer.delete', ['id' => $artist->id]) }}">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            {{--Inicio do modal para adicionar o Artista--}}
                            <div class="modal fade" id="staticBackdro" data-bs-keyboard="false"
                                data-bs-backdrop="static" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-lg mt-6" role="document">
                                    <div class="modal-content border-0">
                                        <div class="position-absolute top-0 end-0 mt-3 me-3 z-1"><button
                                                class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                                                data-bs-dismiss="modal" aria-label="Close"></button></div>
                                        <div class="modal-body p-0">
                                            <div class="rounded-top-3 bg-body-tertiary py-3 ps-4 pe-6">
                                                <h4 class="mb-1" id="staticBackdropLabel">Editar os dados do formador
                                                </h4>
                                                <p class="fs-11 mb-0">Adicionado por <a class="link-600 fw-semi-bold"
                                                        href="#!">{{ Auth::user()->name }}</a></p>
                                            </div>
                                            <div class="p-4" style="margin-top: -3rem;">
                                                <form action="{{route('user.update',['id'=>$artist->id])}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-12 d-flex justify-content-center mb-4">
                                                            <div
                                                                class="avatar avatar-5xl avatar-profile shadow-sm img-thumbnail rounded-circle">
                                                                <div
                                                                    class="h-100 w-100 rounded-circle overflow-hidden position-relative">
                                                                    <!-- Imagem Atual -->
                                                                    <img src="{{ asset('storage/' . $artist->upload_file) }}"
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
                                                        <div class="col-lg-6"> <label class="form-label"
                                                                for="first-name">Primeiro Nome</label><input
                                                                name="name" class="form-control" id="first-name"
                                                                type="text" value="{{$artist->name}}" /></div>
                                                        <div class="col-lg-6"> <label class="form-label"
                                                                for="last-name">Apelido</label><input name="Surname"
                                                                class="form-control" id="last-name" type="text"
                                                                value="{{$artist->Surname}}" /></div>
                                                        <div class="col-lg-6"> <label class="form-label"
                                                                for="email1">Email</label><input name="email"
                                                                value="{{$artist->email}}" class="form-control"
                                                                id="email1" type="text" /></div>
                                                        <div class="col-lg-6"> <label class="form-label"
                                                                for="email2">Contacto</label><input class="form-control"
                                                                id="email2" type="text" value="{{$artist->contact}}"
                                                                name="contact" />
                                                        </div>
                                                        <div class="col-lg-6"><label class="form-label"
                                                                for="email3">Password</label><input name="password"
                                                                placeholder="Digite a Sua Senha" class="form-control"
                                                                id="email3" type="password" />
                                                        </div>
                                                        <div class="col-lg-6"><label class="form-label"
                                                                for="email3">Password de Confirmacao</label><input
                                                                name="password_confirmation"
                                                                placeholder="Digite a Sua Senha" class="form-control"
                                                                id="email3" type="password" />
                                                        </div>

                                                        <div class="col-lg-6"> <label class="form-label"
                                                                for="email2">Numero de BI</label><input
                                                                class="form-control" id="email2" type="text"
                                                                name="bi" value="{{$artist->bi}}" /></div>
                                                        <div class="col-lg-6"> <label class="form-label"
                                                                for="email2">Data
                                                                de Nascimento</label><input class="form-control"
                                                                id="email2" type="date" value="{{$artist->Date_of_birth}}" name="Date_of_birth" />
                                                        </div>
                                                        <div class="col-lg-6"> <label class="form-label"
                                                                for="email2">Residencia</label><input
                                                                class="form-control" id="email2" type="text"
                                                                value="{{$artist->place}}" name="place" /></div>
                                                        <div class="col-lg-6"> <label class="form-label"
                                                                for="email2">Cargo</label><input class="form-control"
                                                                id="email2" type="text"
                                                                value="{{$artist->function}}" name="function" /></div>

                                                        {{--Inicio dos inputs type hidden--}}
                                                        <div class="col-lg-6"> <label class="form-label"
                                                                for="email2"></label><input class="form-control"
                                                                value="Trainer" id="email2" type="hidden"
                                                                name="user_type" />
                                                        </div>
                                                        <div class="col-lg-6"> <label class="form-label"
                                                                for="email2"></label><input class="form-control"
                                                                value="{{$artist->id}}" id="email2" type="hidden"
                                                                name="id" />
                                                        </div>
                                                        {{--Fim dos inputs type hidden--}}

                                                        <div class="col-12 d-flex justify-content-end"><button
                                                                class="btn btn-primary" type="submit">Actualizar Formador
                                                            </button></div>
                                                    </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- inicio do modal da parte de editar --}}
                            <div class="modal fade" id="staticBackdrop{{$artist->id}}" data-bs-keyboard="false"
                                data-bs-backdrop="static" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-lg mt-6" role="document">
                                    <div class="modal-content border-0">
                                        <div class="position-absolute top-0 end-0 mt-3 me-3 z-1"><button
                                                class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                                                data-bs-dismiss="modal" aria-label="Close"></button></div>
                                        <div class="modal-body p-0">
                                            <div class="rounded-top-3 bg-body-tertiary py-3 ps-4 pe-6">
                                                <h4 class="mb-1" id="staticBackdropLabel">Editar os dados do formador
                                                </h4>
                                                <p class="fs-11 mb-0">Adicionado por <a class="link-600 fw-semi-bold"
                                                        href="#!">{{ Auth::user()->name }}</a></p>
                                            </div>
                                            <div class="p-4" style="margin-top: -3rem;">
                                                <form action="{{route('user.update',['id'=>$artist->id])}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-12 d-flex justify-content-center mb-4">
                                                            <div
                                                                class="avatar avatar-5xl avatar-profile shadow-sm img-thumbnail rounded-circle">
                                                                <div
                                                                    class="h-100 w-100 rounded-circle overflow-hidden position-relative">
                                                                    <!-- Imagem Atual -->
                                                                    <img src="{{ asset('storage/' . $artist->upload_file) }}"
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
                                                        <div class="col-lg-6"> <label class="form-label"
                                                                for="first-name">Primeiro Nome</label><input
                                                                name="name" class="form-control" id="first-name"
                                                                type="text" value="{{$artist->name}}" /></div>
                                                        <div class="col-lg-6"> <label class="form-label"
                                                                for="last-name">Apelido</label><input name="Surname"
                                                                class="form-control" id="last-name" type="text"
                                                                value="{{$artist->Surname}}" /></div>
                                                        <div class="col-lg-6"> <label class="form-label"
                                                                for="email1">Email</label><input name="email"
                                                                value="{{$artist->email}}" class="form-control"
                                                                id="email1" type="text" /></div>
                                                        <div class="col-lg-6"> <label class="form-label"
                                                                for="email2">Contacto</label><input class="form-control"
                                                                id="email2" type="text" value="{{$artist->contact}}"
                                                                name="contact" />
                                                        </div>
                                                        <div class="col-lg-6"><label class="form-label"
                                                                for="email3">Password</label><input name="password"
                                                                placeholder="Digite a Sua Senha" class="form-control"
                                                                id="email3" type="password" />
                                                        </div>
                                                        <div class="col-lg-6"><label class="form-label"
                                                                for="email3">Password de Confirmacao</label><input
                                                                name="password_confirmation"
                                                                placeholder="Digite a Sua Senha" class="form-control"
                                                                id="email3" type="password" />
                                                        </div>

                                                        <div class="col-lg-6"> <label class="form-label"
                                                                for="email2">Numero de BI</label><input
                                                                class="form-control" id="email2" type="text"
                                                                name="bi" value="{{$artist->bi}}" /></div>
                                                        <div class="col-lg-6"> <label class="form-label"
                                                                for="email2">Data
                                                                de Nascimento</label><input class="form-control"
                                                                id="email2" type="date" value="{{$artist->Date_of_birth}}" name="Date_of_birth" />
                                                        </div>
                                                        <div class="col-lg-6"> <label class="form-label"
                                                                for="email2">Residencia</label><input
                                                                class="form-control" id="email2" type="text"
                                                                value="{{$artist->place}}" name="place" /></div>
                                                        <div class="col-lg-6"> <label class="form-label"
                                                                for="email2">Cargo</label><input class="form-control"
                                                                id="email2" type="text"
                                                                value="{{$artist->function}}" name="function" /></div>

                                                        {{--Inicio dos inputs type hidden--}}
                                                        <div class="col-lg-6"> <label class="form-label"
                                                                for="email2"></label><input class="form-control"
                                                                value="Trainer" id="email2" type="hidden"
                                                                name="user_type" />
                                                        </div>
                                                        <div class="col-lg-6"> <label class="form-label"
                                                                for="email2"></label><input class="form-control"
                                                                value="{{$artist->id}}" id="email2" type="hidden"
                                                                name="id" />
                                                        </div>
                                                        {{--Fim dos inputs type hidden--}}

                                                        <div class="col-12 d-flex justify-content-end"><button
                                                                class="btn btn-primary" type="submit">Actualizar Formador
                                                            </button></div>
                                                    </div>
                                            </div>
                                            </form>
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
