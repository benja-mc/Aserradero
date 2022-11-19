@extends('layouts.app')
@section('title', 'Contacto')
@section('container')
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg-2.jpg)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Contacto</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ route('index') }}">Inicio</a></li>
                    <li><span>/</span></li>
                    <li>Contacto</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="contact-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5">
                    <div class="contact-page__left">
                        <h4 class="contact-page__title">No dude en hacer preguntas o compartir su mensaje con nosotros.</h4>
                        <p class="contact-page__text-1">
                            También puede comunicarse con nosotros por teléfono o correo electrónico, hay muchas variaciones.
                        </p>
                        <ul class="list-unstyled contact-page__list">
                            <li>
                                <div class="icon">
                                    <span class="icon-location"></span>
                                </div>
                                <div class="content">
                                    <h5>Dirección</h5>
                                    <p>Jr Huallayco <br> Huanuco, Huanuco, PE</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-phone"></span>
                                </div>
                                <div class="content">
                                    <h5>Teléfono</h5>
                                    <p>
                                        <a href="tel:51930900900">+51930900900</a>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-email"></span>
                                </div>
                                <div class="content">
                                    <h5>Correo electrónico</h5>
                                    <p>
                                        <a href="mailto:mail@gmail.com">mail@gmail.com</a>
                                        <a href="mailto:support@gmail.com">support@gmail.com</a>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="contact-page__right">
                        <h3 class="contact-page__right-title">Enviar un mensaje</h3>
                        <p class="contact-page__right-text">Complete el formulario con las dudas y/o consultas, Nuestros especialistas se contactaran con usted lo antes posible.</p>
                        <form action="assets/inc/sendemail.php" class="contact-page__form contact-form-validated"
                            novalidate="novalidate">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="contact-page__input-box">
                                        <input type="text" placeholder="Nombre" name="name">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="contact-page__input-box">
                                        <input type="email" placeholder="Correo electrónico" name="email">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="contact-page__input-box">
                                        <input type="text" placeholder="Telefono" name="Phone">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="contact-page__input-box">
                                        <input type="text" placeholder="Tema" name="subject">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="contact-page__input-box text-message-box">
                                        <textarea name="message" placeholder="Escriba su mensaje"></textarea>
                                    </div>
                                    <div class="contact-page__btn-box">
                                        <button type="submit" class="contact-page__btn">Enviar un mensaje</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="google-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
            class="google-map__one" allowfullscreen=""></iframe>

    </section>
@endsection
