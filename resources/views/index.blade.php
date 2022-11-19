@extends('layouts.app')
@section('title', 'MULTISERV Y NEG. YUREM')
@section('container')
    <section class="main-slider clearfix">
        <div class="swiper thm-swiper__slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url(/assets/images/backgrounds/main-slider-1-1.jpg);">
                    </div>
                    <!-- /.image-layer -->
                    <div class="main-slider-overly-one"></div>
                    <div class="main-slider-overly-two"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                    <p class="main-slider__sub-title">Trabajo en madera de calidad</p>
                                    <h2 class="main-slider__title">Brindamos servicios <br>de carpínteria de <br>calidad.
                                    </h2>
                                    <div class="main-slider__btn-box">
                                        <a href="{{ route('servicios') }}" class="thm-btn main-slider__btn">Nuestros
                                            Servicios</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url(/assets/images/backgrounds/main-slider-1-2.jpg);">
                    </div>
                    <!-- /.image-layer -->
                    <div class="main-slider-overly-one"></div>
                    <div class="main-slider-overly-two"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                    <p class="main-slider__sub-title">Trabajo en madera de calidad</p>
                                    <h2 class="main-slider__title">de carplpteqa de "< br>de carpínteria de <br>calidad.
                                    </h2>
                                    <div class="main-slider__btn-box">
                                        <a href="{{ route('servicios') }}" class="thm-btn main-slider__btn">Nuestros
                                            Servicios</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url(/assets/images/backgrounds/main-slider-1-3.jpg);">
                    </div>
                    <!-- /.image-layer -->
                    <div class="main-slider-overly-one"></div>
                    <div class="main-slider-overly-two"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                    <p class="main-slider__sub-title">Trabajo en madera de calidad</p>
                                    <h2 class="main-slider__title">calidad <br>de carpínteria de <br>calidad.</h2>
                                    <div class="main-slider__btn-box">
                                        <a href="{{ route('servicios') }}" class="thm-btn main-slider__btn">Nuestros
                                            Servicios</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- If we need navigation buttons -->
            <div class="main-slider__nav">
                <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                    <i class="icon-left-arrow-3"></i>
                </div>
                <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                    <i class="icon-right-arrow-3"></i>
                </div>
            </div>
        </div>
    </section>
    <!--Main Slider End-->
    <!--Famous Company Start-->
    <section class="famous-company">
        <div class="famous-company-shape-1 float-bob-x">
            <img src="/assets/images/shapes/famous-company-shape-1.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <!--Famous Company Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="famous-company__single">
                        <div class="famous-company__icon">
                            <img src="/assets/images/icon/famous-company-icon-1.png" alt="">
                        </div>
                        <h3 class="famous-company__title"><a href="{{ route('servicios') }}">Carpintería creativa</a></h3>
                        <p class="famous-company__text">Lorem ipsum dolor sitame aenean are is mode </p>
                        <div class="famous-company__read-more">
                            <a href="{{ route('servicios') }}">
                                <i class="fas fa-arrow-right"></i>
                                <span>Leer más</span>
                            </a>
                        </div>
                        <div class="famous-company__shape-1"></div>
                    </div>
                </div>
                <!--Famous Company Single End-->
                <!--Famous Company Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="famous-company__single">
                        <div class="famous-company__icon">
                            <img src="/assets/images/icon/famous-company-icon-2.png" alt="">
                        </div>
                        <h3 class="famous-company__title"><a href="{{ route('servicios') }}">Materiales Certificados</a>
                        </h3>
                        <p class="famous-company__text">Lorem ipsum dolor sitame aenean are is mode </p>
                        <div class="famous-company__read-more">
                            <a href="{{ route('servicios') }}">
                                <i class="fas fa-arrow-right"></i>
                                <span>Leer más</span>
                            </a>
                        </div>
                        <div class="famous-company__shape-1"></div>
                    </div>
                </div>
                <!--Famous Company Single End-->
                <!--Famous Company Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="famous-company__single">
                        <div class="famous-company__icon">
                            <img src="/assets/images/icon/famous-company-icon-3.png" alt="">
                        </div>
                        <h3 class="famous-company__title"><a href="{{ route('servicios') }}">Tarifas muy económicas</a>
                        </h3>
                        <p class="famous-company__text">Lorem ipsum dolor sitame aenean are is mode </p>
                        <div class="famous-company__read-more">
                            <a href="{{ route('servicios') }}">
                                <i class="fas fa-arrow-right"></i>
                                <span>Leer más</span>
                            </a>
                        </div>
                        <div class="famous-company__shape-1"></div>
                    </div>
                </div>
                <!--Famous Company Single End-->
                <!--Famous Company Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="famous-company__single">
                        <div class="famous-company__icon">
                            <img src="/assets/images/icon/famous-company-icon-4.png" alt="">
                        </div>
                        <h3 class="famous-company__title"><a href="">Modelado de cocina</a></h3>
                        <p class="famous-company__text">Lorem ipsum dolor sitame aenean are is mode </p>
                        <div class="famous-company__read-more">
                            <a href="#">
                                <i class="fas fa-arrow-right"></i>
                                <span>Leer más</span>
                            </a>
                        </div>
                        <div class="famous-company__shape-1"></div>
                    </div>
                </div>
                <!--Famous Company Single End-->
            </div>
        </div>
    </section>
    <!--Famous Company End-->
    <!--Why Choose One Start-->
    <section class="why-choose-one">
        <div class="why-choose-one-shape float-bob-x">
            <img src="/assets/images/shapes/why-choose-one-shape-1.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="why-choose-one__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="why-choose-one__img-box">
                            <div class="why-choose-one__img">
                                <img src="/assets/images/resources/why-choose-one-img-1.jpg" alt="">
                                <div class="why-choose-one__dot float-bob-y">
                                    <img src="/assets/images/shapes/why-choose-one-dot.png" alt="">
                                </div>
                            </div>
                            <div class="why-choose-one__img-two">
                                <img src="/assets/images/resources/why-choose-one-img-2.jpg" alt="">
                            </div>
                            <div class="why-choose-one__border"></div>
                            <div class="why-choose-one__customer-service">
                                <div class="why-choose-one__customer-service-icon">
                                    <span class="icon-emoji-chat-message"></span>
                                </div>
                                <div class="why-choose-one__customer-service-content">
                                    <h4>Excelente <br>servicio al cliente</h4>
                                </div>
                                <div class="why-choose-one__customer-service-dot float-bob-x">
                                    <img src="/assets/images/shapes/why-choose-one-customer-service-dot.png"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="why-choose-one__right">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">NUESTRO VIAJE</span>
                            <h2 class="section-title__title">Bienvenido a Nuestros Servicios</h2>
                        </div>
                        <p class="why-choose-one__text-1">Nosotros, en Website proporcionamos todo tipo de carpintería y
                            carpintería.</p>
                        <ul class="list-unstyled why-choose-one__points">
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <div class="text">
                                    <p>Proporcionamos el costo más razonable.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <div class="text">
                                    <p>Terminar el trabajo antes de la fecha límite</p>
                                </div>
                            </li>
                        </ul>
                        <p class="why-choose-one__text-2">Más de 20 años de experiencia brindando carpintería de alta
                            calidad en todo el mundo</p>
                        <div class="why-choose-one__bottom">
                            <div class="why-choose-one__bottom-content">
                                <p class="why-choose-one__bottom-text">Creamos carpinterías únicas y personalizadas.</p>
                            </div>
                            <div class="why-choose-one__user">
                                <div class="why-choose-one__user-img">
                                    <img src="/assets/images/resources/why-choose-one-user-img.jpg" alt="">
                                </div>
                                <div class="why-choose-one__user-sign">
                                    <img src="/assets/images/resources/why-choose-one-user-sign.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Why Choose One End-->
    <!--Services One Start-->
    <section class="services-one">
        <div class="services-one-bg" style="background-image: url(/assets/images/backgrounds/services-one-bg.jpg);">
        </div>
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Nuestros Servicios</span>
                <h2 class="section-title__title">Algunos de nuestros servicios</h2>
            </div>
            <div class="row">
                <!--Services One Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="services-one__single">
                        <div class="services-one__img">
                            <img src="/assets/images/services/services-1-1.jpg" alt="">
                        </div>
                        <div class="services-one__content">
                            <div class="services-one__icon">
                                <span class="icon-table"></span>
                            </div>
                            <h3 class="services-one__title"><a href="/"{{ route('servicios') }}">Muebles de
                                    madera</a></h3>
                            <p class="services-one__text">Lorem ipsum dolor sit ameet aenean commodo nec ligula
                                lorem ipsum</p>
                            <div class="services-one__arrow">
                                <a href="/"{{ route('servicios') }}"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="services-one__shape-1"></div>
                    </div>
                </div>
                <!--Services One Single End-->
                <!--Services One Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="services-one__single">
                        <div class="services-one__img">
                            <img src="/assets/images/services/services-1-2.jpg" alt="">
                        </div>
                        <div class="services-one__content">
                            <div class="services-one__icon">
                                <span class="icon-chainsaw"></span>
                            </div>
                            <h3 class="services-one__title"><a href="{{ route('servicios') }}">Renovación del hogar</a>
                            </h3>
                            <p class="services-one__text">Lorem ipsum dolor sit ameet aenean commodo nec ligula
                                lorem ipsum</p>
                            <div class="services-one__arrow">
                                <a href="{{ route('servicios') }}"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="services-one__shape-1"></div>
                    </div>
                </div>
                <!--Services One Single End-->
                <!--Services One Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="services-one__single">
                        <div class="services-one__img">
                            <img src="/assets/images/services/services-1-3.jpg" alt="">
                        </div>
                        <div class="services-one__content">
                            <div class="services-one__icon">
                                <span class="icon-wood-pile"></span>
                            </div>
                            <h3 class="services-one__title"><a href="{{ route('servicios') }}">Trabajo de madera dura</a>
                            </h3>
                            <p class="services-one__text">Lorem ipsum dolor sit ameet aenean commodo nec ligula
                                lorem ipsum</p>
                            <div class="services-one__arrow">
                                <a href="{{ route('servicios') }}"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="services-one__shape-1"></div>
                    </div>
                </div>
                <!--Services One Single End-->
                <!--Services One Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="services-one__single">
                        <div class="services-one__img">
                            <img src="/assets/images/services/services-1-4.jpg" alt="">
                        </div>
                        <div class="services-one__content">
                            <div class="services-one__icon">
                                <span class="icon-table"></span>
                            </div>
                            <h3 class="services-one__title"><a href="{{ route('servicios') }}">Muebles de madera</a></h3>
                            <p class="services-one__text">Lorem ipsum dolor sit ameet aenean commodo nec ligula
                                lorem ipsum</p>
                            <div class="services-one__arrow">
                                <a href="{{ route('servicios') }}"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="services-one__shape-1"></div>
                    </div>
                </div>
                <!--Services One Single End-->
            </div>
        </div>
    </section>
    <!--Services One End-->
    <!--Working Process Start-->
    <section class="working-process">
        <div class="working-process-shpae-one"
            style="background-image: url(/assets/images/shapes/working-process-shape-1.png);"></div>
        <div class="container">
            <div class="working-process__title-box">
                <h2>Proceso de trabajo</h2>
                <p>Nuestro equipo dedicado se especializa en la fabricación de todo tipo de muebles</p>
            </div>
            <div class="working-process__inner">
                <div class="working-process__dot-1">
                    <img src="/assets/images/shapes/working-process-dot-1.png" alt="">
                </div>
                <div class="working-process__dot-2">
                    <img src="/assets/images/shapes/working-process-dot-2.png" alt="">
                </div>
                <div class="row">
                    <!--Working Process Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="working-process__single">
                            <div class="working-process__icon">
                                <span class="icon-circular-saw"></span>
                            </div>
                            <h3 class="working-process__title"><a href="/project-01.html">Consultar caso</a></h3>
                            <p class="working-process__text">Lorem ipsum dolor sitame aenean are is mode </p>
                            <div class="working-process__count"></div>
                        </div>
                    </div>
                    <!--Working Process Single End-->
                    <!--Working Process Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="working-process__single">
                            <div class="working-process__icon">
                                <span class="icon-wrench"></span>
                            </div>
                            <h3 class="working-process__title"><a href="/project-02.html">Hacer plan</a></h3>
                            <p class="working-process__text">Lorem ipsum dolor sitame aenean are is mode </p>
                            <div class="working-process__count"></div>
                        </div>
                    </div>
                    <!--Working Process Single End-->
                    <!--Working Process Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="working-process__single working-process__single--last">
                            <div class="working-process__icon">
                                <span class="icon-success1"></span>
                            </div>
                            <h3 class="working-process__title"><a href="/project-01.html">Proyecto de éxito</a></h3>
                            <p class="working-process__text">Lorem ipsum dolor sitame aenean are is mode </p>
                            <div class="working-process__count"></div>
                        </div>
                    </div>
                    <!--Working Process Single End-->
                </div>
            </div>
        </div>
    </section>
    <!--Working Process End-->
    <!--Problem Solved Start-->
    <section class="problem-solved">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="problem-solved__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="problem-solved__img-box">
                            <div class="problem-solved__img">
                                <img src="/assets/images/resources/problem-solved-img-1.jpg" alt="">
                            </div>
                        </div>
                        <div class="problem-solved__content">
                            <h3 class="problem-solved__title">3k Problemas Resueltos</h3>
                            <p class="problem-solved__text">Every business is different, Lorem ipsum is simply free
                                text used.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="problem-solved__right wow slideInRight" data-wow-delay="100ms"
                        data-wow-duration="2500ms">
                        <div class="problem-solved__right-content">
                            <h3 class="problem-solved__right-title">Renovación de escaleras</h3>
                            <p class="problem-solved__right-text">Breathe a new life into your old staircase with
                                our bespoke joinery services dolor sit</p>
                        </div>
                        <div class="problem-solved__btn-box">
                            <a href="/project-01.html" class="thm-btn problem-solved__btn">Ver Servicios</a>
                        </div>
                        <div class="problem-solved__shape-1 float-bob-x"></div>
                        <div class="problem-solved__shape-2 float-bob-y"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Problem Solved End-->
    <!--Project One Start-->
    <section class="project-one">
        <div class="project-one__title-box">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-6">
                        <div class="project-one__title-box-left">
                            <span class="section-title__tagline">Nuestros Proyectos</span>
                            <h2 class="section-title__title">Nuestra última historia de éxito en el lugar de trabajo</h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="project-one__text-box">
                        <p class="project-one__text">Lorem Ipsum available, but the majority have suffered
                            dimply free text Suspe ndisse suscipit sagittis dolore magna aliqua ipsum quia </p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="project-one__top">
            <div class="owl-carousel owl-theme thm-owl__carousel project-one__carousel"
                data-owl-options='{
            "loop": true,
            "autoplay": false,
            "margin": 0,
            "nav": false,
            "dots": true,
            "smartSpeed": 500,
            "autoplayTimeout": 10000,
            "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
            "responsive": {
                "0": {
                    "items": 1
                },
                "768": {
                    "items": 2
                },
                "992": {
                    "items": 2
                },
                "1200": {
                    "items": 4
                }
            }
        }'>
                <!--Project One Single Start-->
                <div class="item">
                    <div class="project-one__single">
                        <div class="project-one__img">
                            <img src="/assets/images/project/project-1-1.jpg" alt="">
                            <div class="project-one__content">
                                <div class="project-one__content-title-box">
                                    <span>Diseño de muebles</span>
                                    <h3><a href="">Modelado de cocina</a></h3>
                                </div>
                                <p class="project-one__content-text">Lorem ipsum dolor sit amet, consectet notted
                                    adipisicing dolore magna aliqu lonm dolore magna aliqua lonm </p>
                                <div class="project-one__btn-box">
                                    <a href="" class="thm-btn project-one__btn">Ver proyecto</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Project One Single End-->
                <!--Project One Single Start-->
                <div class="item">
                    <div class="project-one__single">
                        <div class="project-one__img">
                            <img src="/assets/images/project/project-1-2.jpg" alt="">
                            <div class="project-one__content">
                                <div class="project-one__content-title-box">
                                    <span>Diseño de muebles</span>
                                    <h3><a href="/door-wood-work.html">Door Wood Work</a></h3>
                                </div>
                                <p class="project-one__content-text">Lorem ipsum dolor sit amet, consectet notted
                                    adipisicing dolore magna aliqu lonm dolore magna aliqua lonm </p>
                                <div class="project-one__btn-box">
                                    <a href="/door-wood-work.html" class="thm-btn project-one__btn">View Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Project One Single End-->
                <!--Project One Single Start-->
                <div class="item">
                    <div class="project-one__single">
                        <div class="project-one__img">
                            <img src="/assets/images/project/project-1-3.jpg" alt="">
                            <div class="project-one__content">
                                <div class="project-one__content-title-box">
                                    <span>Diseño de muebles</span>
                                    <h3><a href="/hardwood-flooring.html">Hardwood Flooring</a></h3>
                                </div>
                                <p class="project-one__content-text">Lorem ipsum dolor sit amet, consectet notted
                                    adipisicing dolore magna aliqu lonm dolore magna aliqua lonm </p>
                                <div class="project-one__btn-box">
                                    <a href="/hardwood-flooring.html" class="thm-btn project-one__btn">Ver proyecto</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Project One Single End-->
                <!--Project One Single Start-->
                <div class="item">
                    <div class="project-one__single">
                        <div class="project-one__img">
                            <img src="/assets/images/project/project-1-4.jpg" alt="">
                            <div class="project-one__content">
                                <div class="project-one__content-title-box">
                                    <span>Diseño de muebles</span>
                                    <h3><a href="/celling-roofing.html">Ceiling & Roofing</a></h3>
                                </div>
                                <p class="project-one__content-text">Lorem ipsum dolor sit amet, consectet notted
                                    adipisicing dolore magna aliqu lonm dolore magna aliqua lonm </p>
                                <div class="project-one__btn-box">
                                    <a href="/celling-roofing.html" class="thm-btn project-one__btn">View Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Project One Single End-->
                <!--Project One Single Start-->
                <div class="item">
                    <div class="project-one__single">
                        <div class="project-one__img">
                            <img src="/assets/images/project/project-1-1.jpg" alt="">
                            <div class="project-one__content">
                                <div class="project-one__content-title-box">
                                    <span>Diseño de muebles</span>
                                    <h3><a href="/commercial-work.html">Commercial work</a></h3>
                                </div>
                                <p class="project-one__content-text">Lorem ipsum dolor sit amet, consectet notted
                                    adipisicing dolore magna aliqu lonm dolore magna aliqua lonm </p>
                                <div class="project-one__btn-box">
                                    <a href="/commercial-work.html" class="thm-btn project-one__btn">View Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Project One Single End-->
                <!--Project One Single Start-->
                <div class="item">
                    <div class="project-one__single">
                        <div class="project-one__img">
                            <img src="/assets/images/project/project-1-2.jpg" alt="">
                            <div class="project-one__content">
                                <div class="project-one__content-title-box">
                                    <span>Diseño de muebles</span>
                                    <h3><a href="/furniture-designing.html">Diseño de mueblesing</a>
                                    </h3>
                                </div>
                                <p class="project-one__content-text">Lorem ipsum dolor sit amet, consectet notted
                                    adipisicing dolore magna aliqu lonm dolore magna aliqua lonm </p>
                                <div class="project-one__btn-box">
                                    <a href="/furniture-designing.html" class="thm-btn project-one__btn">Ver proyecto</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Project One Single End-->
                <!--Project One Single Start-->
                <div class="item">
                    <div class="project-one__single">
                        <div class="project-one__img">
                            <img src="/assets/images/project/project-1-3.jpg" alt="">
                            <div class="project-one__content">
                                <div class="project-one__content-title-box">
                                    <span>Diseño de muebles</span>
                                    <h3><a href="">Modelado de cocina</a></h3>
                                </div>
                                <p class="project-one__content-text">Lorem ipsum dolor sit amet, consectet notted
                                    adipisicing dolore magna aliqu lonm dolore magna aliqua lonm </p>
                                <div class="project-one__btn-box">
                                    <a href="" class="thm-btn project-one__btn">Ver proyecto</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Project One Single End-->
                <!--Project One Single Start-->
                <div class="item">
                    <div class="project-one__single">
                        <div class="project-one__img">
                            <img src="/assets/images/project/project-1-4.jpg" alt="">
                            <div class="project-one__content">
                                <div class="project-one__content-title-box">
                                    <span>Diseño de muebles</span>
                                    <h3><a href="/door-wood-work.html">Door Wood Work</a></h3>
                                </div>
                                <p class="project-one__content-text">Lorem ipsum dolor sit amet, consectet notted
                                    adipisicing dolore magna aliqu lonm dolore magna aliqua lonm </p>
                                <div class="project-one__btn-box">
                                    <a href="/door-wood-work.html" class="thm-btn project-one__btn">View Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Project One Single End-->
                <!--Project One Single Start-->
                <div class="item">
                    <div class="project-one__single">
                        <div class="project-one__img">
                            <img src="/assets/images/project/project-1-1.jpg" alt="">
                            <div class="project-one__content">
                                <div class="project-one__content-title-box">
                                    <span>Diseño de muebles</span>
                                    <h3><a href="/hardwood-flooring.html">Hardwood Flooring</a></h3>
                                </div>
                                <p class="project-one__content-text">Lorem ipsum dolor sit amet, consectet notted
                                    adipisicing dolore magna aliqu lonm dolore magna aliqua lonm </p>
                                <div class="project-one__btn-box">
                                    <a href="/hardwood-flooring.html" class="thm-btn project-one__btn">Ver proyecto</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Project One Single End-->
                <!--Project One Single Start-->
                <div class="item">
                    <div class="project-one__single">
                        <div class="project-one__img">
                            <img src="/assets/images/project/project-1-2.jpg" alt="">
                            <div class="project-one__content">
                                <div class="project-one__content-title-box">
                                    <span>Diseño de muebles</span>
                                    <h3><a href="/celling-roofing.html">Ceiling & Roofing</a></h3>
                                </div>
                                <p class="project-one__content-text">Lorem ipsum dolor sit amet, consectet notted
                                    adipisicing dolore magna aliqu lonm dolore magna aliqua lonm </p>
                                <div class="project-one__btn-box">
                                    <a href="/celling-roofing.html" class="thm-btn project-one__btn">View Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Project One Single End-->
                <!--Project One Single Start-->
                <div class="item">
                    <div class="project-one__single">
                        <div class="project-one__img">
                            <img src="/assets/images/project/project-1-3.jpg" alt="">
                            <div class="project-one__content">
                                <div class="project-one__content-title-box">
                                    <span>Diseño de muebles</span>
                                    <h3><a href="/commercial-work.html">Commercial work</a></h3>
                                </div>
                                <p class="project-one__content-text">Lorem ipsum dolor sit amet, consectet notted
                                    adipisicing dolore magna aliqu lonm dolore magna aliqua lonm </p>
                                <div class="project-one__btn-box">
                                    <a href="/commercial-work.html" class="thm-btn project-one__btn">View Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Project One Single End-->
                <!--Project One Single Start-->
                <div class="item">
                    <div class="project-one__single">
                        <div class="project-one__img">
                            <img src="/assets/images/project/project-1-4.jpg" alt="">
                            <div class="project-one__content">
                                <div class="project-one__content-title-box">
                                    <span>Diseño de muebles</span>
                                    <h3><a href="/furniture-designing.html">Diseño de mueblesing</a>
                                    </h3>
                                </div>
                                <p class="project-one__content-text">Lorem ipsum dolor sit amet, consectet notted
                                    adipisicing dolore magna aliqu lonm dolore magna aliqua lonm </p>
                                <div class="project-one__btn-box">
                                    <a href="/furniture-designing.html" class="thm-btn project-one__btn">Ver proyecto</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Project One Single End-->
            </div>
        </div>
        <div class="project-one__bottom">
            <div class="project-one__bottom-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                style="background-image: url(/assets/images/backgrounds/project-one-bottom-bg.jpg);">
            </div>
            <div class="container">
                <div class="project-one__bottom-inner">
                    <div class="project-one__bottom-left">
                        <h2 class="project-one__bottom-title">Somos el equipo que necesitas para hacer las cosas.
                        </h2>
                    </div>
                    <div class="project-one__bottom-btn-box">
                        <a href="/project-01.html" class="thm-btn project-one__bottom-btn">Ver proyectos</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Project One End-->
    <!--Team One Start-->
    <section class="team-one">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Miembro del Equipo</span>
                <h2 class="section-title__title">Conozca a los profesionales</h2>
            </div>
            <div class="row">
                <!--Team One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="team-one__single">
                        <div class="team-one__img">
                            <img src="/assets/images/team/team-1-1.jpg" alt="">
                            <div class="team-one__content">
                                <p class="team-one__sub-title">Diseño de mueblesing</p>
                                <h3 class="team-one__title"><a href="/team.html">Adam Smite</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
                <!--Team One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="team-one__single">
                        <div class="team-one__img">
                            <img src="/assets/images/team/team-1-2.jpg" alt="">
                            <div class="team-one__content">
                                <p class="team-one__sub-title">Co founder</p>
                                <h3 class="team-one__title"><a href="/team.html">John David</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
                <!--Team One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                    <div class="team-one__single">
                        <div class="team-one__img">
                            <img src="/assets/images/team/team-1-3.jpg" alt="">
                            <div class="team-one__content">
                                <p class="team-one__sub-title">Designing</p>
                                <h3 class="team-one__title"><a href="/team.html">Wiliam Tomas</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
            </div>
        </div>
    </section>
    <!--Team One End-->
    <!--Counter One Start-->
    <section class="counter-one">
        <div class="container">
            <ul class="list-unstyled counter-one__list">
                <li class="wow fadeInUp" data-wow-delay="100ms">
                    <div class="counter-one__count-box">
                        <h3 class="odometer" data-count="30">00</h3>
                        <span class="counter-one__plus">+</span>
                    </div>
                    <p class="counter-one__text">Años de experiencia</p>
                    <div class="counter-one__icon">
                        <span class="icon-hand-rating-smile"></span>
                    </div>
                </li>
                <li class="wow fadeInUp" data-wow-delay="200ms">
                    <div class="counter-one__count-box">
                        <h3 class="odometer" data-count="2145">00</h3>
                    </div>
                    <p class="counter-one__text">clientes satisfechos</p>
                    <div class="counter-one__icon">
                        <span class="icon-mail-message"></span>
                    </div>
                </li>
                <li class="wow fadeInUp" data-wow-delay="300ms">
                    <div class="counter-one__count-box">
                        <h3 class="odometer" data-count="245">00</h3>
                    </div>
                    <p class="counter-one__text">Proyecto completado</p>
                    <div class="counter-one__icon">
                        <span class="icon-chainsaw"></span>
                    </div>
                </li>
                <li class="wow fadeInUp" data-wow-delay="400ms">
                    <div class="counter-one__count-box">
                        <h3 class="odometer" data-count="25">00</h3>
                    </div>
                    <p class="counter-one__text">Premios recibidos</p>
                    <div class="counter-one__icon">
                        <span class="icon-award-certificate-education"></span>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!--Counter One End-->
    <!--Testimonial One Start-->
    <section class="testimonial-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="testimonial-one__left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Testimonial</span>
                            <h2 class="section-title__title">Palabras de nuestro cliente</h2>
                        </div>
                        <p class="testimonial-one__text">Lorem Ipsum available, but the majority have suffered
                            dimply free text Suspe ndisse suscipit sagittis dolore magna aliqua ipsum quia </p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="testimonial-one__right">
                        <div class="testimonial-one__carousel owl-carousel owl-theme thm-owl__carousel"
                            data-owl-options='{
                        "loop": true,
                        "autoplay": true,
                        "margin": 30,
                        "nav": true,
                        "dots": false,
                        "smartSpeed": 500,
                        "autoplayTimeout": 10000,
                        "navText": ["<span class=\"icon-left-arrow-4\"></span>","<span class=\"icon-right-arrow-4\"></span>"],
                        "responsive": {
                            "0": {
                                "items": 1
                            },
                            "768": {
                                "items": 2
                            },
                            "992": {
                                "items": 2
                            },
                            "1200": {
                                "items": 2
                            }
                        }
                    }'>
                            <!--Testimonial One Single Start-->
                            <div class="item">
                                <div class="testimonial-one__single">
                                    <p class="testimonial-one__text-2">Lorem Ipsum available, but the majority have
                                        suffered dimply free text Suspe ndisse suscipit sagittis dolore magna aliqua
                                        ipsum quia</p>
                                    <div class="testimonial-one__client-info">
                                        <div class="testimonial-one__client-details">
                                            <div class="testimonial-one__client-img">
                                                <img src="/assets/images/testimonial/testimonial-one-client-img-1.jpg"
                                                    alt="">
                                            </div>
                                            <div class="testimonial-one__client-content">
                                                <h4>Wiliam Adak</h4>
                                                <p>Client for Woodin</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-one__quote">
                                            <span class="icon-quote"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Testimonial One Single End-->
                            <!--Testimonial One Single Start-->
                            <div class="item">
                                <div class="testimonial-one__single">
                                    <p class="testimonial-one__text-2">Lorem Ipsum available, but the majority have
                                        suffered dimply free text Suspe ndisse suscipit sagittis dolore magna aliqua
                                        ipsum quia</p>
                                    <div class="testimonial-one__client-info">
                                        <div class="testimonial-one__client-details">
                                            <div class="testimonial-one__client-img">
                                                <img src="/assets/images/testimonial/testimonial-one-client-img-2.jpg"
                                                    alt="">
                                            </div>
                                            <div class="testimonial-one__client-content">
                                                <h4>Wiliam Smith</h4>
                                                <p>Client for Woodin</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-one__quote">
                                            <span class="icon-quote"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Testimonial One Single End-->
                            <!--Testimonial One Single Start-->
                            <div class="item">
                                <div class="testimonial-one__single">
                                    <p class="testimonial-one__text-2">Lorem Ipsum available, but the majority have
                                        suffered dimply free text Suspe ndisse suscipit sagittis dolore magna aliqua
                                        ipsum quia</p>
                                    <div class="testimonial-one__client-info">
                                        <div class="testimonial-one__client-details">
                                            <div class="testimonial-one__client-img">
                                                <img src="/assets/images/testimonial/testimonial-one-client-img-1.jpg"
                                                    alt="">
                                            </div>
                                            <div class="testimonial-one__client-content">
                                                <h4>Wiliam Adak</h4>
                                                <p>Client for Woodin</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-one__quote">
                                            <span class="icon-quote"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Testimonial One Single End-->
                            <!--Testimonial One Single Start-->
                            <div class="item">
                                <div class="testimonial-one__single">
                                    <p class="testimonial-one__text-2">Lorem Ipsum available, but the majority have
                                        suffered dimply free text Suspe ndisse suscipit sagittis dolore magna aliqua
                                        ipsum quia</p>
                                    <div class="testimonial-one__client-info">
                                        <div class="testimonial-one__client-details">
                                            <div class="testimonial-one__client-img">
                                                <img src="/assets/images/testimonial/testimonial-one-client-img-2.jpg"
                                                    alt="">
                                            </div>
                                            <div class="testimonial-one__client-content">
                                                <h4>Wiliam Smith</h4>
                                                <p>Client for Woodin</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-one__quote">
                                            <span class="icon-quote"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Testimonial One Single End-->
                            <!--Testimonial One Single Start-->
                            <div class="item">
                                <div class="testimonial-one__single">
                                    <p class="testimonial-one__text-2">Lorem Ipsum available, but the majority have
                                        suffered dimply free text Suspe ndisse suscipit sagittis dolore magna aliqua
                                        ipsum quia</p>
                                    <div class="testimonial-one__client-info">
                                        <div class="testimonial-one__client-details">
                                            <div class="testimonial-one__client-img">
                                                <img src="/assets/images/testimonial/testimonial-one-client-img-1.jpg"
                                                    alt="">
                                            </div>
                                            <div class="testimonial-one__client-content">
                                                <h4>Wiliam Adak</h4>
                                                <p>Client for Woodin</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-one__quote">
                                            <span class="icon-quote"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Testimonial One Single End-->
                            <!--Testimonial One Single Start-->
                            <div class="item">
                                <div class="testimonial-one__single">
                                    <p class="testimonial-one__text-2">Lorem Ipsum available, but the majority have
                                        suffered dimply free text Suspe ndisse suscipit sagittis dolore magna aliqua
                                        ipsum quia</p>
                                    <div class="testimonial-one__client-info">
                                        <div class="testimonial-one__client-details">
                                            <div class="testimonial-one__client-img">
                                                <img src="/assets/images/testimonial/testimonial-one-client-img-2.jpg"
                                                    alt="">
                                            </div>
                                            <div class="testimonial-one__client-content">
                                                <h4>Wiliam Smith</h4>
                                                <p>Client for Woodin</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-one__quote">
                                            <span class="icon-quote"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Testimonial One Single End-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonial One End-->
    <!--Blog One Start-->
    <section class="blog-one">
        <div class="blog-one-bg" style="background-image: url(/assets/images/backgrounds/blog-one-bg.jpg);"></div>
        <div class="container">
            {{--
            <div class="blog-one__top d-none">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Our Blog Update</span>
                    <h2 class="section-title__title">Check Latest Blog Post <br> from Blog List</h2>
                </div>
                <div class="row">
                    <!--Blog One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="/assets/images/blog/blog-1-1.jpg" alt="">
                            </div>
                            <div class="blog-one__content">
                                <ul class="list-unstyled blog-one__meta">
                                    <li>
                                        <i class="icon-user"></i>
                                        <a href="/blog-details.html">By Admin</a>
                                    </li>
                                    <li>
                                        <i class="icon-clock"></i>
                                        <a href="/blog-details.html">25 April,2022</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="/blog-details.html">How to
                                        Calculate How Much
                                        Epoxy For Your Table</a></h3>
                                <div class="blog-one__arrow">
                                    <a href="/blog-details.html">Learn More <span class="icon-right-arrow-1"></span></a>
                                </div>
                                <div class="blog-one__tag">
                                    <p>Sideboard</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog One Single End-->
                    <!--Blog One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="/assets/images/blog/blog-1-2.jpg" alt="">
                            </div>
                            <div class="blog-one__content">
                                <ul class="list-unstyled blog-one__meta">
                                    <li>
                                        <i class="icon-user"></i>
                                        <a href="/blog-details.html">By Admin</a>
                                    </li>
                                    <li>
                                        <i class="icon-clock"></i>
                                        <a href="/blog-details.html">25 April,2022</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="/blog-details.html">Build Your
                                        Own Coffee Table
                                        Series Complete</a></h3>
                                <div class="blog-one__arrow">
                                    <a href="/blog-details.html">Learn More <span class="icon-right-arrow-1"></span></a>
                                </div>
                                <div class="blog-one__tag">
                                    <p>Sideboard</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog One Single End-->
                    <!--Blog One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="/assets/images/blog/blog-1-3.jpg" alt="">
                            </div>
                            <div class="blog-one__content">
                                <ul class="list-unstyled blog-one__meta">
                                    <li>
                                        <i class="icon-user"></i>
                                        <a href="/blog-details.html">By Admin</a>
                                    </li>
                                    <li>
                                        <i class="icon-clock"></i>
                                        <a href="/blog-details.html">25 April,2022</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="/blog-details.html">Workshop
                                        Floor From Scaffold
                                        Boards furniture making</a></h3>
                                <div class="blog-one__arrow">
                                    <a href="/blog-details.html">Learn More <span class="icon-right-arrow-1"></span></a>
                                </div>
                                <div class="blog-one__tag">
                                    <p>Sideboard</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog One Single End-->
                </div>
            </div> --}}
            <div class="about-history">
                <div class="about-history__inner">
                    <div class="about-history__left">
                        <div class="about-history__img-one">
                            <img src="/assets/images/resources/about-history-img-1.jpg" alt="">
                            <div class="about-history__two">
                                <img src="/assets/images/resources/about-history-img-2.jpg" alt="">
                            </div>
                        </div>
                        <div class="about-history__content">
                            <h3 class="about-history__title">Te hemos estado ayudando a hacer precisamente eso desde 1998
                            </h3>
                            <p class="about-history__text">Tenemos un compromiso con la calidad y el estilo que combina la
                                artesanía tradicional con la nueva tecnología.</p>
                        </div>
                    </div>
                    <div class="about-history__right">
                        <a href="{{ route('nosotros') }}" class="thm-btn about-history__btn">Acerca de la Compañia</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Blog One End-->

@endsection

@push('scripts')
    <script>
        const swiper = new Swiper('.swiper', {
            slidesPerView: 1,
            loop: true,
            effect: "fade",
            pagination: {
                el: "#main-slider-pagination",
                type: "bullets",
                clickable: true
            },
            navigation: {
                nextEl: " #main-slider__swiper-button-next",
                prevEl: "#main-slider__swiper-button-prev"
            },
            autoplay: {
                delay: 5000
            }
        });
    </script>
@endpush
