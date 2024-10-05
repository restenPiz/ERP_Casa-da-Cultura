@extends('layouts.layout')
@section('content')
    {{-- Inicio do conteudo --}}
    <div class="card overflow-hidden mb-3" data-bs-theme="light">
        <div class="card-body bg-black">
            <div class="bg-holder rounded-3"
                style="background-image:url(../../../assets/img/icons/spot-illustrations/course-details-bg.png);"></div>
            <!--/.bg-holder-->
            <div class="row">
                <div class="col-xl-8 position-relative">
                    <div class="row g-3 align-items-center">
                        <div class="col-lg-5">
                            <div class="position-relative">
                                <div class="bg-holder rounded-1 overlay"
                                    style="background-image:url(../../../assets/img/elearning/courses/course-details.png);">
                                </div><!--/.bg-holder-->
                                <a class="text-decoration-none position-relative d-block py-7 text-center"
                                    href="../../../assets/video/beach.mp4" data-gallery="attachment-bg"><img
                                        class="rounded-1" src="../../../assets/img/icons/play.svg" width="60"
                                        alt="" /></a>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <h6 class="fw-semi-bold text-400">O formador do curso e <a class="text-info"
                                    href="../trainer-profile.html">Bill Finger</a></h6>
                            <h2 class="fw-bold text-white">{{$courses->Course_name}} </h2>
                            <p class="text-white fw-semi-bold fs-10"><span class="me-1">4.8</span><span
                                    class="fa fa-star text-warning"></span><span
                                    class="fa fa-star text-warning"></span><span
                                    class="fa fa-star text-warning"></span><span
                                    class="fa fa-star text-warning"></span><span
                                    class="fa fa-star-half-alt text-warning star-icon"></span><span
                                    class="text-info ms-2">(6,899 reviews)</span></p>
                            <p class="mb-0 fw-medium text-400"> Exploring Photoshop, Illustrator, Krita, Procreate, and
                                Canva; trace the evolution of graphic design from ancient...<a class="text-info"
                                    href="#!"> See more</a></p>
                        </div>
                    </div>
                    <hr class="text-secondary text-opacity-50" />
                    <ul class="list-unstyled d-flex flex-wrap gap-3 fs-10 fw-semi-bold text-300 mt-3 mb-0">
                        <li><span class="fas fa-graduation-cap text-white me-1"> </span>7,302 Learners </li>
                        <li><span class="fas fa-user-graduate text-white me-1"> </span>91% Completion</li>
                        <li><span class="fas fa-headphones text-white me-1"> </span>English</li>
                        <li><span class="fas fa-closed-captioning text-white me-1"> </span>English</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row g-lg-3">
        <div class="col-lg-8 order-1 order-lg-0">
            
            <div class="card mb-3">
                <div class="card-header bg-body-tertiary">
                    <div class="d-flex flex-between-center">
                        <h5 class="mb-0 text-truncate">This Course Will Teach You</h5><button
                            class="btn btn-falcon-primary btn-sm" type="button"><span
                                class="d-none d-sm-inline-block align-middle me-1">Preview</span><span
                                class="fas fa-caret-right align-middle"></span></button>
                    </div>
                </div>
                <div class="card-body position-relative">
                    <div class="bg-holder bg-card d-none d-md-block"
                        style="background-image:url(../../../assets/img/icons/spot-illustrations/corner-6.png);"></div>
                    <!--/.bg-holder-->
                    <ul class="list-unstyled position-relative row g-2 fs-10 mb-0 p-0">
                        <li class="col-md-6 d-flex gap-2"><span class="fas fa-circle mt-1"
                                data-fa-transform="shrink-8"></span><span>Which tool is preferred for what kind of
                                work.</span></li>
                        <li class="col-md-6 d-flex gap-2"><span class="fas fa-circle mt-1"
                                data-fa-transform="shrink-8"></span><span>How to take criticism and make best use of
                                them.</span></li>
                        <li class="col-md-6 d-flex gap-2"><span class="fas fa-circle mt-1"
                                data-fa-transform="shrink-8"></span><span>Lessons and tasks that will give you intermidiate
                                level skills.</span></li>
                        <li class="col-md-6 d-flex gap-2"><span class="fas fa-circle mt-1"
                                data-fa-transform="shrink-8"></span><span>To build your first portfolio while completing the
                                tasks.</span></li>
                        <li class="col-md-6 d-flex gap-2"><span class="fas fa-circle mt-1"
                                data-fa-transform="shrink-8"></span><span>The Advantage and Disadvantage that comes with
                                each software.</span></li>
                        <li class="col-md-6 d-flex gap-2"><span class="fas fa-circle mt-1"
                                data-fa-transform="shrink-8"></span><span>Trials of Premium and Free programs and promo
                                codes.</span></li>
                    </ul>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header bg-body-tertiary">
                    <h5 class="mb-0">Lesson Plans</h5>
                </div>
                <div class="card-body p-0">
                    <div class="d-flex align-items-center px-x1 py-2 border-bottom border-200">
                        <div class="hoverbox me-3 my-1"><a class="text-decoration-none"
                                href="../../../assets/video/beach.mp4" data-gallery="attachment-bg">
                                <div class="bg-attachment bg-attachment-square">
                                    <div class="bg-holder"
                                        style="background-image:url(../../../assets/img/elearning/lessons/intro.png);">
                                    </div><!--/.bg-holder-->
                                </div>
                            </a>
                            <div class="hoverbox-content flex-center pe-none bg-holder overlay overlay-1 rounded">
                                <div class="position-relative fs-7 text-white" data-bs-theme="light"><span
                                        class="fas fa-play-circle"></span></div>
                            </div>
                        </div>
                        <div class="flex-1">
                            <h5 class="fs-9"><a class="text-decoration-none" href="../../../assets/video/beach.mp4"
                                    data-gallery="attachment-title">Intro</a></h5>
                            <p class="fs-10 mb-0">Introduction and Course Objectives</p>
                        </div><button class="btn btn-falcon-default btn-sm" type="button"><span
                                class="d-none d-sm-inline-block me-1">Take a Peek</span><span
                                class="fas fa-chevron-down fs-11"></span></button>
                    </div>
                    <div class="d-flex align-items-center px-x1 py-2 border-bottom border-200">
                        <div class="hoverbox me-3 my-1"><a class="text-decoration-none"
                                href="../../../assets/video/beach.mp4" data-gallery="attachment-bg">
                                <div class="bg-attachment bg-attachment-square">
                                    <div class="bg-holder"
                                        style="background-image:url(../../../assets/img/elearning/lessons/chapter1.png);">
                                    </div><!--/.bg-holder-->
                                </div>
                            </a>
                            <div class="hoverbox-content flex-center pe-none bg-holder overlay overlay-1 rounded">
                                <div class="position-relative fs-7 text-white" data-bs-theme="light"><span
                                        class="fas fa-play-circle"></span></div>
                            </div>
                        </div>
                        <div class="flex-1">
                            <h5 class="fs-9"><a class="text-decoration-none" href="../../../assets/video/beach.mp4"
                                    data-gallery="attachment-title">Chapter 1</a></h5>
                            <p class="fs-10 mb-0">Tools, nothing more, nothing less</p>
                        </div><span class="fas fa-lock fs-10 text-secondary"></span>
                    </div>
                    <div class="d-flex align-items-center px-x1 py-2 border-bottom border-200">
                        <div class="hoverbox me-3 my-1"><a class="text-decoration-none"
                                href="../../../assets/video/beach.mp4" data-gallery="attachment-bg">
                                <div class="bg-attachment bg-attachment-square">
                                    <div class="bg-holder"
                                        style="background-image:url(../../../assets/img/elearning/lessons/chapter2.png);">
                                    </div><!--/.bg-holder-->
                                </div>
                            </a>
                            <div class="hoverbox-content flex-center pe-none bg-holder overlay overlay-1 rounded">
                                <div class="position-relative fs-7 text-white" data-bs-theme="light"><span
                                        class="fas fa-play-circle"></span></div>
                            </div>
                        </div>
                        <div class="flex-1">
                            <h5 class="fs-9"><a class="text-decoration-none" href="../../../assets/video/beach.mp4"
                                    data-gallery="attachment-title">Chapter 2</a></h5>
                            <p class="fs-10 mb-0">Choosing the Right Tool</p>
                        </div><span class="fas fa-lock fs-10 text-secondary"></span>
                    </div>
                    <div class="d-flex align-items-center px-x1 py-2 border-bottom border-200">
                        <div class="hoverbox me-3 my-1"><a class="text-decoration-none"
                                href="../../../assets/video/beach.mp4" data-gallery="attachment-bg">
                                <div class="bg-attachment bg-attachment-square">
                                    <div class="bg-holder"
                                        style="background-image:url(../../../assets/img/elearning/lessons/chapter3.png);">
                                    </div><!--/.bg-holder-->
                                </div>
                            </a>
                            <div class="hoverbox-content flex-center pe-none bg-holder overlay overlay-1 rounded">
                                <div class="position-relative fs-7 text-white" data-bs-theme="light"><span
                                        class="fas fa-play-circle"></span></div>
                            </div>
                        </div>
                        <div class="flex-1">
                            <h5 class="fs-9"><a class="text-decoration-none" href="../../../assets/video/beach.mp4"
                                    data-gallery="attachment-title">Chapter 3</a></h5>
                            <p class="fs-10 mb-0">Getting Comfortable</p>
                        </div><span class="fas fa-lock fs-10 text-secondary"></span>
                    </div>
                    <div class="d-flex align-items-center px-x1 py-2">
                        <div class="hoverbox me-3 my-1"><a class="text-decoration-none"
                                href="../../../assets/video/beach.mp4" data-gallery="attachment-bg">
                                <div class="bg-attachment bg-attachment-square">
                                    <div class="bg-holder"
                                        style="background-image:url(../../../assets/img/elearning/lessons/chapter4.png);">
                                    </div><!--/.bg-holder-->
                                </div>
                            </a>
                            <div class="hoverbox-content flex-center pe-none bg-holder overlay overlay-1 rounded">
                                <div class="position-relative fs-7 text-white" data-bs-theme="light"><span
                                        class="fas fa-play-circle"></span></div>
                            </div>
                        </div>
                        <div class="flex-1">
                            <h5 class="fs-9"><a class="text-decoration-none" href="../../../assets/video/beach.mp4"
                                    data-gallery="attachment-title">Chapter 4</a></h5>
                            <p class="fs-10 mb-0">Exploring Beyond Comfort</p>
                        </div><span class="fas fa-lock fs-10 text-secondary"></span>
                    </div>
                </div>
                <div class="card-footer text-end py-1 bg-body-tertiary"><a class="btn btn-link btn-sm py-2 px-0"
                        href="#!">Full Lesson Plan<span class="fas fa-chevron-down ms-1 fs-11"></span></a></div>
            </div>
            <div class="card mb-3">
                <div class="card-header bg-body-tertiary">
                    <h5 class="mb-0">Requirements</h5>
                </div>
                <div class="card-body position-relative">
                    <div class="bg-holder bg-card d-none d-md-block"
                        style="background-image:url(../../../assets/img/icons/spot-illustrations/corner-7.png);"></div>
                    <!--/.bg-holder-->
                    <ul class="list-unstyled position-relative fs-10 p-0 m-0">
                        <li class="mb-2">
                            <div class="d-flex"><span class="fas fa-circle me-2 mt-1"
                                    data-fa-transform="shrink-8"></span><span>This course requires profieciency in English
                                    language as the Lessons are prepared in English.</span></div>
                        </li>
                        <li class="mb-2">
                            <div class="d-flex"><span class="fas fa-circle me-2 mt-1"
                                    data-fa-transform="shrink-8"></span><span>Learners with following skills might be more
                                    benefited, but little extra work is all that’ll take to catch up to experts’
                                    level</span></div>
                            <ol class="bullet-inside mt-2">
                                <li class="mb-2">Comfortable with Computer</li>
                                <li class="mb-2">Access to Internet and Computer</li>
                                <li class="mb-2">Background in Fine Arts or Any Creative Field</li>
                                <li class="mb-2">Digital Drawing Experience</li>
                            </ol>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header d-flex flex-between-center">
                    <h5 class="mb-0">Trainer</h5><button class="btn btn-falcon-primary btn-sm" type="button"><span
                            class="fas fa-user-plus"></span><span
                            class="d-none d-sm-inline-block align-middle ms-1">Follow</span></button>
                </div>
                <div class="card-body bg-body-tertiary">
                    <div class="row g-4 text-center text-md-start">
                        <div class="col-md-auto"><a href="../trainer-profile.html">
                                <div class="avatar avatar-4xl">
                                    <img class="rounded-circle" src="../../../assets/img/team/5-thumb.png"
                                        alt="" />
                                </div>
                            </a></div>
                        <div class="col">
                            <h5 class="mb-2"> <a href="../trainer-profile.html">Bill Finger</a></h5>
                            <h6 class="fs-10 text-800 fw-normal mb-3">Artist | Professional Comic Writer</h6>
                            <p class="fs-10 text-700">Finger, an aspiring writer and part-time shoe salesperson, joined
                                Kane's fledgling studio in 1938. Finger was inducted into the Jack Kirby Hall of Fame in
                                1994 and the <strong>Will Eisner Award Hall of Fame</strong>in 1999 after death. Finger was
                                named one of the awardees in the company's 50th anniversary edition <strong>Fifty Who Made
                                    DC </strong>Great in 1985. In his honor, Comic-Con International created the
                                <strong>Bill Finger Award for Excellence </strong>in Comic Book Writing in 2005. In 2014,
                                Finger got a posthumous <strong>Inkpot Award. </strong></p>
                            <div class="d-flex flex-wrap gap-2 justify-content-center justify-content-md-start"><span
                                    class="badge rounded-pill badge-subtle-light dark__bg-dark border border-300 text-secondary py-2 px-3"><span
                                        class="fas fa-star me-1"
                                        data-fa-transform="shrink-4"></span><span>4.95</span></span><span
                                    class="badge rounded-pill badge-subtle-light dark__bg-dark border border-300 text-secondary py-2 px-3"><span
                                        class="fas fa-graduation-cap me-1"
                                        data-fa-transform="shrink-4"></span><span>35,400</span></span><span
                                    class="badge rounded-pill badge-subtle-light dark__bg-dark border border-300 text-secondary py-2 px-3"><span
                                        class="fas fa-file-alt me-1"
                                        data-fa-transform="shrink-4"></span><span>15</span></span><span
                                    class="badge rounded-pill badge-subtle-light dark__bg-dark border border-300 text-secondary py-2 px-3"><span
                                        class="fas fa-map-pin me-1"
                                        data-fa-transform="shrink-4"></span><span>5,700</span></span></div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-end py-1"><a class="btn btn-link btn-sm fw-medium py-2 px-0"
                        href="course-list.html">View all his courses<span
                            class="fas fa-external-link-alt ms-1"></span></a></div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="course-details-sticky-sidebar mb-lg-8 mt-xl-n10 pe-xl-4 pe-xxl-7">
                <div class="card mb-3">
                    <div class="card-header bg-body-tertiary d-none d-lg-block">
                        <h5 class="mb-0">Plan Your Dream Career</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7 col-lg-12 order-md-1 order-lg-0">
                                <h2 class="fw-medium d-flex align-items-center">$47.49<del
                                        class="ms-2 fs-10 text-500">$69.99</del></h2>
                                <p class="text-danger fs-10 fw-semi-bold"><span class="far fa-clock me-2"></span>Sale ends
                                    in 13h : 25m : 54s</p><button class="btn btn-primary btn-lg w-100 fs-9 mt-1"
                                    id="course-purchase-btn">Purchase this course</button>
                                <p class="text-700 fw-medium fs-10 mt-3 mb-0">14 day Refund Policy</p>
                            </div>
                            <div class="col-md-5 col-lg-12">
                                <hr class="border-top border-dashed d-md-none d-lg-block" />
                                <h6 class="fw-bold">Course Contents</h6>
                                <ul class="list-unstyled fs-10 mb-0">
                                    <li class="mb-1"><span class="fs-11 fas fa-check me-2"></span>Total 13 hours of
                                        video lectures</li>
                                    <li class="mb-1"><span class="fs-11 fas fa-check me-2"></span>12 premium article
                                        access</li>
                                    <li class="mb-1"><span class="fs-11 fas fa-check me-2"></span>11 downloadable
                                        resources</li>
                                    <li class="mb-1"><span class="fs-11 fas fa-check me-2"></span>Mobile, Tab or TV
                                        friendly content</li>
                                    <li class="mb-1"><span class="fs-11 fas fa-check me-2"></span>Certificate upon
                                        completion</li>
                                    <li class="mb-1"><span class="fs-11 fas fa-infinity me-2"></span>Lifetime permission
                                        to access</li>
                                </ul>
                            </div>
                        </div>
                        <hr class="border-top border-dashed" />
                        <h6 class="fw-bold">Share with friends</h6>
                        <div class="d-flex gap-2"><button
                                class="btn btn-falcon-default icon-item fs-11 icon-item-lg"><span
                                    class="fs-9 fab fa-facebook-f mr-1 text-primary"></span></button><button
                                class="btn btn-falcon-default icon-item fs-11 icon-item-lg"><span
                                    class="fs-9 fab fa-twitter mr-1 text-twitter"></span></button><button
                                class="btn btn-falcon-default icon-item fs-11 icon-item-lg"><span
                                    class="fs-9 fab fa-google-plus-g mr-1 text-google-plus"></span></button><button
                                class="btn btn-falcon-default icon-item fs-11 icon-item-lg"><span
                                    class="fs-9 fab fa-linkedin-in mr-1 text-info"></span></button></div>
                    </div>
                </div>
                <div class="d-none d-xl-block position-absolute z-n1 top-0 end-0 text-end me-n2 me-xxl-4 mt-xl-6"><img
                        class="bg-card" src="../../../assets/img/illustrations/bg-wave.png" alt=""
                        style="max-width: 23.75rem;" /></div>
            </div>
        </div>
    </div>

    {{-- Fim do conteudo --}}
@endsection
