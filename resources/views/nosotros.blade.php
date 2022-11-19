@extends('layouts.app')
@section('title', 'Nosotros')
@section('container')
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg-2.jpg)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Nosotros</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ route('index') }}">Inicio</a></li>
                    <li><span>/</span></li>
                    <li>Nosotros</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="why-choose-three why-choose-four">
        <div class="why-choose-three-shape-1 float-bob-x">
            <img src="assets/images/shapes/why-choose-three-shape-1.png" alt="">
        </div>
        <div class="why-choose-three-shape-2 float-bob-y">
            <img src="assets/images/shapes/why-choose-three-shape-2.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="why-choose-three__left wow slideInLeft animated" data-wow-delay="100ms"
                        data-wow-duration="2500ms"
                        style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInLeft;">
                        <div class="why-choose-three__img-box">
                            <div class="why-choose-three__img">
                                <img src="assets/images/resources/why-choose-three-img-1.jpg" alt="">
                                <div class="why-choose-three__dot">
                                    <img src="assets/images/shapes/why-choose-three-dot.png" alt="">
                                </div>
                            </div>
                            <div class="why-choose-three__img-two">
                                <img src="assets/images/resources/why-choose-three-img-2.jpg" alt="">
                            </div>
                            <div class="why-choose-three__border"></div>
                            <div class="why-choose-three__customer-service">
                                <div class="why-choose-three__customer-service-icon">
                                    <span class="icon-emoji-chat-message"></span>
                                </div>
                                <div class="why-choose-three__customer-service-content">
                                    <h4>Excelente <br> servicio al cliente</h4>
                                </div>
                                <div class="why-choose-three__customer-service-dot float-bob-x">
                                    <img src="assets/images/shapes/why-choose-three-customer-service-dot.png"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="why-choose-three__right">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Nuestra historia</span>
                            <h2 class="section-title__title">Bienvenido a Nuestros Servicios</h2>
                        </div>
                        <p class="why-choose-three__text-1">Nosotros, en nuestro servicios proporcionamos todo tipo de
                            carpintería y carpintería.</p>
                        <ul class="list-unstyled why-choose-three__points">
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <div class="text">
                                    <p>Costo más razonable.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <div class="text">
                                    <p>Entrega rapida</p>
                                </div>
                            </li>
                        </ul>
                        <div class="why-choose-three__user">
                            <div class="why-choose-three__user-left">
                                <div class="why-choose-three__user-left-img-box">
                                    <div class="why-choose-three__user-left-img">
                                        <img src="assets/images/resources/why-choose-three-left-img.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="why-choose-three__user-right">
                                <p class="why-choose-three__user-text">Más de 20 años de experiencia brindando carpintería
                                    de alta calidad en todo el mundo</p>
                                <div class="why-choose-three__user-box">
                                    <div class="why-choose-one__user-box-img">
                                        <img src="assets/images/resources/why-choose-one-user-img.jpg" alt="">
                                    </div>
                                    <div class="why-choose-one__user-box-sign">
                                        <img src="assets/images/resources/why-choose-one-user-sign.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="problem-solved-three problem-solved-four">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="problem-solved-three__left wow slideInLeft animated" data-wow-delay="100ms"
                        data-wow-duration="2500ms"
                        style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInLeft;">
                        <div class="problem-solved-three__img-box">
                            <div class="problem-solved-three__img">
                                <img src="assets/images/resources/problem-solved-img-1.jpg" alt="">
                            </div>
                        </div>
                        <div class="problem-solved-three__content">
                            <h3 class="problem-solved-three__title">1k Problemas resueltos</h3>
                            <p class="problem-solved-three__text">Brindamos productos y acabados de gran calidad a las
                                diferentes empresas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="problem-solved-three__right wow slideInRight animated" data-wow-delay="100ms"
                        data-wow-duration="2500ms"
                        style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInRight;">
                        <div class="problem-solved-three__call">
                            <h5 class="problem-solved-three__sub-title">Tiene una emergencia?</h5>
                            <a href="tel:1144454789"> <span class="icon-phone"></span> +51 930 900 900</a>
                            <p class="problem-solved-three__text-2">Contactenos y uno de nuestros especialistas lo ayudara
                                con lo que necesite!</p>
                        </div>
                        <div class="problem-solved-three__trusted">
                            <div class="problem-solved-three__trusted-img">
                                <img src="assets/images/resources/problem-solved-three-trusted-img.jpg" alt="">
                                <div class="problem-solved-three__trusted-content">
                                    <p>Recomendado por</p>
                                    <h3 class="odometer odometer-auto-theme" data-count="4256">
                                        <div class="odometer-inside"><span class="odometer-digit"><span
                                                    class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">4</span></span></span></span></span><span
                                                class="odometer-formatting-mark">,</span><span
                                                class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">2</span></span></span></span></span><span
                                                class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">5</span></span></span></span></span><span
                                                class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">6</span></span></span></span></span>
                                        </div>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="problem-solved-three__shape-1 float-bob-x"></div>
                        <div class="problem-solved-three__shape-2 float-bob-y"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="statment">
        <div class="statment-shape-1 float-bob-x">
            <img src="assets/images/shapes/statment-shape-1.png" alt="">
        </div>
        <div class="statment-shape-2 float-bob-x">
            <img src="assets/images/shapes/statment-shape-2.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="statment__left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">NUESTRAS DECLARACIONES</span>
                            <h2 class="section-title__title">Declaraciones que son a la vez simples y poderosas</h2>
                        </div>
                        <p class="statment__text-1">En Website ofrecemos todo tipo de trabajos de carpintería y
                            carpintería.</p>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="statment__right">
                        <ul class="list-unstyled statment__count-list">
                            <li>
                                <div class="statment__count-icon">
                                    <span class="icon-success"></span>
                                </div>
                                <div class="statment__count-content-box">
                                    <div class="statment__count-content">
                                        <h3 class="odometer odometer-auto-theme" data-count="30">
                                            <div class="odometer-inside"><span class="odometer-digit"><span
                                                        class="odometer-digit-spacer">8</span><span
                                                        class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                                class="odometer-ribbon-inner"><span
                                                                    class="odometer-value">3</span></span></span></span></span><span
                                                    class="odometer-digit"><span
                                                        class="odometer-digit-spacer">8</span><span
                                                        class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                                class="odometer-ribbon-inner"><span
                                                                    class="odometer-value">0</span></span></span></span></span>
                                            </div>
                                        </h3>
                                        <span class="statment__count-plus">+</span>
                                    </div>
                                    <p class="statment__count-text">Años de experiencia</p>
                                </div>
                            </li>
                            <li>
                                <div class="statment__count-icon">
                                    <span class="icon-maple-leaf"></span>
                                </div>
                                <div class="statment__count-content-box">
                                    <div class="statment__count-content">
                                        <h3 class="odometer odometer-auto-theme" data-count="1500">
                                            <div class="odometer-inside"><span class="odometer-digit"><span
                                                        class="odometer-digit-spacer">8</span><span
                                                        class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                                class="odometer-ribbon-inner"><span
                                                                    class="odometer-value">1</span></span></span></span></span><span
                                                    class="odometer-formatting-mark">,</span><span
                                                    class="odometer-digit"><span
                                                        class="odometer-digit-spacer">8</span><span
                                                        class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                                class="odometer-ribbon-inner"><span
                                                                    class="odometer-value">5</span></span></span></span></span><span
                                                    class="odometer-digit"><span
                                                        class="odometer-digit-spacer">8</span><span
                                                        class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                                class="odometer-ribbon-inner"><span
                                                                    class="odometer-value">0</span></span></span></span></span><span
                                                    class="odometer-digit"><span
                                                        class="odometer-digit-spacer">8</span><span
                                                        class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                                class="odometer-ribbon-inner"><span
                                                                    class="odometer-value">0</span></span></span></span></span>
                                            </div>
                                        </h3>
                                        <span class="statment__count-plus">+</span>
                                    </div>
                                    <p class="statment__count-text">Clientes a nivel nacional</p>
                                </div>
                            </li>
                            <li>
                                <div class="statment__count-icon">
                                    <span class="icon-medal"></span>
                                </div>
                                <div class="statment__count-content-box">
                                    <div class="statment__count-content">
                                        <h3>No 1</h3>
                                    </div>
                                    <p class="statment__count-text">Diseño y construcción</p>
                                </div>
                            </li>
                            <li>
                                <div class="statment__count-icon">
                                    <span class="icon-chainsaw"></span>
                                </div>
                                <div class="statment__count-content-box">
                                    <div class="statment__count-content">
                                        <h3 class="odometer odometer-auto-theme" data-count="10">
                                            <div class="odometer-inside"><span class="odometer-digit"><span
                                                        class="odometer-digit-spacer">8</span><span
                                                        class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                                class="odometer-ribbon-inner"><span
                                                                    class="odometer-value">1</span></span></span></span></span><span
                                                    class="odometer-digit"><span
                                                        class="odometer-digit-spacer">8</span><span
                                                        class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                                class="odometer-ribbon-inner"><span
                                                                    class="odometer-value">0</span></span></span></span></span>
                                            </div>
                                        </h3>
                                        <span class="statment__count-plus">+</span>
                                    </div>
                                    <p class="statment__count-text">Carpintero dedicado al mejor equipo</p>
                                </div>
                            </li>
                        </ul>
                        <p class="statment__right-text">Elegir energía verde es una de las cosas más importantes que puede
                            hacer para combatir la crisis climática.</p>
                    </div>
                </div>
            </div>
            <div class="about-history-three">
                <div class="row">
                    <div class="col-xl-9">
                        <div class="about-history-three__left">
                            <div class="about-history-three__img-one">
                                <img src="assets/images/resources/about-history-img-1.jpg" alt="">
                                <div class="about-history-three__img-two">
                                    <img src="assets/images/resources/about-history-img-2.jpg" alt="">
                                </div>
                            </div>
                            <div class="about-history-three__content">
                                <h3 class="about-history-three__title">Te hemos estado ayudando <br>a hacer precisamente
                                    eso desde 1998</h3>
                                <p class="about-history-three__text">Apostamos por la calidad y el estilo combinando la
                                    artesanía tradicional con las nuevas tecnologías sequi </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="about-history-three__right">
                            <div class="about-history-three__right-img">
                                <img src="assets/images/resources/about-history-three-right-img.jpg" alt="">
                                <div class="about-history-three__video-link">
                                    <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                        <div class="about-history-three__video-icon">
                                            <span class="fa fa-play"></span>
                                            <i class="ripple"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="team-one about-page-team">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">MIEMBRO DEL EQUIPO</span>
                <h2 class="section-title__title">Conozca a los profesionales</h2>
            </div>
            <div class="row">
                <!--Team One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms"
                    style="visibility: hidden; animation-delay: 100ms; animation-name: none;">
                    <div class="team-one__single">
                        <div class="team-one__img">
                            <img src="assets/images/team/team-1-1.jpg" alt="">
                            <div class="team-one__content">
                                <p class="team-one__sub-title">Furniture Designing</p>
                                <h3 class="team-one__title"><a href="team.html">Adam Smite</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
                <!--Team One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms"
                    style="visibility: hidden; animation-delay: 200ms; animation-name: none;">
                    <div class="team-one__single">
                        <div class="team-one__img">
                            <img src="assets/images/team/team-1-2.jpg" alt="">
                            <div class="team-one__content">
                                <p class="team-one__sub-title">Co founder</p>
                                <h3 class="team-one__title"><a href="team.html">John David</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
                <!--Team One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms"
                    style="visibility: hidden; animation-delay: 300ms; animation-name: none;">
                    <div class="team-one__single">
                        <div class="team-one__img">
                            <img src="assets/images/team/team-1-3.jpg" alt="">
                            <div class="team-one__content">
                                <p class="team-one__sub-title">Designing</p>
                                <h3 class="team-one__title"><a href="team.html">Wiliam Tomas</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
            </div>
        </div>
    </section>
    <section class="testimonial-three">
        <div class="testimonial-three-bg"
            style="background-image: url(assets/images/backgrounds/testimonial-three-bg.jpg);"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="testimonial-three__left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">TESTIMONIOS</span>
                            <h2 class="section-title__title">Palabras de nuestro cliente</h2>
                        </div>
                        <p class="testimonial-three__text">Lorem Ipsum available, but the majority have suffered dimply
                            free text Suspe ndisse suscipit sagittis dolore magna aliqua ipsum quia </p>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="testimonial-three__right">
                        <div class="testimonial-three__carousel owl-carousel owl-theme thm-owl__carousel owl-loaded owl-drag"
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
                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                    style="transform: translate3d(-2880px, 0px, 0px); transition: all 0.5s ease 0s; width: 4320px;">
                                    <div class="owl-item active" style="width: 330px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="testimonial-three__single">
                                                <p class="testimonial-three__text-2">Lorem Ipsum available, but the
                                                    majority have suffered dimply free text Suspe ndisse suscipit sagittis
                                                    dolore magna aliqua ipsum quia</p>
                                                <div class="testimonial-three__client-info">
                                                    <div class="testimonial-three__client-details">
                                                        <div class="testimonial-three__client-img">
                                                            <img src="assets/images/testimonial/testimonial-three-client-img-2.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="testimonial-three__client-content">
                                                            <h4>Wiliam Smith</h4>
                                                            <p>Client for Woodin</p>
                                                        </div>
                                                    </div>
                                                    <div class="testimonial-three__quote">
                                                        <span class="icon-quote"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 330px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="testimonial-three__single">
                                                <p class="testimonial-three__text-2">Lorem Ipsum available, but the
                                                    majority have suffered dimply free text Suspe ndisse suscipit sagittis
                                                    dolore magna aliqua ipsum quia</p>
                                                <div class="testimonial-three__client-info">
                                                    <div class="testimonial-three__client-details">
                                                        <div class="testimonial-three__client-img">
                                                            <img src="assets/images/testimonial/testimonial-three-client-img-1.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="testimonial-three__client-content">
                                                            <h4>Wiliam Adak</h4>
                                                            <p>Client for Woodin</p>
                                                        </div>
                                                    </div>
                                                    <div class="testimonial-three__quote">
                                                        <span class="icon-quote"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 330px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="testimonial-three__single">
                                                <p class="testimonial-three__text-2">Lorem Ipsum available, but the
                                                    majority have suffered dimply free text Suspe ndisse suscipit sagittis
                                                    dolore magna aliqua ipsum quia</p>
                                                <div class="testimonial-three__client-info">
                                                    <div class="testimonial-three__client-details">
                                                        <div class="testimonial-three__client-img">
                                                            <img src="assets/images/testimonial/testimonial-three-client-img-2.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="testimonial-three__client-content">
                                                            <h4>Wiliam Smith</h4>
                                                            <p>Client for Woodin</p>
                                                        </div>
                                                    </div>
                                                    <div class="testimonial-three__quote">
                                                        <span class="icon-quote"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 330px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="testimonial-three__single">
                                                <p class="testimonial-three__text-2">Lorem Ipsum available, but the
                                                    majority have suffered dimply free text Suspe ndisse suscipit sagittis
                                                    dolore magna aliqua ipsum quia</p>
                                                <div class="testimonial-three__client-info">
                                                    <div class="testimonial-three__client-details">
                                                        <div class="testimonial-three__client-img">
                                                            <img src="assets/images/testimonial/testimonial-three-client-img-1.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="testimonial-three__client-content">
                                                            <h4>Wiliam Adak</h4>
                                                            <p>Client for Woodin</p>
                                                        </div>
                                                    </div>
                                                    <div class="testimonial-three__quote">
                                                        <span class="icon-quote"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span
                                        class="icon-left-arrow-4"></span></button><button type="button"
                                    role="presentation" class="owl-next"><span
                                        class="icon-right-arrow-4"></span></button></div>
                            <div class="owl-dots disabled"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
