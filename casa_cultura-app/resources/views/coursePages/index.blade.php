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
                            <div class="col-sm-6 mb-3">
                                <label class="form-label" for="course-name">Nome do Curso<span
                                        class="text-danger">*</span></label>
                                <input class="form-control @error('Course_name') is-invalid @enderror" id="course-name" name="Course_name" type="text"
                                    placeholder="Nome do Curso" required="required" />
                                @error('Course_name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-6 mb-3">
                                <label class="form-label" for="course-category">Nome do Formador<span
                                        class="text-danger">*</span></label>
                                <select class="form-select @error('id_user') is-invalid @enderror" id="course-category" name="id_user[]">
                                    <option>Selecione o Formador</option>
                                    @foreach ($trainers as $trainer)
                                        <option value="{{ $trainer->id }}">{{ $trainer->name }} {{ $trainer->Surname }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('id_user')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label" for="course-description">Descrição do Curso<span
                                        class="text-danger">*</span></label>
                                <textarea name="Description" class="form-control @error('Description') is-invalid @enderror" id="course-description" required="required"></textarea>
                                @error('Description')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 mb-lg-0">
                    <div class="card-header">
                        <h5 class="mb-0">Coloque o Preço do Curso</h5>
                    </div>
                    <div class="card-body bg-body-tertiary">
                        <div class="row gx-2">
                            <div class="col-12 mb-3">
                                <label class="form-label" for="base-price">Preço Fixo <span data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Course regular price"><span
                                            class="fas fa-question-circle text-primary fs-10 ms-1"></span></span></label>
                                <input class="form-control @error('Price') is-invalid @enderror" name="Price" id="base-price" type="text" placeholder="" />
                                @error('Price')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
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
                            <input class="form-control @error('Upload_file') is-invalid @enderror" type="file" name="Upload_file"
                                accept=".jpg,.jpeg,.png,.gif,.docx,.pdf,.txt" />
                            @error('Upload_file')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
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
                                        class="btn btn-primary btn-md px-xxl-5 px-4 fw-medium" name="submit"
                                        type="submit">Adicionar Curso</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    {{-- Fim da minha pagina --}}
@endsection
