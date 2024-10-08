@extends('layouts.layout')
@section('content')
    {{-- Inicio do conteudo do meu app --}}
    <form action="{{route('storeUser')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card mb-3 btn-reveal-trigger">
                    <div class="card-header position-relative min-vh-25 mb-8">
                        <div class="cover-image">
                            <div class="bg-holder rounded-3 rounded-bottom-0"
                                style="background-image:url(../../assets/img/generic/4.jpg);"></div><!--/.bg-holder-->
                            {{-- <input class="d-none" id="upload-cover-image" type="file" /><label class="cover-image-file-input" for="upload-cover-image"><span class="fas fa-camera me-2"></span><span>Change cover photo</span></label> --}}
                        </div>
                        <div class="avatar avatar-5xl avatar-profile shadow-sm img-thumbnail rounded-circle">
                            <div class="h-100 w-100 rounded-circle overflow-hidden position-relative"> <img
                                    src="../../assets/dif.jpg" width="200" alt=""
                                    data-dz-thumbnail="data-dz-thumbnail" /><input name="upload_file" class="d-none"
                                    id="profile-image" type="file" /><label class="mb-0 overlay-icon d-flex flex-center"
                                    for="profile-image"><span class="bg-holder overlay overlay-0"></span><span
                                        class="z-1 text-white dark__text-white text-center fs-10"><span
                                            class="fas fa-camera"></span><span class="d-block">Adicionar Foto</span></span></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-0">
            <div class="col-lg-12 pe-lg-2">
                <div class="card mb-3">
                    <div class="card-header">
                        <h5 class="mb-0">Adicionar Funcionario</h5>
                    </div>
                    <div class="card-body bg-body-tertiary">
                        <div class="row g-3">
                            <div class="col-lg-6"> <label class="form-label" for="first-name">Primeiro Nome</label><input
                                    name="name" class="form-control" id="first-name" type="text"
                                    placeholder="Digite o Seu Nome" /></div>    
                            <div class="col-lg-6"> <label class="form-label" for="last-name">Apelido</label><input
                                    name="Surname" class="form-control" id="last-name" type="text"
                                    placeholder="Digite o seu apelido" /></div>
                            <div class="col-lg-6"> <label class="form-label" for="email1">Email</label><input
                                    name="email" placeholder="mauropeniel@gmail.com" class="form-control" id="email1"
                                    type="text" /></div>
                            <div class="col-lg-6"> <label class="form-label" for="email2">Contacto</label><input
                                    class="form-control" id="email2" type="text" value="258 " name="contact" />
                            </div>
                            <div class="col-lg-6"><label class="form-label" for="email3">Password</label><input
                            name="password" placeholder="Digite a Sua Senha" class="form-control" id="email3" type="password" />
                            </div>
                            <div class="col-lg-6"><label class="form-label" for="email3">Password de Confirmacao</label><input
                              name="password_confirmation" placeholder="Digite a Sua Senha" class="form-control" id="email3" type="password" />
                            </div>

                            <div class="col-lg-6"> <label class="form-label" for="email2">Numero de BI</label><input
                                    class="form-control" id="email2" type="text" name="bi"
                                    placeholder="0290290927329BS" /></div>
                             <div class="col-lg-6"> <label class="form-label" for="email2">Data de Nascimento</label><input
                                    class="form-control" id="email2" type="date" 
                                    name="Date_of_birth" /></div>
                            <div class="col-lg-6"> <label class="form-label" for="email2">Residencia</label><input
                                    class="form-control" id="email2" type="text" placeholder="Local de Residencia"
                                    name="place" /></div>
                            <div class="col-lg-6"> <label class="form-label" for="email2">Cargo</label><input
                                    class="form-control" id="email2" type="text" placeholder="Digite o seu cargo"
                                    name="function" /></div>
                            <div class="col-lg-6"> <label class="form-label" for="email2"></label><input
                                    class="form-control" value="Employee" id="email2" type="hidden" name="user_type" />
                            </div>
                            <div class="col-12 d-flex justify-content-end"><button class="btn btn-primary"
                                    type="submit">Adicionar Formador </button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    {{-- Fim do conteudo do app --}}
@endsection
