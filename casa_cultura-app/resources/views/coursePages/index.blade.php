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
                                   name="Course_name" type="text" placeholder="Nome do Curso" required="required" /></div>
                            <div class="col-sm-6 mb-3"><label class="form-label" for="course-category">Nome do Formador<span
                                        class="text-danger">*</span></label><select class="form-select" id="course-category"
                                    name="id_user">
                                    <option>Selecione o Formador</option>
                                    @foreach ($trainers as $trainer)
                                        <option value="{{ $trainer->id }}">{{ $trainer->name }}
                                            {{ $trainer->Surname }}</option>
                                    @endforeach
                                </select></div>
                            <div class="col-12 mb-3"><label class="form-label" for="course-tags">Descrição do Curso<span
                                        class="text-danger">*</span></label>
                                <textarea name="Description" class="form-control" data-tinymce="data-tinymce" name="course-description" id="course-description"
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
                            <textarea name="Goals" class="form-control" data-tinymce="data-tinymce" name="course-description" id="course-description"
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
                                    class="form-control" name="Price" id="base-price" type="text" placeholder="" /></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sticky-sidebar top-navbar-height d-flex flex-column">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h5 class="mb-0">Faça o Upload da Imagem<span data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Add cover photo"><span
                                        class="fas fa-info-circle text-primary fs-9 ms-2"></span></span></h5>
                        </div>

                        <div class="card-body bg-body-tertiary">
                            <input class="form-control" type="file" name="Upload_file" />
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header">
                            <h5 class="mb-0">Faça o Upload do Video<span data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Add cover photo"><span
                                        class="fas fa-info-circle text-primary fs-9 ms-2"></span></span></h5>
                        </div>
                        <div class="card-body bg-body-tertiary">
                            <input class="form-control" type="file" name="Upload_video" />
                        </div>
                    </div>
                    <div class="card mb-lg-3 order-lg-0 order-1">
                        <div class="card-header py-2 d-flex flex-between-center">
                            <h5 class="mb-0">Adicione o seu Curso aqui!</h5>
                        </div>
                        <div class="card-footer py-2" id="course-publish-btn">
                            <div class="row flex-between-center g-0">
                                <div class="col-auto"><a class="btn btn-link btn-sm text-secondary fw-medium px-0"
                                        href="#!">Tela Inicial</a></div>
                                <div class="col-auto"><button style="border-radius: 0"
                                        class="btn btn-primary btn-md px-xxl-5 px-4 fw-medium" name="submit" type="submit">Adicionar
                                        Curso</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    {{-- Fim da minha pagina --}}
@endsection
