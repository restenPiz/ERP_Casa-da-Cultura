<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Casa de Cultura</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="asset/images/favicon.png">
    <link rel="stylesheet" href="../asset/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="../asset/css/vendor/remixicon.css">
    <link rel="stylesheet" href="../asset/css/vendor/eduvibe-font.css">
    <link rel="stylesheet" href="../asset/css/vendor/magnifypopup.css">
    <link rel="stylesheet" href="../asset/css/vendor/slick.css">
    <link rel="stylesheet" href="../asset/css/vendor/odometer.css">
    <link rel="stylesheet" href="../asset/css/vendor/lightbox.css">
    <link rel="stylesheet" href="../asset/css/vendor/animation.css">
    <link rel="stylesheet" href="../asset/css/vendor/jqueru-ui-min.css">
    <link rel="stylesheet" href="../asset/css/style.css">

    {{-- {{-- Inicio do link do vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="main-wrapper">
        <header class="edu-header  header-sticky header-transparent header-style-2 header-default ">
            <div class="row align-items-center">
                <div class="col-lg-4 col-xl-3 col-md-6 col-6">
                    <div class="logo">
                        <a href="index.html">
                            <img class="logo-light" src="../asset/images/logo/logo1.png" alt="Site Logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-xl-block">
                    <nav class="mainmenu-nav d-none d-lg-block">
                        <ul class="mainmenu">
                            <li><a href="/webMain">Inicio</a>
                            </li>
                            <li><a href="#">Sobre Nos</a>
                            </li>
                            <li><a href="#">Cursos</a>
                            </li>
                            <li><a href="#">Pagina</a>
                            </li>
                            <li><a href="#">Eventos</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-8 col-xl-3 col-md-6 col-6">
                    <div class="header-right d-flex justify-content-end">
                        <div class="header-menu-bar">
                            @auth
                                <div class="quote-icon quote-user ml--15 ml_sm--5">
                                    <a class="white-box-icon" href=""><i class="ri-user-line"></i></a>
                                </div>
                            @endauth
                        </div>

                        <div class="mobile-menu-bar ml--15 ml_sm--5 d-block d-xl-none">
                            <div class="hamberger">
                                <button class="white-box-icon hamberger-button header-menu">
                                    <i class="ri-menu-line"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="popup-mobile-menu">
            <div class="inner">
                <div class="header-top">
                    <div class="logo">
                        <a href="index.html">
                            <img src="../asset/images/logo/logo.png" alt="Site Logo">
                        </a>
                    </div>
                    <div class="close-menu">
                        <button class="close-button">
                            <i class="ri-close-line"></i>
                        </button>
                    </div>
                </div>
                    <ul class="mainmenu">
                        <li><a href="/dashboard">Inicio</a>
                        </li>
                        <li><a href="#">Sobre Nos</a>
                        </li>
                        <li><a href="#">Cursos</a>
                        </li>
                        <li><a href="#">Pagina</a>
                        </li>
                        <li><a href="#">Eventos</a>
                        </li>
                    </ul>
            </div>
        </div>
        <!-- Start Search Popup  -->
        <div class="edu-search-popup">
            <div class="close-button">
                <button class="close-trigger"><i class="ri-close-line"></i></button>
            </div>
            <div class="inner">
                <form class="search-form" action="#">
                    <input type="text" class="eduvibe-search-popup-field" placeholder="Search Here...">
                    <button class="submit-button"><i class="icon-search-line"></i></button>
                </form>
            </div>
        </div>

        @yield('content')

    </div>
    <div class="rn-progress-parent">
        <svg class="rn-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <script src="../asset/js/vendor/modernizr.min.js"></script>
    <!-- jQuery JS -->
    <script src="../asset/js/vendor/jquery.js"></script>
    <script src="../asset/js/vendor/bootstrap.min.js"></script>
    <script src="../asset/js/vendor/sal.min.js"></script>
    <script src="../asset/js/vendor/backtotop.js"></script>
    <script src="../asset/js/vendor/magnifypopup.js"></script>
    <script src="../asset/js/vendor/slick.js"></script>
    <script src="../asset/js/vendor/countdown.js"></script>
    <script src="../asset/js/vendor/jquery-appear.js"></script>
    <script src="../asset/js/vendor/odometer.js"></script>
    <script src="../asset/js/vendor/isotop.js"></script>
    <script src="../asset/js/vendor/imageloaded.js"></script>
    <script src="../asset/js/vendor/lightbox.js"></script>
    <script src="../asset/js/vendor/wow.js"></script>
    <script src="../asset/js/vendor/paralax.min.js"></script>
    <script src="../asset/js/vendor/paralax-scroll.js"></script>
    <script src="../asset/js/vendor/jquery-ui.js"></script>
    <script src="../asset/js/vendor/tilt.jquery.min.js"></script>
    <!-- Main JS -->
    <script src="asset/js/main.js"></script>

    {{-- Inicio do link do sweetalert --}}
    @include('sweetalert::alert')
    {{-- Fim dos links do javascript --}}

</body>
</html>