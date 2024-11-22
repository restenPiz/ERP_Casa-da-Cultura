@extends('layouts.layout')
@section('content')

    <div class="card mb-3">
        <div class="card-body px-xxl-0 pt-4">
            <div class="row g-0">
                <div
                    class="col-xxl-4 col-md-6 px-3 text-center border-end-md border-bottom border-bottom-xxl-0 pb-3 p-xxl-0 ps-md-0">
                    <div class="icon-circle icon-circle-primary"><span class="fs-7 fas fa-user-graduate text-primary"></span>
                    </div>
                    <h4 class="mb-1 font-sans-serif"><span class="text-700 mx-2"
                            data-countup='{"endValue":"{{$countStudent}}"}'>0</span><span class="fw-normal text-600">
                            Estudantes</span></h4>
                    {{-- <p class="fs-10 fw-semi-bold mb-0">4203 <span class="text-600 fw-normal">Ultimo Mes</span></p> --}}
                </div>
                <div
                    class="col-xxl-4 col-md-6 px-3 text-center border-end-xxl border-bottom border-bottom-xxl-0 pb-3 pt-4 pt-md-0 pe-md-0 p-xxl-0">
                    <div class="icon-circle icon-circle-info"><span class="fs-7 fas fa-chalkboard-teacher text-info"></span>
                    </div>
                    <h4 class="mb-1 font-sans-serif"><span class="text-700 mx-2"
                            data-countup='{"endValue":"{{$countTrainer}}"}'>0</span><span class="fw-normal text-600">
                            Eventos</span></h4>
                    {{-- <p class="fs-10 fw-semi-bold mb-0">301 <span class="text-600 fw-normal">Ultimo Mes</span></p> --}}
                </div>
                <div
                    class="col-xxl-4 col-md-6 px-3 text-center border-end-md border-bottom border-bottom-md-0 pb-3 pt-4 p-xxl-0 pb-md-0 ps-md-0">
                    <div class="icon-circle icon-circle-success"><span class="fs-7 fas fa-book-open text-success"></span>
                    </div>
                    <h4 class="mb-1 font-sans-serif"><span class="text-700 mx-2"
                            data-countup='{"endValue":"{{$countCourse}}"}'>0</span><span class="fw-normal text-600"> Cursos</span>
                    </h4>
                    {{-- <p class="fs-10 fw-semi-bold mb-0">2779 <span class="text-600 fw-normal">Ultimo Mes</span></p> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="row g-3">
        <div class="col-xxl-12 col-xl-9">
            <div class="card mb-3">
                <div class="card-header position-relative">
                    <h5 class="mb-0 mt-1">Cursos da Casa de Cultura</h5>
                    <div class="bg-holder d-none {{--d-md-block--}} bg-card"
                        style="background-image:url(../../../assets/img/illustrations/corner-6.png);"></div>
                </div>
            </div>
            <div class="row mb-3 g-3">
                @foreach ($courses as $course)
                    <article class="col-md-6 col-xxl-4">
                        <div class="card h-100 overflow-hidden">
                            <div class="card-body p-0 d-flex flex-column justify-content-between">
                                <div>
                                    <div class="hoverbox text-center"><a class="text-decoration-none"
                                            href="../../../assets/video/beach.mp4" data-gallery="attachment-bg"><img
                                                class="w-100 h-100 object-fit-cover"
                                                src="{{ asset('storage/' . $course->Upload_file) }}" alt="" /></a>
                                        <div class="hoverbox-content flex-center pe-none bg-holder overlay overlay-2"><img
                                                class="z-1" src="{{ asset('storage/' . $course->Upload_video) }}"
                                                width="60" alt="" /></div>
                                    </div>
                                    <div class="p-3">
                                        <h5 class="fs-9 mb-2"><a class="text-1100" href="{{route('course.detail',['id'=>$course->id])}}">
                                                {{ $course->Course_name }}</a></h5>
                                        {{-- <h5 class="fs-9">Formador: <a href="../trainer-profile.html"></a></h5> --}}
                                    </div>
                                </div>
                                <div class="row g-0 mb-3 align-items-end">
                                    <div class="col ps-3">
                                        <h4 class="fs-8 text-warning d-flex align-items-center"> <span>{{ $course->Price }}
                                                MT</span>
                                            {{-- <del class="ms-2 fs-10 text-700">$139.90</del> --}}
                                        </h4>
                                        {{-- <p class="mb-0 fs-10 text-800">92,632 Learners Enrolled</p> --}}
                                    </div>
                                    <div class="col-auto pe-3">
                                        <!-- Botão de Editar -->
                                        <a class="btn btn-sm btn-falcon-default me-2 hover-primary" href="{{route('course.edit',['id'=>$course->id])}}"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Editar">
                                            <span class="fas fa-edit" data-fa-transform="down-2"></span>
                                        </a>

                                        <!-- Botão de Eliminar -->
                                        <a class="btn btn-sm btn-falcon-default hover-danger" href="{{route('course.delete',['id'=>$course->id])}}"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar">
                                            <span class="fas fa-trash-alt" data-fa-transform="down-2"></span>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
    

@endsection
