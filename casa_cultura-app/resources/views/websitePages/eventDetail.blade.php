@extends('layouts.detailLayout')
@section('content')
    <div class="edu-breadcrumb-area breadcrumb-style-1 ptb--60 ptb_md--40 ptb_sm--40 bg-image">
        <div class="container eduvibe-animated-shape">
           
            <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                    <div class="shape-image shape-image-1">
                        <img src="../asset/images/shapes/shape-11-07.png" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-2">
                        <img src="../asset/images/shapes/shape-01-02.png" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-3">
                        <img src="../asset/images/shapes/shape-03.png" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-4">
                        <img src="../asset/images/shapes/shape-13-12.png" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-5">
                        <img src="../asset/images/shapes/shape-36.png" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-6">
                        <img src="../asset/images/shapes/shape-05-07.png" alt="Shape Thumb" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="edu-event-details-area edu-event-details edu-section-gap bg-color-white">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="thumbnail">
                        <img src="{{ asset('storage/' . $event->Event_picture) }}" alt="Event Images">
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="content">
                        <h3 class="title">Descricao do Evento</h3>
                        <p style="text-align: justify">{{$event->Description}}</p>
                        <ul>
                            <li>Artista Convidado: <b>{{ $event->artists->Name }}</b></li>
                            <li>Numero de Palestrantes: <b>{{ $event->Number_of_speaker }}</b></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="eduvibe-sidebar">
                        <div class="eduvibe-widget eduvibe-widget-details">
                            <h5 class="title">Detalhes do Evento</h5>
                            <div class="widget-content">
                                <ul>
                                    <li><span><i class="icon-calendar-2-line"></i> Data do Evento</span><span>{{ \Carbon\Carbon::parse($event->Date)->format('d-M-Y') }}</span></li>
                                    <li><span><i class="icon-time-line"></i> Horario</span><span> {{ \Carbon\Carbon::parse($event->Hour)->format('H:i') }}</span></li>
                                    <li><span><i class="icon-map-pin-line"></i> Localizacao</span><span>{{$event->Location}}</span>
                                    </li>
                                </ul>

                                <div class="read-more-btn mt--45">
                                    <a class="edu-btn btn-bg-alt w-100 text-center">Preco: {{$event->Price}} MZN</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                                        <li><i class="icon-phone-fill"></i><a href="tel:+1(237)382-2839">+ 258
                                                867336817</a></li>
                                        <li><i class="icon-phone-fill"></i><a href="tel:+1(237)382-2840">+ 258
                                                833138308</a></li>
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
                                    href="https://themeforest.net/user/devsvibe">Picardo Olindo</a>. Todos Direitos
                                Reservados</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection
