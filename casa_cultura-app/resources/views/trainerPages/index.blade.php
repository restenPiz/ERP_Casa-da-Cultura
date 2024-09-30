@extends('layouts.layout')
@section('content')

    {{--Inicio do conteudo do meu app--}}
<div class="row">
            <div class="col-12">
              <div class="card mb-3 btn-reveal-trigger">
                <div class="card-header position-relative min-vh-25 mb-8">
                  <div class="cover-image">
                    <div class="bg-holder rounded-3 rounded-bottom-0" style="background-image:url(../../assets/img/generic/4.jpg);"></div><!--/.bg-holder-->
                    {{-- <input class="d-none" id="upload-cover-image" type="file" /><label class="cover-image-file-input" for="upload-cover-image"><span class="fas fa-camera me-2"></span><span>Change cover photo</span></label> --}}
                  </div>
                  <div class="avatar avatar-5xl avatar-profile shadow-sm img-thumbnail rounded-circle">
                    <div class="h-100 w-100 rounded-circle overflow-hidden position-relative"> <img src="../../assets/img/team/2.jpg" width="200" alt="" data-dz-thumbnail="data-dz-thumbnail" /><input name="upload_file" class="d-none" id="profile-image" type="file" /><label class="mb-0 overlay-icon d-flex flex-center" for="profile-image"><span class="bg-holder overlay overlay-0"></span><span class="z-1 text-white dark__text-white text-center fs-10"><span class="fas fa-camera"></span><span class="d-block">Update</span></span></label></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row g-0">
            <div class="col-lg-8 pe-lg-2">
              <div class="card mb-3">
                <div class="card-header">
                  <h5 class="mb-0">Profile Settings</h5>
                </div>
                <div class="card-body bg-body-tertiary">
                  <form class="row g-3">
                    <div class="col-lg-6"> <label class="form-label" for="first-name">Primeiro Nome</label><input name="name" class="form-control" id="first-name" type="text" placeholder="Digite o Seu Nome" /></div>
                    <div class="col-lg-6"> <label class="form-label" for="last-name">Apelido</label><input name="surname" class="form-control" id="last-name" type="text" placeholder="Digite o seu apelido" /></div>
                    <div class="col-lg-6"> <label class="form-label" for="email1">Email</label><input name="email" placeholder="mauropeniel@gmail.com" class="form-control" id="email1" type="text" /></div>
                    <div class="col-lg-6"> <label class="form-label" for="email2">Contacto</label><input class="form-control" id="email2" type="text" value="+258 " name="contact" /></div>
                    <div class="col-lg-12"><label class="form-label" for="email3">Password</label><input placeholder="Digite a Sua Senha" class="form-control" id="email3" type="password"/></div>
                    
                    <div class="col-lg-12"> <label class="form-label" for="email2">Numero de BI</label><input class="form-control" id="email2" type="text" name="bi" placeholder="0290290927329BS"/></div>
                    <div class="col-lg-6"> <label class="form-label" for="email2">Residencia</label><input class="form-control" id="email2" type="text" placeholder="Local de Residencia" name="place" /></div>
                    <div class="col-lg-6"> <label class="form-label" for="email2">Cargo</label><input class="form-control" id="email2" type="text" placeholder="Digite o seu cargo" name="function" /></div>
                    <div class="col-lg-6"> <label class="form-label" for="email2"></label><input class="form-control" value="trainer" id="email2" type="hidden" name="user_type" /></div>
                    <div class="col-12 d-flex justify-content-end"><button class="btn btn-primary" type="submit">Adicionar Formador </button></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-4 ps-lg-2">
              <div class="sticky-sidebar">
                <div class="card mb-3 overflow-hidden">
                  <div class="card-header">
                    <h5 class="mb-0">Account Settings</h5>
                  </div>
                  <div class="card-body bg-body-tertiary">
                    <h6 class="fw-bold">Who can see your profile ?<span class="fs-11 ms-1 text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Only The group of selected people can see your profile"><span class="fas fa-question-circle"></span></span></h6>
                    <div class="ps-2">
                      <div class="form-check mb-0 lh-1"><input class="form-check-input" type="radio" value="" id="everyone" name="view-settings" /><label class="form-check-label mb-0" for="everyone">Everyone</label></div>
                      <div class="form-check mb-0 lh-1"><input class="form-check-input" type="radio" value="" id="my-followers" checked="checked" name="view-settings" /><label class="form-check-label mb-0" for="my-followers">My followers</label></div>
                      <div class="form-check mb-0 lh-1"><input class="form-check-input" type="radio" value="" id="only-me" name="view-settings" /><label class="form-check-label mb-0" for="only-me">Only me</label></div>
                    </div>
                    <h6 class="mt-2 fw-bold">Who can tag you ?<span class="fs-11 ms-1 text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Only The group of selected people can tag you"><span class="fas fa-question-circle"></span></span></h6>
                    <div class="ps-2">
                      <div class="form-check mb-0 lh-1"><input class="form-check-input" type="radio" value="" id="tag-everyone" name="tag-settings" /><label class="form-check-label mb-0" for="tag-everyone">Everyone</label></div>
                      <div class="form-check mb-0 lh-1"><input class="form-check-input" type="radio" value="" id="group-members" checked="checked" name="tag-settings" /><label class="form-check-label mb-0" for="group-members">Group Members</label></div>
                    </div>
                    <div class="border-dashed-bottom my-3"></div>
                    <div class="form-check mb-0 lh-1"><input class="form-check-input" type="checkbox" id="userSettings1" checked="checked" /><label class="form-check-label mb-0" for="userSettings1">Allow users to show your followers</label></div>
                    <div class="form-check mb-0 lh-1"><input class="form-check-input" type="checkbox" id="userSettings2" checked="checked" /><label class="form-check-label mb-0" for="userSettings2">Allow users to show your email</label></div>
                    <div class="form-check mb-0 lh-1"><input class="form-check-input" type="checkbox" id="userSettings3" /><label class="form-check-label mb-0" for="userSettings3">Allow users to show your experiences</label></div>
                    <div class="border-bottom border-dashed my-3"></div>
                    <div class="form-check form-switch mb-0 lh-1"><input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked="checked" /><label class="form-check-label mb-0" for="flexSwitchCheckDefault">Make your phone number visible</label></div>
                    <div class="form-check form-switch mb-0 lh-1"><input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" /><label class="form-check-label mb-0" for="flexSwitchCheckChecked">Allow user to follow you</label></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
    {{--Fim do conteudo do app--}}

@endsection