<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/guest.css') }}">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/images/icons/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/images/icons/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/images/icons/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('/images/icons/favicon/site.webmanifest')}}">

</head>
<body class="font-sans antialiased">
<!-- Page Heading -->
<header class="w-100" id="header">
    <nav class="navbar navbar-expand-lg navbar-dark" >
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{asset('images/icons/vinyl-record.png')}}" alt="" height="24">
                {{config('app.name')}}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" id="nav-about-us" href="#about-us">{{trans('guest.about_us')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-why-we" href="#why-we">{{trans('guest.why_we')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-pricing" href="#pricing">{{trans('guest.pricing')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-contact-us" href="#contact-us">{{trans('guest.contact_us')}}</a>
                    </li>
                </ul>
                <div>
                    <a type="button" class="log-in" href="https://google.com">{{trans('guest.login')}}</a>
                    <button type="button" class="btn btn-warning sign-up">{{trans('guest.signup')}}</button>
                </div>
            </div>
        </div>
    </nav>
</header>

<!-- Page Content -->
<main class="w-100">
    <section class="main-image" id="preview" style="background-image: url('{{asset('images/guest/main-img.jpeg')}}')">
        <div class="slogan">{{config('app.name')}} - <span>your vinyl library</span></div>
        <a href="#about-us"><i class="bi go-down"></i></a>
    </section>
    <section class="px-4" id="about-us">
        <div class="col-12">
            <h3 class="title">{{trans('guest.about_us')}}</h3>
        </div>
        <div class="info-block my-4">
            <div class="info-text col">
                <div>
                    We are a group of people who love vinyl.
                    <br>
                    Therefore, we create this project for everyone who loves vinyl.
                    <br>
                    We are currently expanding our album and artist data, so you can help us by adding your vinyl library so that the next user can select it at any time.
                </div>
            </div>
            <div class="info-img col-12 col-lg-8 order-first order-lg-last" style="background-image: url('{{asset('/images/guest/about_us.jpeg')}}')"></div>
        </div>
    </section>
    <section class="px-4" id="why-we">
        <div class="col-12">
            <h3 class="title text-end">{{trans('guest.why_we')}}</h3>
        </div>
        <div class="info-block right my-4">
            <div class="info-img col-12 col-lg-8" style="background-image: url('{{asset('/images/guest/why_we.jpeg')}}')"></div>
            <div class="info-text col">
                <div>
                    We love our job very much, so we try to make your experience as comfortable as possible. In Vinylib you can find purchase recommendations for similar vinyls from your library, find friends with similar interests and share your preferences
                </div>
            </div>
        </div>
    </section>
    <section class="px-4" id="pricing">
        <div class="col-12">
            <h3 class="title">{{trans('guest.pricing')}}</h3>
        </div>
        <div class="row justify-content-between m-0 my-4">
            <div class="card col-3 d-inline-flex">
                <i class="bi bi-coin card-img-top"></i>
                <div class="card-body">
                    <h5 class="card-title">Free</h5>
                    <p class="card-text">Our service is absolutely free, we want real vinyl lovers to be able to use it and it helps them.</p>
                    <a href="#" class="btn btn-primary">Sign Up</a>
                </div>
            </div>
            <div class="card col-3 d-inline-flex">
                <i class="bi bi-people-fill card-img-top"></i>
                <div class="card-body">
                    <h5 class="card-title">Members</h5>
                    <p class="card-text">Each member is very important to us, so you can support our community by joining us.</p>
                    <a href="#" class="btn btn-primary">Sign Up</a>
                </div>
            </div>
            <div class="card col-3 d-inline-flex">
                <i class="bi bi-hdd-rack card-img-top"></i>
                <div class="card-body">
                    <h5 class="card-title">Data</h5>
                    <p class="card-text">If you would like to support us, you can help us populate our database with your vinyls.</p>
                    <a href="#" class="btn btn-primary">Sign Up</a>
                </div>
            </div>
        </div>
    </section>
    <section id="contact-us"></section>
</main>

<!-- Page Footer -->

{{--<footer class="w-100 align-self-end">--}}
{{--    footer--}}
{{--</footer>--}}

<script>
    let header = document.getElementById("header");
    let about_us = document.getElementById("about-us").offsetTop;
    let why_we = document.getElementById("why-we").offsetTop;
    let pricing = document.getElementById("pricing").offsetTop;
    let contact_us = document.getElementById("contact-us").offsetTop;
    let nav_about_us = document.getElementById('nav-about-us').classList;
    let nav_why_we = document.getElementById('nav-why-we').classList;
    let nav_pricing = document.getElementById('nav-pricing').classList;
    let nav_contact_us = document.getElementById('nav-contact-us').classList;
    function checkscroll() {
        if(window.scrollY + 10 >= about_us && !header.classList.contains("position-fixed")) {
            header.classList.add("position-fixed");
        }
        if(window.scrollY >= about_us && window.scrollY < why_we && !nav_about_us.contains('active')) {
            nav_about_us.add('active');
            nav_why_we.remove('active');
        } else if(window.scrollY >= why_we && window.scrollY < pricing  && !nav_why_we.contains('active'))  {
            nav_about_us.remove('active');
            nav_why_we.add('active');
            nav_pricing.remove('active');
        } else if(window.scrollY >= pricing && window.scrollY < contact_us  && !nav_pricing.contains('active'))  {
            nav_why_we.remove('active');
            nav_pricing.add('active');
            nav_contact_us.remove('active');
        } else if(window.scrollY >= contact_us  && !nav_contact_us.contains('active'))  {
            nav_pricing.remove('active');
            nav_contact_us.add('active');
        }
        else if(window.scrollY + 10 < about_us && header.classList.contains("position-fixed")) {
            header.classList.remove("position-fixed");
            nav_about_us.remove('active');
        }
    }
    function showSection() {
        if(window.scrollY >= contact_us  && !nav_contact_us.contains('visible'))  {
            nav_contact_us.add('visible');
        } else if(window.scrollY >= pricing && !nav_pricing.contains('visible'))  {
            nav_pricing.add('visible');
        } else if(window.scrollY >= why_we && !nav_why_we.contains('visible'))  {
            nav_why_we.add('visible');
        } else if(window.scrollY >= about_us && !nav_about_us.contains('visible')) {
            nav_about_us.add('visible');
        }
    }
    window.onload = function () {
        window.scrollTo(0, 0);
        setTimeout(function () {
            document.body.classList.add('load');
        }, 1000)
    }
    window.onscroll = function() {
        if(document.body.classList.contains('load')) {
            checkscroll();
            showSection();
        }
    }
</script>

</body>
</html>
