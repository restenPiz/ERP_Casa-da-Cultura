<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Casa da Cultura</title>
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/favicons/apple-touch-icon.png">
    {{-- <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicons/favicon-16x16.png"> --}}
    {{-- <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico"> --}}
    <link rel="shortcut icon" type="image/x-icon" href="asset/images/favicon.png">
    <meta name="msapplication-TileImage" content="../assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="../assets/js/config.js"></script>
    <script src="../vendors/simplebar/simplebar.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <link href="../vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link href="../assets/css/theme-rtl.min.css" rel="stylesheet" id="style-rtl">
    <link href="../assets/css/theme.min.css" rel="stylesheet" id="style-default">
    <link href="../assets/css/user-rtl.min.css" rel="stylesheet" id="user-style-rtl">
    <link href="../assets/css/user.min.css" rel="stylesheet" id="user-style-default">

    <script>
        var isRTL = JSON.parse(localStorage.getItem('isRTL'));
        if (isRTL) {
            var linkDefault = document.getElementById('style-default');
            var userLinkDefault = document.getElementById('user-style-default');
            linkDefault.setAttribute('disabled', true);
            userLinkDefault.setAttribute('disabled', true);
            document.querySelector('html').setAttribute('dir', 'rtl');
        } else {
            var linkRTL = document.getElementById('style-rtl');
            var userLinkRTL = document.getElementById('user-style-rtl');
            linkRTL.setAttribute('disabled', true);
            userLinkRTL.setAttribute('disabled', true);
        }
    </script>
    {{-- Inicio do link do vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <main class="main" id="top">
        <div class="container" data-layout="container">
            <script>
                var isFluid = JSON.parse(localStorage.getItem('isFluid'));
                if (isFluid) {
                    var container = document.querySelector('[data-layout]');
                    container.classList.remove('container');
                    container.classList.add('container-fluid');
                }
            </script>
            <nav class="navbar navbar-light navbar-vertical navbar-expand-xl" style="display: none;">
                <script>
                    var navbarStyle = localStorage.getItem("navbarStyle");
                    if (navbarStyle && navbarStyle !== 'transparent') {
                        document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
                    }
                </script>
                <div class="d-flex align-items-center">
                    <div class="toggle-icon-wrapper">
                        <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle"
                            data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation"><span
                                class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
                    </div><a class="navbar-brand" href="../index.html">
                        <div class="d-flex align-items-center py-3">{{-- <img class="me-2" src="../assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /> --}}
                            <span style="font-size: 20px" class="font-sans-serif text-primary">Casa da Cultura</span>
                        </div>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
                    <div class="navbar-vertical-content scrollbar">
                        <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                            <li class="nav-item"><!-- label-->
                                <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                                    <div class="col-auto navbar-vertical-label">Menu do Dashboard</div>
                                    <div class="col ps-0">
                                        <hr class="mb-0 navbar-vertical-divider" />
                                    </div>
                                </div>

                                @role('admin')
                                    <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}"
                                        href="/dashboard" role="button">
                                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                    class="fas fa-chart-pie"></span></span><span
                                                class="nav-link-text ps-1">Tela Inicial</span></div>
                                    </a>
                                    {{-- Inicio do segundo link --}}
                                    <a class="nav-link dropdown-indicator {{ request()->routeIs('trainer.all', 'trainer.index') ? 'active' : '' }}"
                                        href="#customizatio" role="button" data-bs-toggle="collapse"
                                        aria-expanded="{{ request()->routeIs('trainer.all', 'trainer.index') ? 'true' : 'false' }}"
                                        aria-controls="customization">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon">
                                                <span class="fas fa-layer-group"></span>
                                            </span>
                                            <span class="nav-link-text ps-1">Gerir Formadores</span>
                                        </div>
                                    </a>

                                    <ul class="nav collapse {{ request()->routeIs('trainer.all', 'trainer.index') ? 'show' : '' }}"
                                        id="customizatio">
                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->routeIs('trainer.index') ? 'active' : '' }}"
                                                href="{{ route('trainer.index') }}">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Adicionar Formador</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->routeIs('trainer.all') ? 'active' : '' }}"
                                                href="{{ route('trainer.all') }}">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Detalhes dos Formadores</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    {{-- inicio do quarto link --}}
                                    <a class="nav-link dropdown-indicator {{ request()->routeIs('employee.all', 'employee.index') ? 'active' : '' }}"
                                        href="#customizati" role="button" data-bs-toggle="collapse"
                                        aria-expanded="{{ request()->routeIs('employee.all', 'employee.index') ? 'true' : 'false' }}"
                                        aria-controls="customization">
                                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                    class="fab fa-trello"></span></span><span
                                                class="nav-link-text ps-1">Gerir Funcionarios</span></div>
                                    </a>
                                    <ul class="nav collapse {{ request()->routeIs('employee.all', 'employee.index') ? 'show' : '' }}"
                                        id="customizati">
                                        <li class="nav-item"><a
                                                class="nav-link {{ request()->routeIs('employee.index') ? 'active' : '' }}"
                                                href="{{ route('employee.index') }}">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Adicionar Funcionario</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a
                                                class="nav-link {{ request()->routeIs('employee.all') ? 'active' : '' }}"
                                                href="{{ route('employee.all') }}">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Detalhes dos Funcionarios</span></div>
                                            </a><!-- more inner pages--></li>
                                    </ul>
                                    {{-- Inicio do terceiro link --}}
                                    <a class="nav-link dropdown-indicator {{ request()->routeIs('course.index', 'course.all', 'course.detail') ? 'active' : '' }}"
                                        href="#customization" role="button" data-bs-toggle="collapse"
                                        aria-expanded="false" aria-controls="customization">
                                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                    class="fas fa-graduation-cap"></span></span><span
                                                class="nav-link-text ps-1">Gerir Cursos</span></div>
                                    </a>
                                    <ul class="nav collapse {{ request()->routeIs('course.all', 'course.index', 'course.detail') ? 'show' : '' }}"
                                        id="customization">
                                        <li class="nav-item"><a
                                                class="nav-link {{ request()->routeIs('course.index') ? 'active' : '' }}"
                                                href="{{ route('course.index') }}">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Adicionar Cursos</span></div>
                                            </a><!-- more inner pages--></li>
                                        <li class="nav-item"><a
                                                class="nav-link {{ request()->routeIs('course.all', 'course.detail') ? 'active' : '' }}"
                                                href="{{ route('course.all') }}">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Detalhes de Curso</span></div>
                                            </a><!-- more inner pages--></li>
                                    </ul>
                                    {{-- Inicio do quinto link --}}
                                    <a class="nav-link {{ request()->routeIs('artist.index') ? 'active' : '' }}"
                                        href="{{ route('artist.index') }}" role="button">
                                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                    class="fas fa-thumbtack"></span></span><span
                                                class="nav-link-text ps-1">Gerir Artistas</span></div>
                                    </a>
                                    {{-- Inicio do Sexto link --}}
                                    <a class="nav-link {{ request()->routeIs('event.index', 'event.detail') ? 'active' : '' }}"
                                        href="{{ route('event.index') }}" role="button">
                                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                    class="fas fa-calendar-day"></span></span><span
                                                class="nav-link-text ps-1">Gerir Eventos</span></div>
                                    </a>
                                    {{-- Inicio do Setimo Link --}}

                                    <a class="nav-link dropdown-indicator {{ request()->routeIs('student.index', 'student.details') ? 'active' : '' }}"
                                        href="#students" role="button" data-bs-toggle="collapse"
                                        aria-expanded="{{ request()->routeIs('student.index', 'student.details') ? 'true' : 'false' }}"
                                        aria-controls="customization">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon">
                                                <span class="fas fa-layer-group"></span>
                                            </span>
                                            <span class="nav-link-text ps-1">Inscricao de Alunos</span>
                                        </div>
                                    </a>

                                    <ul class="nav collapse {{ request()->routeIs('student.index', 'student.details') ? 'show' : '' }}"
                                        id="students">
                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->routeIs('student.index') ? 'active' : '' }}"
                                                href="{{ route('student.index') }}">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Inscrever Alunos</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->routeIs('student.details') ? 'active' : '' }}"
                                                href="{{ route('student.details') }}">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Filtro de Dados do Aluno</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                @endrole

                                @role('trainer')
                                    <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}"
                                        href="/dashboard" role="button">
                                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                    class="fas fa-chart-pie"></span></span><span
                                                class="nav-link-text ps-1">Tela Inicial</span></div>
                                    </a>
                                    {{-- Inicio do terceiro link --}}
                                    <a class="nav-link dropdown-indicator {{ request()->routeIs('course.index', 'course.all', 'course.detail') ? 'active' : '' }}"
                                        href="#customization" role="button" data-bs-toggle="collapse"
                                        aria-expanded="false" aria-controls="customization">
                                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                    class="fas fa-graduation-cap"></span></span><span
                                                class="nav-link-text ps-1">Notas de Estudantes</span></div>
                                    </a>
                                    <ul class="nav collapse {{ request()->routeIs('course.get', 'course.index', 'course.detail') ? 'show' : '' }}"
                                        id="customization">

                                        <li class="nav-item"><a
                                                class="nav-link {{ request()->routeIs('course.get', 'course.detail') ? 'active' : '' }}"
                                                href="{{ route('course.get') }}">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Adicionar notas</span></div>
                                            </a><!-- more inner pages--></li>
                                    </ul>
                                @endrole

                                @role('employee')
                                    <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}"
                                        href="/dashboard" role="button">
                                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                    class="fas fa-chart-pie"></span></span><span
                                                class="nav-link-text ps-1">Tela Inicial</span></div>
                                    </a>


                                    <a class="nav-link dropdown-indicator {{ request()->routeIs('student.index', 'student.details') ? 'active' : '' }}"
                                        href="#students" role="button" data-bs-toggle="collapse"
                                        aria-expanded="{{ request()->routeIs('student.index', 'student.details') ? 'true' : 'false' }}"
                                        aria-controls="customization">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon">
                                                <span class="fas fa-layer-group"></span>
                                            </span>
                                            <span class="nav-link-text ps-1">Inscricao de Alunos</span>
                                        </div>
                                    </a>

                                    <ul class="nav collapse {{ request()->routeIs('student.index', 'student.details') ? 'show' : '' }}"
                                        id="students">
                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->routeIs('student.index') ? 'active' : '' }}"
                                                href="{{ route('student.index') }}">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Inscrever Alunos</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->routeIs('student.details') ? 'active' : '' }}"
                                                href="{{ route('student.details') }}">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Filtro de Dados do Aluno</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                @endrole

                            </li>
                        </ul>

                    </div>
                </div>
            </nav>
            <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg" style="display: none;">
                <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarStandard" aria-controls="navbarStandard"
                    aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                            class="toggle-line"></span></span></button>
                <a class="navbar-brand me-1 me-sm-3" href="../index.html">
                    <div class="d-flex align-items-center"><img class="me-2"
                            src="../assets/img/icons/spot-illustrations/falcon.png" alt=""
                            width="40" /><span class="font-sans-serif text-primary">falcon</span></div>
                </a>
                <div class="collapse navbar-collapse scrollbar" id="navbarStandard">
                    <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">

                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"
                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                id="documentations">Documentation</a>
                            <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0"
                                aria-labelledby="documentations">
                                <div class="bg-white dark__bg-1000 rounded-3 py-2"><a
                                        class="dropdown-item link-600 fw-medium"
                                        href="../documentation/getting-started.html">Getting started</a><a
                                        class="dropdown-item link-600 fw-medium"
                                        href="../documentation/customization/configuration.html">Configuration</a><a
                                        class="dropdown-item link-600 fw-medium"
                                        href="../documentation/customization/styling.html">Styling<span
                                            class="badge rounded-pill ms-2 badge-subtle-success">Updated</span></a><a
                                        class="dropdown-item link-600 fw-medium"
                                        href="../documentation/customization/dark-mode.html">Dark mode</a><a
                                        class="dropdown-item link-600 fw-medium"
                                        href="../documentation/customization/plugin.html">Plugin</a><a
                                        class="dropdown-item link-600 fw-medium"
                                        href="../documentation/faq.html">Faq</a><a
                                        class="dropdown-item link-600 fw-medium"
                                        href="../documentation/gulp.html">Gulp</a><a
                                        class="dropdown-item link-600 fw-medium"
                                        href="../documentation/design-file.html">Design file</a><a
                                        class="dropdown-item link-600 fw-medium"
                                        href="../changelog.html">Changelog</a></div>
                            </div>
                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
                    <li class="nav-item ps-2 pe-0">
                        <div class="dropdown theme-control-dropdown"><a
                                class="nav-link d-flex align-items-center dropdown-toggle fa-icon-wait fs-9 pe-1 py-0"
                                href="#" role="button" id="themeSwitchDropdown" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><span class="fas fa-sun fs-7"
                                    data-fa-transform="shrink-2" data-theme-dropdown-toggle-icon="light"></span><span
                                    class="fas fa-moon fs-7" data-fa-transform="shrink-3"
                                    data-theme-dropdown-toggle-icon="dark"></span><span class="fas fa-adjust fs-7"
                                    data-fa-transform="shrink-2" data-theme-dropdown-toggle-icon="auto"></span></a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-caret border py-0 mt-3"
                                aria-labelledby="themeSwitchDropdown">
                                <div class="bg-white dark__bg-1000 rounded-2 py-2"><button
                                        class="dropdown-item d-flex align-items-center gap-2" type="button"
                                        value="light" data-theme-control="theme"><span
                                            class="fas fa-sun"></span>Light<span
                                            class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button><button
                                        class="dropdown-item d-flex align-items-center gap-2" type="button"
                                        value="dark" data-theme-control="theme"><span class="fas fa-moon"
                                            data-fa-transform=""></span>Dark<span
                                            class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button><button
                                        class="dropdown-item d-flex align-items-center gap-2" type="button"
                                        value="auto" data-theme-control="theme"><span class="fas fa-adjust"
                                            data-fa-transform=""></span>Auto<span
                                            class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item d-none d-sm-block">
                        <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait"
                            href="../app/e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart"
                                data-fa-transform="shrink-7" style="font-size: 33px;"></span><span
                                class="notification-indicator-number">1</span></a>
                    </li>
                </ul>
            </nav>
            <div class="content">
                <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand" style="display: none;">
                    <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button"
                        data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse"
                        aria-controls="navbarVerticalCollapse" aria-expanded="false"
                        aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                                class="toggle-line"></span></span></button>
                    <a class="navbar-brand me-1 me-sm-3" href="../index.html">
                        <div class="d-flex align-items-center"><img class="me-2"
                                src="../assets/img/icons/spot-illustrations/falcon.png" alt=""
                                width="40" /><span class="font-sans-serif text-primary">falcon</span></div>
                    </a>
                    <ul class="navbar-nav align-items-center d-none d-lg-block">

                    </ul>
                    <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
                        <li class="nav-item ps-2 pe-0">
                            <div class="dropdown theme-control-dropdown"><a
                                    class="nav-link d-flex align-items-center dropdown-toggle fa-icon-wait fs-9 pe-1 py-0"
                                    href="#" role="button" id="themeSwitchDropdown" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false"><span class="fas fa-sun fs-7"
                                        data-fa-transform="shrink-2"
                                        data-theme-dropdown-toggle-icon="light"></span><span class="fas fa-moon fs-7"
                                        data-fa-transform="shrink-3"
                                        data-theme-dropdown-toggle-icon="dark"></span><span class="fas fa-adjust fs-7"
                                        data-fa-transform="shrink-2"
                                        data-theme-dropdown-toggle-icon="auto"></span></a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-caret border py-0 mt-3"
                                    aria-labelledby="themeSwitchDropdown">
                                    <div class="bg-white dark__bg-1000 rounded-2 py-2"><button
                                            class="dropdown-item d-flex align-items-center gap-2" type="button"
                                            value="light" data-theme-control="theme"><span
                                                class="fas fa-sun"></span>Light<span
                                                class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button><button
                                            class="dropdown-item d-flex align-items-center gap-2" type="button"
                                            value="dark" data-theme-control="theme"><span class="fas fa-moon"
                                                data-fa-transform=""></span>Dark<span
                                                class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button><button
                                            class="dropdown-item d-flex align-items-center gap-2" type="button"
                                            value="auto" data-theme-control="theme"><span class="fas fa-adjust"
                                                data-fa-transform=""></span>Auto<span
                                                class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser"
                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="avatar avatar-xl">
                                    <img class="rounded-circle" src="../assets/dif.jpg" alt="" />
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0"
                                aria-labelledby="navbarDropdownUser">
                                <div class="bg-white dark__bg-1000 rounded-2 py-2">
                                    <a class="dropdown-item fw-bold text-warning"><span
                                            class="fas fa-crown me-1"></span><span>@auth
                                                {{ Auth::user()->name }}
                                            @endauth
                                        </span></a>
                                    <div class="dropdown-divider"></div>
                                    {{-- <a class="dropdown-item" href="../pages/user/profile.html">Profile &amp;
                                        account</a>
                                    <a class="dropdown-item" href="../pages/user/settings.html">Settings</a> --}}
                                    <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
                <script>
                    var navbarPosition = localStorage.getItem('navbarPosition');
                    var navbarVertical = document.querySelector('.navbar-vertical');
                    var navbarTopVertical = document.querySelector('.content .navbar-top');
                    var navbarTop = document.querySelector('[data-layout] .navbar-top:not([data-double-top-nav');
                    var navbarDoubleTop = document.querySelector('[data-double-top-nav]');
                    var navbarTopCombo = document.querySelector('.content [data-navbar-top="combo"]');

                    if (localStorage.getItem('navbarPosition') === 'double-top') {
                        document.documentElement.classList.toggle('double-top-nav-layout');
                    }

                    if (navbarPosition === 'top') {
                        navbarTop.removeAttribute('style');
                        navbarTopVertical.remove(navbarTopVertical);
                        navbarVertical.remove(navbarVertical);
                        navbarTopCombo.remove(navbarTopCombo);
                        navbarDoubleTop.remove(navbarDoubleTop);
                    } else if (navbarPosition === 'combo') {
                        navbarVertical.removeAttribute('style');
                        navbarTopCombo.removeAttribute('style');
                        navbarTop.remove(navbarTop);
                        navbarTopVertical.remove(navbarTopVertical);
                        navbarDoubleTop.remove(navbarDoubleTop);
                    } else if (navbarPosition === 'double-top') {
                        navbarDoubleTop.removeAttribute('style');
                        navbarTopVertical.remove(navbarTopVertical);
                        navbarVertical.remove(navbarVertical);
                        navbarTop.remove(navbarTop);
                        navbarTopCombo.remove(navbarTopCombo);
                    } else {
                        navbarVertical.removeAttribute('style');
                        navbarTopVertical.removeAttribute('style');
                        navbarTop.remove(navbarTop);
                        navbarDoubleTop.remove(navbarDoubleTop);
                        navbarTopCombo.remove(navbarTopCombo);
                    }
                </script>

                {{-- Inicio do conteudo das pages --}}
                @yield('content')
                {{-- Fim do conteudo das pages --}}

                {{-- Inicio dos links do javascript --}}
                <script src="../vendors/popper/popper.min.js"></script>
                <script src="../vendors/bootstrap/bootstrap.min.js"></script>
                <script src="../vendors/anchorjs/anchor.min.js"></script>
                <script src="../vendors/is/is.min.js"></script>
                <script src="../vendors/chart/chart.umd.js"></script>
                <script src="../vendors/countup/countUp.umd.js"></script>
                <script src="../vendors/echarts/echarts.min.js"></script>
                <script src="../assets/data/world.js"></script>
                <script src="../vendors/d3/d3.min.js"></script>
                <script src="../vendors/fontawesome/all.min.js"></script>
                <script src="../vendors/lodash/lodash.min.js"></script>
                <script src="../vendors/list.js/list.min.js"></script>
                <script src="../assets/js/theme.js"></script>
                {{-- Inicio do link do sweetalert --}}
                @include('sweetalert::alert')
                {{-- Fim dos links do javascript --}}

                @if ($errors->any())
                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    document.getElementById('staticBack').click();
                                });
                            </script>
                            @endif
</body>

</html>
