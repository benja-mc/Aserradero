@extends('layouts.app')
@section('title', 'Contacto')
@section('container')
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Contact us</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li><span>/</span></li>
                    <li>Contact us</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="contact-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5">
                    <div class="contact-page__left">
                        <h4 class="contact-page__title">Feel free to ask questions or share your message with us.</h4>
                        <p class="contact-page__text-1">You can also reach out to us by phone or email are many variations
                        </p>
                        <ul class="list-unstyled contact-page__list">
                            <li>
                                <div class="icon">
                                    <span class="icon-location"></span>
                                </div>
                                <div class="content">
                                    <h5>Address</h5>
                                    <p>Boat House 2/21 City Road <br> Hoxton, N1 6NG, UK</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-phone"></span>
                                </div>
                                <div class="content">
                                    <h5>Phone</h5>
                                    <p>
                                        <a href="tel:8801682648101">+8801682648101</a>
                                        <a href="tel:8801682648101">02 9292162</a>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-email"></span>
                                </div>
                                <div class="content">
                                    <h5>Email Address</h5>
                                    <p>
                                        <a href="mailto:Info24@gmail.com">Info24@gmail.com</a>
                                        <a href="mailto:Support24@gmail.com">Support24@gmail.com</a>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="contact-page__right">
                        <h3 class="contact-page__right-title">Send a message</h3>
                        <p class="contact-page__right-text">Lorem ipsum dolor sit amet consectetur adipiscing elit <br> We'd
                            love to hear for you</p>
                        <form action="assets/inc/sendemail.php" class="contact-page__form contact-form-validated"
                            novalidate="novalidate">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="contact-page__input-box">
                                        <input type="text" placeholder="Name" name="name">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="contact-page__input-box">
                                        <input type="email" placeholder="Email Address" name="email">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="contact-page__input-box">
                                        <input type="text" placeholder="Phone" name="Phone">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="contact-page__input-box">
                                        <input type="text" placeholder="Subject" name="subject">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="contact-page__input-box text-message-box">
                                        <textarea name="message" placeholder="Type Messages"></textarea>
                                    </div>
                                    <div class="contact-page__btn-box">
                                        <button type="submit" class="contact-page__btn">Send A Message</button>
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
