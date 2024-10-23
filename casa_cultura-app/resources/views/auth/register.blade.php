<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ERP - Casa de cultura</title>

    <link rel="apple-touch-icon" sizes="180x180" href="../../../assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../../assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../../assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../assets/img/favicons/favicon.ico">
    <link rel="manifest" href="../../../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../../../assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="../../../assets/js/config.js"></script>
    <script src="../../../vendors/simplebar/simplebar.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <link href="../../../vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link href="../../../assets/css/theme-rtl.min.css" rel="stylesheet" id="style-rtl">
    <link href="../../../assets/css/theme.min.css" rel="stylesheet" id="style-default">
    <link href="../../../assets/css/user-rtl.min.css" rel="stylesheet" id="user-style-rtl">
    <link href="../../../assets/css/user.min.css" rel="stylesheet" id="user-style-default">
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
</head>

<body>
    <main class="main" id="top">
        <div class="container-fluid">
            <div class="row min-vh-100 flex-center g-0">
                <div class="col-lg-8 col-xxl-5 py-3 position-relative"><img class="bg-auth-circle-shape"
                        src="../../../assets/img/icons/spot-illustrations/bg-shape.png" alt=""
                        width="250"><img class="bg-auth-circle-shape-2"
                        src="../../../assets/img/icons/spot-illustrations/shape-1.png" alt="" width="150">

                        {{--?Inicio do metodo responsavel pelo formulario do usuario--}}
                        <div class="card theme-wizard mb-5">
                            <div class="card-header bg-body-tertiary pt-3 pb-2">
                                <ul class="nav justify-content-between nav-wizard">
                                    <li class="nav-item"><a class="nav-link active fw-semi-bold" href="#bootstrap-wizard-tab1"
                                            data-bs-toggle="tab" data-wizard-step="1"><span class="nav-item-circle-parent"><span
                                                    class="nav-item-circle"><span class="fas fa-lock"></span></span></span><span
                                                class="d-none d-md-block mt-1 fs-10">Acesso</span></a></li>
                                    <li class="nav-item"><a class="nav-link fw-semi-bold" href="#bootstrap-wizard-tab2"
                                            data-bs-toggle="tab" data-wizard-step="2"><span class="nav-item-circle-parent"><span
                                                    class="nav-item-circle"><span class="fas fa-user"></span></span></span><span
                                                class="d-none d-md-block mt-1 fs-10">Dados Pessoais</span></a></li>
                                    <li class="nav-item"><a class="nav-link fw-semi-bold" href="#bootstrap-wizard-tab4"
                                            data-bs-toggle="tab" data-wizard-step="4"><span class="nav-item-circle-parent"><span
                                                    class="nav-item-circle"><span class="fas fa-thumbs-up"></span></span></span><span
                                                class="d-none d-md-block mt-1 fs-10">Confirmacao</span></a></li>
                                </ul>
                            </div>
                            <form action="{{ route('student.manual') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body py-4">
                                    <div class="tab-content">

                                        <div class="tab-pane active px-sm-3 px-md-2" role="tabpanel"
                                            aria-labelledby="bootstrap-wizard-tab1" id="bootstrap-wizard-tab1">
                                            <div class="mb-3"><label class="form-label"
                                                    for="bootstrap-wizard-wizard-name">Nome</label><input class="form-control"
                                                    type="text" name="name" placeholder="Picardo"
                                                    id="bootstrap-wizard-wizard-name" /></div>
                                            <div class="mb-3"><label class="form-label"
                                                    for="bootstrap-wizard-wizard-name">Apelido</label><input class="form-control"
                                                    type="text" name="Surname" placeholder="Olindo"
                                                    id="bootstrap-wizard-wizard-name" /></div>
                                            <div class="mb-3"><label class="form-label"
                                                    for="bootstrap-wizard-wizard-email">Email*</label><input class="form-control"
                                                    type="email" name="email" placeholder="picardo@gmail.com"
                                                    pattern="^([a-zA-Z0-9_\.\-])+@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$"
                                                    required="required" id="bootstrap-wizard-wizard-email"
                                                    data-wizard-validate-email="true" />
                                            </div>
                                            <div class="mb-3"><label class="form-label"
                                                    for="bootstrap-wizard-wizard-name">Senha</label><input class="form-control"
                                                    type="password" name="password" id="bootstrap-wizard-wizard-name" /></div>
                                            <div class="mb-3"><label class="form-label" for="bootstrap-wizard-wizard-name">Senha de
                                                    Confirmacao</label><input class="form-control" type="password"
                                                    name="password_confirmation" id="bootstrap-wizard-wizard-name" /></div>

                                        </div>

                                        <div class="tab-pane px-sm-3 px-md-2" role="tabpanel" aria-labelledby="bootstrap-wizard-tab2"
                                            id="bootstrap-wizard-tab2">
                                            <div class="mb-3">
                                                <input class="form-control" type="file" name="upload_file"
                                                    accept=".jpg,.jpeg,.png,.gif,.docx,.pdf,.txt" />
                                            </div>
                                            <div class="mb-3"><label class="form-label"
                                                    for="bootstrap-wizard-wizard-phone">Contacto</label><input class="form-control"
                                                    type="text" name="contact" placeholder="855686307"
                                                    id="bootstrap-wizard-wizard-phone" /></div>
                                            <div class="mb-3"><label class="form-label"
                                                    for="bootstrap-wizard-wizard-datepicker">Date
                                                    of
                                                    Birth</label><input class="form-control datetimepicker" type="date"
                                                    placeholder="dd/mm/yy" name="Date_of_birth"
                                                    data-options='{"dateFormat":"dd/mm/yy","disableMobile":true}'
                                                    id="bootstrap-wizard-wizard-datepicker" /></div>
                                            <div class="mb-3"><label class="form-label" for="bootstrap-wizard-wizard-phone">Numero
                                                    de BI</label><input class="form-control" type="text" name="bi"
                                                    placeholder="EX: 083902130290380213BM" id="bootstrap-wizard-wizard-phone" /></div>
                                        </div>

                                        <div class="tab-pane text-center px-sm-3 px-md-2" role="tabpanel"
                                            aria-labelledby="bootstrap-wizard-tab4" id="bootstrap-wizard-tab4">
                                            <input type="hidden" name="user_type" value="Users">
                                            <input type="hidden" name="status" value="Pendente">
                                            <button type="submit" name="submit" class="btn btn-primary px-5 my-3"
                                                style="text-align: none" href="wizard.html">Inscrever Aluno</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    {{--?Fim do formulario de estudantes--}}


                    {{--*Inicio do formulario de --}}
                    {{-- <div class="card overflow-hidden z-1">
                        <div class="card-body p-4 p-sm-5">
                            <div class="row g-0 h-100">
                                <div class="col-md-12 d-flex flex-center">
                                    <div class="p-4 p-md-5 flex-grow-1">
                                        <div class="row flex-between-center">
                                            <div class="col-auto">
                                                <h3>Registre-se</h3>
                                            </div>
                                            <div class="col-auto fs-10 text-600"><span class="mb-0 undefined">ou</span>
                                                <span><a href="{{ route('login') }}">Tens uma conta ?</a></span>
                                            </div>
                                        </div>
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <div class="mb-3"><label class="form-label"
                                                    for="card-name">Nome</label><input class="form-control"
                                                    type="text" autocomplete="on" id="card-name" name="name" />
                                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                            </div>
                                            <div class="mb-3"><label class="form-label" for="card-email">Endereço
                                                    Email</label><input class="form-control" type="email"
                                                    autocomplete="on" id="card-email" name="email" />
                                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                            </div>
                                            <div class="row gx-2">
                                                <div class="mb-3 col-sm-6"><label class="form-label"
                                                        for="card-password">Password</label><input class="form-control"
                                                        type="password" autocomplete="on" id="card-password"
                                                        name="password" />
                                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                                </div>
                                                <div class="mb-3 col-sm-6"><label class="form-label"
                                                        for="card-confirm-password">Confirme o Password</label><input
                                                        class="form-control" type="password" autocomplete="on"
                                                        id="card-confirm-password" name="password_confirmation" />
                                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                                </div>
                                            </div>
                                            <div class="mb-3"><button class="btn btn-primary d-block w-100 mt-3"
                                                    type="submit" name="submit">Registre-se</button></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="../../../vendors/popper/popper.min.js"></script>
    <script src="../../../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../../../vendors/anchorjs/anchor.min.js"></script>
    <script src="../../../vendors/is/is.min.js"></script>
    <script src="../../../vendors/fontawesome/all.min.js"></script>
    <script src="../../../vendors/lodash/lodash.min.js"></script>
    <script src="../../../vendors/list.js/list.min.js"></script>
    <script src="../../../assets/js/theme.js"></script>
</body>

</html>
