<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Aserradero - @yield('title') </title>
    <link rel="canonical" href="https://themazine.com/mr/woodza-html/{{route('index')}}" />
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicons/favicon-16x16.png" />
    <meta name="description" content="Woodza HTML 5 Template " />
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="//fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link
        href="//fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="/assets/vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="/assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="/assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="/assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="/assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="/assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="/assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="/assets/vendors/woodza-icons/style.css">
    <link rel="stylesheet" href="/assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="/assets/vendors/reey-font/stylesheet.css" />
    <link rel="stylesheet" href="/assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="/assets/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="/assets/vendors/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" href="/assets/vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/vegas/2.5.4/vegas.min.css"
        integrity="sha512-fSKum0u74TzF+eAXxBS0oIp3LlON1gd++1rifA0ZnQWKP2JXbCdomS2k0BDEM7v0se7mQOpOwedRw/lRsSPAaA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="/assets/vendors/timepicker/timePicker.css" />
    <link rel="stylesheet" href="/assets/vendors/polyglot-language-switcher/polyglot-language-switcher.css" />
    <!-- template styles -->
    <link rel="stylesheet" href="/assets/css/woodza.css" />
    <link rel="stylesheet" href="/assets/css/woodza-responsive.css" />
</head>

<body>

    <body class="custom-cursor">
        <div class="custom-cursor__cursor"></div>
        <div class="custom-cursor__cursor-two"></div>
        <div class="preloader">
            <div class="preloader__image"></div>
        </div>
        <!-- /.preloader -->
        <div class="page-wrapper">
            <header class="main-header clearfix">
                <div class="main-header__top">
                    <div class="container">
                        <div class="main-header__top-inner clearfix">
                            <div class="main-header__top-left">
                                <div class="main-header__top-logo">
                                    <a href="{{route('index')}}"><img src="/assets/images/resources/logo-1.png"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="main-header__top-right">
                                <ul class="list-unstyled main-header__top-contact">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-location"></span>
                                        </div>
                                        <div class="content">
                                            <p>Ubicación rápida</p>
                                            <h5>#14 huallayco, Huanuco</h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-email-1"></span>
                                        </div>
                                        <div class="content">
                                            <p>Correo electrónico!</p>
                                            <h5><a href="mailto:helpus24@gmail.com">mail@gmail.com</a></h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-phone"></span>
                                        </div>
                                        <div class="content">
                                            <p>Número de teléfono</p>
                                            <h5><a href="tel:88001152">(51) 930 900 900 LLamar</a></h5>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="main-menu clearfix">
                    <div class="main-menu__wrapper clearfix">
                        <div class="container">
                            <div class="main-menu__wrapper-inner clearfix">
                                <div class="main-menu__left">
                                    <div class="main-menu__main-menu-box">
                                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                        <ul class="main-menu__list">
                                            <li @class(['current' => request()->is('index')])>
                                                <a href="{{route('index')}}">Inicio </a>
                                            </li>
                                            <li @class(['current' => request()->is('servicios')])>
                                                <a href="{{route('servicios')}}">Servicios</a>
                                            </li>
                                            <li @class(['current' => request()->is('proyectos')])>
                                                <a href="{{route('proyectos')}}">Proyectos</a>
                                            </li>
                                            <li @class(['current' => request()->is('nosotros')])>
                                                <a href="{{route('nosotros')}}">Nosotros</a>
                                            </li>
                                            <li @class(['current' => request()->is('contacto')])>
                                                <a href="{{route('contacto')}}">Contacto</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="main-menu__right">
                                    <div class="main-menu__search-btn">
                                        <div class="main-menu__search-box">
                                            <a href="#"
                                                class="main-menu__search search-toggler icon-search-1"></a>
                                        </div>
                                        <div class="main-menu__btn-box">
                                            <a href="{{route('contacto')}}">Contactar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
            <div class="stricky-header stricked-menu main-menu">
                <div class="sticky-header__content"></div>
            </div>
            @yield('container')

            <!--Site Footer Start-->
            <footer class="site-footer">
                <div class="site-footer-bg"
                    style="background-image: url(/assets/images/backgrounds/site-footer-bg.jpg);">
                </div>
                <div class="site-footer__top">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                                <div class="footer-widget__column footer-widget__about">
                                    <div class="footer-widget__logo">
                                        <a href="{{route('index')}}"><img src="/assets/images/resources/footer-logo.png"
                                                alt=""></a>
                                    </div>
                                    <div class="footer-widget__about-text-box">
                                        <p class="footer-widget__about-text">Suscríbete y recibe las últimas noticias, consejos y actualizaciones en tu bandeja de entrada</p>
                                    </div>
                                    <form class="footer-widget__subscribe-box">
                                        <div class="footer-widget__subscribe-input-box">
                                            <input type="email" placeholder="Email address" name="email">
                                            <button type="submit" class="footer-widget__subscribe-btn"><i
                                                    class="far fa-paper-plane"></i></button>
                                        </div>
                                    </form>
                                    <div class="site-footer__social">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                                <div class="footer-widget__column footer-widget__service clearfix">
                                    <div class="footer-widget__title-box">
                                        <h3 class="footer-widget__title">Servicios</h3>
                                    </div>
                                    <ul class="footer-widget__service-list list-unstyled clearfix">
                                        <li><a href="#">Carpinteria</a></li>
                                        <li><a href="#">Pisos de madera dura</a></li>
                                        <li><a href="#">Techo y techado</a></li>
                                        <li><a href="#">Renovación de la casa</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                                <div class="footer-widget__column footer-widget__link clearfix">
                                    <div class="footer-widget__title-box">
                                        <h3 class="footer-widget__title">Compañia</h3>
                                    </div>
                                    <ul class="footer-widget__link-list list-unstyled clearfix">
                                        <li><a href="{{route('index')}}">Inicio</a></li>
                                        <li><a href="{{route('nosotros')}}">Nosotros</a></li>
                                        <li><a href="{{route("servicios")}}">Servicios</a></li>
                                        <li><a href="#">Nuestros proyectos</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                                <div class="footer-widget__column footer-widget__contact clearfix">
                                    <div class="footer-widget__title-box">
                                        <h3 class="footer-widget__title">Contacto</h3>
                                    </div>
                                    <ul class="footer-widget__contact-list list-unstyled clearfix">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-email-1"></span>
                                            </div>
                                            <div class="text">
                                                <p><a href="mailto:mail@gmail.com">mail@gmail.com</a></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-phone"></span>
                                            </div>
                                            <div class="text">
                                                <p><a href="tel:0881122334455">+51 930 900 900</a></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-location"></span>
                                            </div>
                                            <div class="text">
                                                <p>Huanuco, Jr Huallayco, PE</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="site-footer__bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="site-footer__bottom-inner">
                                    <p class="site-footer__bottom-text">© 2022 <a href="#">website.com</a> Todos los derechos reservados</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!--Site Footer End-->
        </div><!-- /.page-wrapper -->
        <div class="mobile-nav__wrapper">
            <div class="mobile-nav__overlay mobile-nav__toggler"></div>
            <!-- /.mobile-nav__overlay -->
            <div class="mobile-nav__content">
                <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>
                <div class="logo-box">
                    <a href="{{route('index')}}" aria-label="logo image"><img src="/assets/images/resources/footer-logo.png"
                            width="143" alt="" /></a>
                </div>
                <!-- /.logo-box -->
                <div class="mobile-nav__container"></div>
                <!-- /.mobile-nav__container -->
                <ul class="mobile-nav__contact list-unstyled">
                    <li>
                        <i class="fa fa-envelope"></i>
                        <a href="mailto:needhelp@packageName__.com">needhelp@woodza.com</a>
                    </li>
                    <li>
                        <i class="fa fa-phone-alt"></i>
                        <a href="tel:666-888-0000">666 888 0000</a>
                    </li>
                </ul><!-- /.mobile-nav__contact -->
                <div class="mobile-nav__top">
                    <div class="mobile-nav__social">
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-facebook-square"></a>
                        <a href="#" class="fab fa-pinterest-p"></a>
                        <a href="#" class="fab fa-instagram"></a>
                    </div><!-- /.mobile-nav__social -->
                </div><!-- /.mobile-nav__top -->
            </div>
            <!-- /.mobile-nav__content -->
        </div>
        <!-- /.mobile-nav__wrapper -->
        <div class="search-popup">
            <div class="search-popup__overlay search-toggler"></div>
            <!-- /.search-popup__overlay -->
            <div class="search-popup__content">
                <form action="#">
                    <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                    <input type="text" id="search" placeholder="Search Here..." />
                    <button type="submit" aria-label="search submit" class="thm-btn">
                        <i class="icon-search-1"></i>
                    </button>
                </form>
            </div>
            <!-- /.search-popup__content -->
        </div>
        <!-- /.search-popup -->
        <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i
                class="fa fa-angle-up"></i></a>
        <script src="/assets/vendors/jquery/jquery-3.6.0.min.js"></script>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jarallax/2.0.4/jarallax.min.js"
            integrity="sha512-nvmYAfRcRhffFD47Bz2In79HI86Zw84cCPXs675EjUYqgLAkirq2N38LXI6U5r6UZ+vz2zqBWxRQaScpjPwF5A=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
        <script src="/assets/vendors/jquery-appear/jquery.appear.min.js"></script>
        <script src="/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
        <script src="/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="/assets/vendors/jquery-validate/jquery.validate.min.js"></script>
        <script src="/assets/vendors/nouislider/nouislider.min.js"></script>
        <script src="/assets/vendors/odometer/odometer.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
        <script src="/assets/vendors/tiny-slider/tiny-slider.min.js"></script>
        <script src="/assets/vendors/wnumb/wNumb.min.js"></script>
        <script src="/assets/vendors/wow/wow.js"></script>
        <script src="/assets/vendors/isotope/isotope.js"></script>
        <script src="/assets/vendors/countdown/countdown.min.js"></script>
        <script src="/assets/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="/assets/vendors/bxslider/jquery.bxslider.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js"
            integrity="sha512-yDlE7vpGDP7o2eftkCiPZ+yuUyEcaBwoJoIhdXv71KZWugFqEphIS3PU60lEkFaz8RxaVsMpSvQxMBaKVwA5xg=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vegas/2.5.4/vegas.min.js"
            integrity="sha512-lYAcY5E6LZVeNB3Pky37SxbYKzo8A68MzKFoPg5oTuolhRm36D+YRvkrAQS4JuKsaGYeJ5KA5taMEtpNlPUeOA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="/assets/vendors/jquery-ui/jquery-ui.js"></script>
        <script src="/assets/vendors/timepicker/timePicker.js"></script>
        <script src="/assets/vendors/circleType/jquery.circleType.js"></script>
        <script src="/assets/vendors/circleType/jquery.lettering.min.js"></script>
        <script src="/assets/vendors/polyglot-language-switcher/jquery.polyglot.language.switcher.js"></script>
        <!-- template js -->
        <script src="/assets/js/woodza.js"></script>
        @stack('scripts')
    </body>
</body>

</html>
