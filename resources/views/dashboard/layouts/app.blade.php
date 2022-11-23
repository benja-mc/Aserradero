<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Dashboard - @yield('title') </title>
    <link rel="shortcut icon" href="/dashboard/images/favicon.png" type="image/png" />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet" />

    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="/dashboard/libs/owl.carousel/assets/owl.carousel.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/dashboard/css/grid.css" />
    <link rel="stylesheet" href="/dashboard/css/style.css" />
    <link rel="stylesheet" href="/dashboard/css/responsive.css" />
</head>

<body class="sidebar-expand light">
    <div class="sidebar">
        <div class="sidebar-logo">
            <a href="{{ route('dashboard') }}">
                <img src="/dashboard/images/logo.png" alt="Protend logo" />
            </a>
            <div class="sidebar-close" id="sidebar-close">
                <i class="bx bx-left-arrow-alt"></i>
            </div>
        </div>

        <div class="simlebar-sc" data-simplebar>
            <ul class="sidebar-menu tf">
                <li class="sidebar-submenu">
                    <a href="{{ route('dashboard') }}" class="sidebar-menu-dropdown">
                        <i class="bx bxs-home"></i>
                        <span>Dashboard</span>
                        <div class="dropdown-icon">
                            <i class="bx bx-chevron-down"></i>
                        </div>
                    </a>
                    <ul class="sidebar-menu sidebar-menu-dropdown-content active" style="height: 160px;">
                        <li>
                            <a href="{{ route('dashboard') }}">
                                Inicio
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('madera.index') }}">
                                Maderas
                            </a>
                        </li>
                        <li>
                            <a href="###">
                                Aserradero
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('dashboard.users') }}">
                                Usuarios
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="sidebar-submenu">
                    <a href="{{route("producto.index")}}" class="sidebar-menu-dropdown">
                        <i class="bx bxs-bolt"></i>
                        <span>Productos</span>
                        <div class="dropdown-icon"><i class="bx bx-chevron-down"></i></div>
                    </a>
                    <ul class="sidebar-menu sidebar-menu-dropdown-content">
                        <li>
                            <a href="{{route("producto.index")}}">
                                Productos
                            </a>
                        </li>
                        <li>
                            <a href="{{route("producto.create")}}">
                                Agregar producto
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-submenu">
                    <a href="{{route("cliente.index")}}" class="sidebar-menu-dropdown">
                        <i class="bx bxs-user"></i>
                        <span>Clientes</span>
                        <div class="dropdown-icon"><i class="bx bx-chevron-down"></i></div>
                    </a>
                    <ul class="sidebar-menu sidebar-menu-dropdown-content">
                        <li>
                            <a href="{{route("cliente.index")}}">
                                Clientes
                            </a>
                        </li>
                        <li>
                            <a href="{{route("cliente.create")}}">
                                Agregar cliente
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="d-none">
                    <a href="#">
                        <i class="bx bxs-message-rounded-detail"></i>
                        <span>Message</span>
                    </a>
                </li>
                <li>
                    <a class="darkmode-toggle" id="darkmode-toggle" onclick="switchTheme()">
                        <div>
                            <i class="bx bx-cog mr-10"></i>
                            <span>Modo Oscuro</span>
                        </div>
                        <span class="darkmode-switch"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-header">
        <div class="d-flex">
            <div class="mobile-toggle" id="mobile-toggle">
                <i class="bx bx-menu"></i>
            </div>
            <div class="main-title">@yield('title', 'Dashboard')</div>
        </div>
        <div class="d-flex align-items-center">
            <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="Buscar" />
                    <span class="bx bx-search-alt"></span>
                </div>
            </form>
            <div class="dropdown d-inline-block d-lg-none ms-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-search-alt"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-search-dropdown">
                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ..."
                                    aria-label="Recipient's username" />
                                <div class="input-group-append">
                                    <button class="btn btn-primary h-100" type="submit">
                                        <i class="bx bx-search-alt"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="dropdown d-inline-block mt-12">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user d-none" src="/dashboard/images/profile/profile.png"
                        alt="Header Avatar" />
                    <span class="pulse-css d-none"></span>
                    <span class="info d-xl-inline-block color-span">
                        <span class="d-block fs-20 font-w600">{{ Auth::user()->name }}</span>
                        <span class="d-block mt-7"><a class="__cf_email__"
                                data-cfemail="1062717e74693e62797c756950777d71797c3e737f7d">{{ Auth::user()->email }}</a></span>
                    </span>
                    <i class="bx bx-chevron-down"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="{{ route('index') }}#"><i
                            class="bx bx-user font-size-16 align-middle me-1"></i>
                        <span>Perfil</span></a>
                    <a class="dropdown-item d-none" href="{{ route('index') }}#"><i
                            class="bx bx-wallet font-size-16 align-middle me-1"></i>
                        <span>My Wallet</span></a>
                    <a class="dropdown-item d-block" href="{{ route('index') }}#"><i
                            class="bx bx-wrench font-size-16 align-middle me-1"></i>
                        <span>Ajustes</span></a>
                    <a class="dropdown-item" href="{{ route('index') }}"><i
                            class="bx bx-lock-open font-size-16 align-middle me-1"></i>
                        <span>Ver pagina</span></a>
                    <div class="dropdown-divider"></div>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="dropdown-item text-danger" href="user-login.html"><i
                                class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i>
                            <span>Cerrar sesion</span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="main">
        @yield('main-menu')
    </div>

    <div class="overlay"></div>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="/dashboard/libs/moment/min/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="/dashboard/libs/peity/jquery.peity.min.js"></script>
    <script src="/dashboard/libs/chart.js/Chart.bundle.min.js"></script>
    <script src="/dashboard/libs/owl.carousel/owl.carousel.min.js"></script>
    <script src="/dashboard/libs/simplebar/simplebar.min.js"></script>
    <script src="/dashboard/js/main.js"></script>
    <script src="/dashboard/js/shortcode.js"></script>
    @stack('js')
</body>

</html>
