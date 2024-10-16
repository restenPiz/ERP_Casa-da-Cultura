@extends('layouts.detailLayout')
@section('content')

    <div class="edu-breadcrumb-area breadcrumb-style-1 ptb--60 ptb_md--40 ptb_sm--40 bg-image">
            <div class="container eduvibe-animated-shape">

                <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                    <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                        <div class="shape-image shape-image-1">
                            <img src="../../asset/images/shapes/shape-11-07.png" alt="Shape Thumb" />
                        </div>
                        <div class="shape-image shape-image-2">
                            <img src="../../asset/images/shapes/shape-01-02.png" alt="Shape Thumb" />
                        </div>
                        <div class="shape-image shape-image-3">
                            <img src="../../asset/images/shapes/shape-03.png" alt="Shape Thumb" />
                        </div>
                        <div class="shape-image shape-image-4">
                            <img src="../../asset/images/shapes/shape-13-12.png" alt="Shape Thumb" />
                        </div>
                        <div class="shape-image shape-image-5">
                            <img src="../../asset/images/shapes/shape-36.png" alt="Shape Thumb" />
                        </div>
                        <div class="shape-image shape-image-6">
                            <img src="../../asset/images/shapes/shape-05-07.png" alt="Shape Thumb" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="edu-course-details-area edu-section-gap bg-color-white">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-12">
                        <div class="main-image thumbnail">
                            <img class="radius-small" src="{{ asset('storage/' . $course->Upload_file) }}" alt="Banner Images">
                        </div>
                    </div>
                </div>

                <div class="row g-5">
                    <div class="col-xl-8 col-lg-7">
                        <div class="course-details-content">
                            
                            <div class="content-top"></div>

                            <h3 class="title">{{$course->Course_name}}</h3>

                            <ul class="edu-course-tab nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview" type="button" role="tab" aria-controls="overview" aria-selected="true">Inicio</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="curriculum-tab" data-bs-toggle="tab" data-bs-target="#curriculum" type="button" role="tab" aria-controls="curriculum" aria-selected="false">Aulas</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="instructor-tab" data-bs-toggle="tab" data-bs-target="#instructor" type="button" role="tab" aria-controls="instructor" aria-selected="false">Formador</button>
                                </li>
                            </ul>

                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                                    <div class="course-tab-content">
                                        <h5>Descricao do Curso</h5>
                                        <p style="text-align: justify">{{$course->Description}}</p>
                                        <h5>Objectivo do Curso</h5>
                                        <ul>
                                            <li style="text-align: justify">{{$course->Goals}}</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="curriculum" role="tabpanel" aria-labelledby="curriculum-tab">
                                    <div class="course-tab-content">
                                        <div class="edu-accordion-02" id="accordionExample1">
                                            <div class="edu-accordion-item">
                                                <div class="edu-accordion-header" id="headingOne">
                                                    <button class="edu-accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        Capitulos
                                                    </button>
                                                </div>
                                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample1">
                                                    <div class="edu-accordion-body">
                                                        <ul>
                                                            @foreach ($chapters as $chapter)
                                                                <li>
                                                                    <div class="text"><i class="icon-draft-line"></i> {{$chapter->Title}}</div>
                                                                    <div class="icon"><i class="icon-lock-password-line"></i></div>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="instructor" role="tabpanel" aria-labelledby="instructor-tab">
                                    <div class="course-tab-content">
                                        <div class="course-author-wrapper">
                                            <div class="thumbnail">
                                                <img src="../../asset/images/instructor/course-details/instructor-2.jpg" alt="Author Images">
                                            </div>
                                            <div class="author-content">
                                                <h6 class="title">
                                                    <a href="instructor-profile.html">Leone Xaviona</a>
                                                </h6>
                                                <span class="subtitle">Digital Marketer</span>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley...</p>
                                                <ul class="social-share border-style">
                                                    <li><a href="#"><i class="icon-Fb"></i></a></li>
                                                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                                    <li><a href="#"><i class="icon-Pinterest"></i></a></li>
                                                    <li><a href="#"><i class="icon-Twitter"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                                    <div class="course-tab-content">
                                        <div class="row row--30">
                                            <div class="col-lg-4">
                                                <div class="rating-box">
                                                    <div class="rating-number">5.0</div>
                                                    <div class="rating">
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                    </div>
                                                    <span>(25 Review)</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="review-wrapper">

                                                    <div class="single-progress-bar">
                                                        <div class="rating-text">
                                                            5 <i class="icon-Star"></i>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <span class="rating-value">1</span>
                                                    </div>

                                                    <div class="single-progress-bar">
                                                        <div class="rating-text">
                                                            4 <i class="icon-Star"></i>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <span class="rating-value">0</span>
                                                    </div>

                                                    <div class="single-progress-bar">
                                                        <div class="rating-text">
                                                            3 <i class="icon-Star"></i>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <span class="rating-value">0</span>
                                                    </div>

                                                    <div class="single-progress-bar">
                                                        <div class="rating-text">
                                                            2 <i class="icon-Star"></i>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <span class="rating-value">0</span>
                                                    </div>

                                                    <div class="single-progress-bar">
                                                        <div class="rating-text">
                                                            1 <i class="icon-Star"></i>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <span class="rating-value">0</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment-wrapper pt--40">
                                            <div class="section-title">
                                                <h5 class="mb--25">Reviews</h5>
                                            </div>
                                            <div class="edu-comment">
                                                <div class="thumbnail">
                                                    <img src="../../asset/images/course/student-review/student-1.png" alt="Comment Images">
                                                </div>
                                                <div class="comment-content">
                                                    <div class="comment-top">
                                                        <h6 class="title">Elen Saspita</h6>
                                                        <div class="rating">
                                                            <i class="icon-Star"></i>
                                                            <i class="icon-Star"></i>
                                                            <i class="icon-Star"></i>
                                                            <i class="icon-Star"></i>
                                                            <i class="icon-Star"></i>
                                                        </div>
                                                    </div>
                                                    <span class="subtitle">“ Outstanding Course ”</span>
                                                    <p>As Thomas pointed out, Chegg’s survey appears more like a scorecard that details obstacles and challenges that the current university undergraduate student population is going through in their universities and countries.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-5">
                        <div class="eduvibe-sidebar course-details-sidebar">
                            <div class="inner">
                                <div class="eduvibe-widget">
                                    <div class="video-area">
                                        <div class="thumbnail video-popup-wrapper">
                                            <img class="radius-small w-100" src="{{ asset('storage/' . $course->Upload_video) }}" alt="Course Images">
                                            <a href="https://www.youtube.com/watch?v=pNje3bWz7V8" class="video-play-btn position-to-top video-popup-activation">
                                                <span class="play-icon course-details-video-popup"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="eduvibe-widget-details mt--35">
                                        <div class="widget-content">
                                            <ul>
                                                <li><span><i class="icon-user-2"></i> Estudantes Inscritos</span><span>89</span></li>

                                                <li><span><i class="icon-draft-line"></i> Capitulos</span><span>23</span></li>

                                                <li><span><i class="icon-translate"></i> Linguagem</span><span>Portugues</span></li>

                                                <li><span><i class="icon-award-line"></i> Certificado</span><span>Sim</span></li>

                                                <li><span><i class="icon-user-2-line_tie"></i> Instructor</span><span>Daniel Stiva</span></li>
                                            </ul>

                                            <div class="read-more-btn mt--45">
                                                <a class="edu-btn btn-bg-alt w-100 text-center" href="#">Price: {{$course->Price}} MZN</a>
                                            </div>

                                            <div class="read-more-btn mt--15">
                                                <a class="edu-btn w-100 text-center" href="#">Pagar Agora</a>
                                            </div>

                                            {{-- <div class="read-more-btn mt--30 text-center">
                                                <div class="eduvibe-post-share">
                                                    <span>Share: </span>
                                                    <a class="linkedin" href="#"><i class="icon-linkedin"></i></a>
                                                    <a class="facebook" href="#"><i class="icon-Fb"></i></a>
                                                    <a class="twitter" href="#"><i class="icon-Twitter"></i></a>
                                                    <a class="youtube" href="#"><i class="icon-youtube"></i></a>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start Footer Area  -->
        <footer class="eduvibe-footer-one edu-footer footer-style-default">
        <div class="footer-top">
            <div class="container eduvibe-animated-shape">
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="edu-footer-widget">
                            <div class="logo">
                                <a href="index.html">
                                    <img class="logo-light" src="../asset/images/logo/logo2.png" alt="Site Logo">
                                </a>
                            </div>
                            <p class="description">It is a long established fact that a reader will be distracted by the
                                readable content of a page when looking at its layout. The point of using Lorem Ipsum.</p>
                            <ul class="social-share">
                                <li><a href="#"><i class="icon-Fb"></i></a></li>
                                <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="edu-footer-widget explore-widget">
                            <h5 class="widget-title">Navegue Mais</h5>
                            <div class="inner">
                                <ul class="footer-link link-hover">
                                    <li><a href="about-us-1.html"><i class="icon-Double-arrow"></i>About Us</a></li>
                                    <li><a href="event-list.html"><i class="icon-Double-arrow"></i>Upcoming Events</a>
                                    </li>
                                    <li><a href="blog-standard.html"><i class="icon-Double-arrow"></i>Blog & News</a></li>
                                    <li><a href="faq.html"><i class="icon-Double-arrow"></i>FAQ Question</a></li>
                                    <li><a href="testimonial.html"><i class="icon-Double-arrow"></i>Testimonial</a></li>
                                    <li><a href="privacy-policy.html"><i class="icon-Double-arrow"></i>Privacy Policy</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="edu-footer-widget">
                            <h5 class="widget-title">Contacto</h5>
                            <div class="inner">
                                <div class="widget-information">
                                    <ul class="information-list">
                                        <li><i class="icon-map-pin-line"></i>Cidade da Beira
                                        </li>
                                        <li><i class="icon-phone-fill"></i><a href="tel:+1(237)382-2839">+ 258 867336817</a></li>
                                        <li><i class="icon-phone-fill"></i><a href="tel:+1(237)382-2840">+ 258 833138308</a></li>
                                        <li><i class="icon-mail-line-2"></i><a target="_blank"
                                                href="mailto:yourmailaddress@example.com">email@example.com</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="shape-dot-wrapper shape-wrapper d-md-block d-none">
                    <div class="shape-image shape-image-1">
                        <img src="../asset/images/shapes/shape-21-01.png" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-2">
                        <img src="../asset/images/shapes/shape-35.png" alt="Shape Thumb" />
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area copyright-default">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="inner text-center">
                            <p>Copyright 2024 <a href="#">Casa Da Cultura - Beira</a> Desenvolvido Por <a
                                    href="https://themeforest.net/user/devsvibe">Picardo Olindo</a>. Todos Direitos Reservados</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
        <!-- End Footer Area  -->
    </div>

@endsection