<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Dashboard Login </title>
    <link rel="shortcut icon" href="/dashboard/images/favicon.png" type="image/png" />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet" />

    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/dashboard/css/grid.css" />
    <link rel="stylesheet" href="/dashboard/css/style.css" />
    <link rel="stylesheet" href="/dashboard/css/responsive.css" />
</head>

<body class="sidebar-expand light active">
    <div class="main">
        <div class="container">
            <section class="login">
                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <div class="box-header d-flex justify-content-between">
                                <a>
                                    <img src="/dashboard/images/logo.png" alt="" />
                                </a>
                                <div class="action-reg">
                                    <h4 class="fs-30">Login</h4>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="box-body">
                                <div class="auth-content my-auto">
                                    <form method="POST" class="mt-5 pt-2" action="{{ route('login') }}">
                                        @csrf
                                        <div class="mb-24">
                                            <label class="form-label mb-14">Correo electronico</label>
                                            <input type="text" class="form-control" name="email"
                                                placeholder="Tu correo electronico" />

                                        </div>
                                        @error('email')
                                            <div class="alert alert-danger mt-5" role="alert">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <div class="mb-16">
                                            <div class="d-flex align-items-start">
                                                <div class="flex-grow-1">
                                                    <label class="form-label mb-14">Contraseña</label>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <div class="">
                                                        <a href="#" class="text-muted">¿Olvidaste tu
                                                            contraseña?</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="input-group auth-pass-inputgroup">
                                                <input type="password" class="form-control" name="password" placeholder="Tu contraseña"
                                                    aria-label="Password" aria-describedby="password-addon" />
                                                <button class="btn shadow-none ms-0" type="button" id="password-addon">
                                                    <i class="far fa-eye-slash"></i>
                                                </button>

                                            </div>
                                            @error('password')
                                                <div class="alert alert-danger mt-5" role="alert">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="row mb-29">
                                            <div class="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="remember-check" />
                                                    <label class="form-check-label fs-14" for="remember-check">
                                                        Recordar
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <button
                                                class="btn bg-primary color-white w-100 waves-effect waves-light fs-18 font-w500"
                                                type="submit">
                                                Acceder
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <script src="/dashboard/libs/jquery/jquery.min.js"></script>
    <script src="/dashboard/libs/moment/min/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="/dashboard/libs/peity/jquery.peity.min.js"></script>
    <script src="/dashboard/libs/owl.carousel/owl.carousel.min.js"></script>
    <script src="/dashboard/libs/simplebar/simplebar.min.js"></script>
    <script src="/dashboard/js/shortcode.js"></script>
</body>

</html>
