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
                    <div class="card overflow-hidden z-1">
                        <div class="card-body p-4 p-sm-5">
                            <div class="row g-0 h-100">
                                <div class="col-md-12 d-flex flex-center">
                                    <div class="p-4 p-md-5 flex-grow-1">
                                        <div class="row flex-between-center">
                                            <div class="col-auto">
                                                <h3>Conta de Login</h3>
                                            </div>
                                            <div class="col-auto fs-10 text-600"><span class="mb-0 undefined">ou</span>
                                                <span><a href="{{ route('register') }}">Crie uma conta</a></span>
                                            </div>
                                        </div>
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="mb-3"><label class="form-label" for="card-email">Endereço
                                                    Email</label><input class="form-control" name="email"
                                                    id="card-email" type="email" /></div>
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                            <div class="mb-3">
                                                <div class="d-flex justify-content-between"><label class="form-label"
                                                        for="card-password">Password</label></div><input name="password"
                                                    class="form-control" id="card-password" type="password" />
                                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                            </div>
                                            <div class="row flex-between-center">
                                                <div class="col-auto">
                                                    <div class="form-check mb-0"><input class="form-check-input"
                                                            type="checkbox" id="card-checkbox" name="remember"
                                                            checked="checked" /><label class="form-check-label mb-0"
                                                            for="card-checkbox">Lembre-me</label></div>
                                                </div>
                                                <div class="col-auto"><a class="fs-10"
                                                        href="{{ route('password.request') }}">Esqueceu o Password?</a>
                                                </div>
                                            </div>
                                            <div class="mb-3"><button class="btn btn-primary d-block w-100 mt-3"
                                                    style="border-radius: 0" type="submit" name="submit">Log
                                                    in</button></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
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
