<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
                VinyLib
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
        <div class="slogan">VinyLib - <span>your vinyl library</span></div>
        <a href="#about-us"><i class="bi go-down"></i></a>
    </section>
    <section id="about-us">
        <div class="col-8">
            <h3>About Us</h3>
        </div>
        <div class="col-4"></div>
    </section>
    <section id="why-we"></section>
    <section id="pricing"></section>
    <section id="contact-us"></section>
</main>

<!-- Page Footer -->

<footer class="w-100 align-self-end">
    footer
</footer>

<script>
    let header = document.getElementById("header");
    let preview = document.getElementById("preview");
    let about_us = document.getElementById("about-us");
    let why_we = document.getElementById("why-we");
    let pricing = document.getElementById("pricing");
    let contact_us = document.getElementById("contact-us");
    window.onscroll = function() {
        if(window.scrollY >= about_us.offsetTop && !header.classList.contains("position-fixed")) {
            header.classList.add("position-fixed");
        }
        if(window.scrollY >= about_us.offsetTop && window.scrollY < why_we.offsetTop) {
            document.getElementById('nav-about-us').classList.add('active');
            document.getElementById('nav-why-we').classList.remove('active');
        } else if(window.scrollY >= why_we.offsetTop && window.scrollY < pricing.offsetTop)  {
            document.getElementById('nav-about-us').classList.remove('active');
            document.getElementById('nav-why-we').classList.add('active');
            document.getElementById('nav-pricing').classList.remove('active');
        } else if(window.scrollY >= pricing.offsetTop && window.scrollY < contact_us.offsetTop)  {
            document.getElementById('nav-why-we').classList.remove('active');
            document.getElementById('nav-pricing').classList.add('active');
            document.getElementById('nav-contact-us').classList.remove('active');
        } else if(window.scrollY >= contact_us.offsetTop)  {
            document.getElementById('nav-pricing').classList.remove('active');
            document.getElementById('nav-contact-us').classList.add('active');
        }
        else if(window.scrollY < about_us.offsetTop && header.classList.contains("position-fixed")) {
            header.classList.remove("position-fixed");
            document.getElementById('nav-about-us').classList.remove('active');
        }
    }
</script>

</body>
</html>
