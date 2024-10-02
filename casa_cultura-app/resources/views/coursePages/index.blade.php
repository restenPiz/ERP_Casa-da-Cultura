@extends('layouts.layout')
@section('content')
    {{-- Inicio da minha pagina --}}
    <form class="row gx-2" action="{{ route('course.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row g-lg-3 font-sans-serif">
            <div class="col-lg-8">
                <div class="card mb-3">
                    <div class="card-header">
                        <h5 class="mb-0">Informação do Curso</h5>
                    </div>
                    <div class="card-body bg-body-tertiary">
                        <div class="row gx-2">
                            <div class="col-sm-6 mb-3"><label class="form-label" for="course-name">Nome do Curso<span
                                        class="text-danger">*</span></label><input class="form-control" id="course-name"
                                    type="text" placeholder="Nome do Curso" required="required" /></div>
                            <div class="col-sm-6 mb-3"><label class="form-label" for="course-category">Nome do Formador<span
                                        class="text-danger">*</span></label><select class="form-select" id="course-category"
                                    name="course-category">
                                    <option>Selecione o Formador</option>

                                    @foreach ($trainers as $trainer)
                                        <option value="{{ $trainer->name }} {{ $trainer->Surname }}">{{ $trainer->name }}
                                            {{ $trainer->Surname }}</option>
                                    @endforeach
                                </select></div>
                            <div class="col-12 mb-3"><label class="form-label" for="course-tags">Descrição do Curso<span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" data-tinymce="data-tinymce" name="course-description" id="course-description"
                                    required="required"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 mb-lg-0">
                    <div class="card-header bg-body-tertiary">
                        <h5 class="mb-0">Objectivo do Curso</h5>
                    </div>
                    <div class="card-body"> <label class="mb-3 form-label lh-1" for="course-goal">Objectivo do Curso <span
                                class="text-danger">*</span></label>
                        <div class="position-relative mb-4 focus-actions-trigger">
                            <textarea class="form-control" data-tinymce="data-tinymce" name="course-description" id="course-description"
                                required="required"></textarea>
                            <div class="position-absolute end-0 top-50 translate-middle focus-actions"><button
                                    class="btn btn-link btn-sm p-0 text-700 me-2"><span
                                        class="fas fa-arrow-right"></span></button></div>
                        </div>

                    </div>
                </div><br>
                <div class="card mb-3 mb-lg-0">
                    <div class="card-header">
                        <h5 class="mb-0">Coloque o Preço do Curso</h5>
                    </div>
                    <div class="card-body bg-body-tertiary">
                        <div class="row gx-2">
                            <div class="col-12 mb-3"><label class="form-label" for="base-price">Preço Fixo <span
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Course regular price"><span
                                            class="fas fa-question-circle text-primary fs-10 ms-1"></span></span></label><input
                                    class="form-control" id="base-price" type="text" placeholder="" /></div>
                            <div class="col-12"><label class="form-label" for="discounted-price">Desconto <span
                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="Course discounted price"><span
                                            class="fas fa-question-circle text-primary fs-10 ms-1"></span></span></label><input
                                    class="form-control" id="discounted-price" type="text" placeholder="" /></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sticky-sidebar top-navbar-height d-flex flex-column">
                    <div class="card mb-lg-3 order-lg-0 order-1">
                        <div class="card-header py-2 d-flex flex-between-center">
                            <h5 class="mb-0">Adicione o seu Curso aqui!</h5>
                        </div>
                        <div class="card-footer py-2" id="course-publish-btn">
                            <div class="row flex-between-center g-0">
                                <div class="col-auto"><a class="btn btn-link btn-sm text-secondary fw-medium px-0"
                                        href="#!">Tela Inicial</a></div>
                                <div class="col-auto"><button style="border-radius: 0"
                                        class="btn btn-primary btn-md px-xxl-5 px-4 fw-medium" type="submit">Adicionar
                                        Curso</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header">
                            <h5 class="mb-0">Faça o Upload da Foto<span data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Add cover photo"><span
                                        class="fas fa-info-circle text-primary fs-9 ms-2"></span></span></h5>
                        </div>
                        <div class="card-body bg-body-tertiary">
                            <form class="dropzone dropzone-single p-0" data-dropzone="data-dropzone"
                                data-options='{"maxFiles":1,"acceptedFiles":"image/*"}'>
                                <div class="fallback"><input type="file" name="file" /></div>
                                <div class="dz-preview dz-preview-single">
                                    <div class="dz-preview-cover dz-complete"><img class="dz-preview-img"
                                            src="../../../assets/img/generic/image-file-2.png" alt=""
                                            data-dz-thumbnail="" /><a class="dz-remove text-danger" href="#!"
                                            data-dz-remove="data-dz-remove"><span class="fas fa-times"></span></a>
                                        <div class="dz-progress"><span class="dz-upload"
                                                data-dz-uploadprogress=""></span>
                                        </div>
                                        <div class="dz-errormessage m-1"><span
                                                data-dz-errormessage="data-dz-errormessage"></span></div>
                                    </div>
                                    <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress=""></span>
                                    </div>
                                </div>
                                <div class="dz-message fs-10" data-dz-message="data-dz-message"><img class="me-2"
                                        src="../../../assets/img/icons/cloud-upload.svg" width="20"
                                        alt="" /><span class="d-none d-lg-inline">Arraste a sua imagem
                                        aqui<br />ou,
                                    </span><span class="btn btn-link p-0 fs-10">Pesquise</span></div>
                            </form>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header">
                            <h5 class="mb-0">Faça o Upload do Video<span data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Upload preview video"><span
                                        class="fas fa-info-circle text-primary fs-9 ms-2"></span></span></h5>
                        </div>
                        <div class="card-body bg-body-tertiary">
                            <form class="dropzone dropzone-single p-0" data-dropzone="data-dropzone"
                                data-options='{"maxFiles":1,"acceptedFiles":".mp4,.mkv,.avi"}'>
                                <div class="fallback"><input type="file" accept="video/*" /></div>
                                <div class="dz-preview dz-preview-single">
                                    <div class="dz-preview-cover dz-complete"><video class="dz-preview-img"
                                            controls="controls" data-dz-thumbnail=""></video><a
                                            class="dz-remove text-danger" href="#!"
                                            data-dz-remove="data-dz-remove"><span class="fas fa-times"></span></a>
                                        <div class="dz-progress"><span class="dz-upload"
                                                data-dz-uploadprogress=""></span>
                                        </div>
                                        <div class="dz-errormessage m-1 text-center"><span
                                                data-dz-errormessage="data-dz-errormessage"></span></div>
                                    </div>
                                    <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress=""></span>
                                    </div>
                                </div>
                                <div class="dz-message fs-10" data-dz-message="data-dz-message"><img class="me-2"
                                        src="../../../assets/img/icons/cloud-upload.svg" width="20"
                                        alt="" /><span class="d-none d-lg-inline">Arraste o seu .mp4 ou .mkv
                                        ficheiro
                                        aqui<br />ou, </span><span class="btn btn-link p-0 fs-10">Pesquise</span></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    {{-- Fim da minha pagina --}}
@endsection
