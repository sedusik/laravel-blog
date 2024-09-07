<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="{{ asset('assets/vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/loader.js') }}"></script>
</head>
<body>
<div class="edica-loader"></div>
<header class="edica-header" style="margin-bottom: -100px;">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="{{ route('post.index') }}"><img src="{{ asset('assets/images/logo_world.png') }}" alt="logo"></a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#edicaMainNav" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="edicaMainNav">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('post.index') }}"><h5>Блог</h5></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about.index') }}"><h5>Об авторе</h5></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact.index') }}"><h5>Контакты</h5></a>
                    </li>
                </ul>
                <ul class="navbar-nav mt-2 mt-lg-0">
                    <li class="nav-item">
                        @auth()
                            <a class="nav-link" href="{{ route('personal.main.index') }}"><h5>Личный кабинет</h5></a>
                        @endauth
                        @guest()
                            <a class="nav-link" href="{{ route('personal.main.index') }}"><h5>Войти</h5></a>
                        @endguest
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>

@yield('content')

<footer class="edica-footer py-3 mt-1" data-aos="fade-up">
    <div class="container">
        <div class="row footer-widget-area py-2">
            <div class="col-md-3">
                <a href="{{ route('main.index') }}" class="footer-brand-wrapper">
                    <img src="{{ asset('assets/images/logo_world.png') }}" alt="logo">
                </a>
                <p class="contact-details">couworld@gmail.com</p>
                <nav class="footer-social-links">
                    <h6>Для связи с автором:</h6>
                    <a href="https://t.me/sedustan"><i class="fab fa-telegram-plane"></i></a>
                    <a href="https://vk.com/sedusova96"><i class="fab fa-vk"></i></a>
                    <a href="https://web.whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                </nav>
            </div>
            <div class="col-md-3 d-flex align-items-center mx-3">
                <nav class="footer-nav">
                    <a href="{{ route('main.index') }}" class="nav-link">Блог</a>
                    <a href="{{ route('category.index') }}" class="nav-link">Категории</a>
                </nav>
            </div>
            <div class="col-md-3 d-flex align-items-center">
                <nav class="footer-nav">
                    <a href="{{ route('about.index') }}" class="nav-link">Об авторе</a>
                    <a href="{{ route('contact.index') }}" class="nav-link">Контакты</a>
                </nav>
            </div>
        </div>
    </div>
</footer>
<script src="{{ asset('assets/vendors/popper.js/popper.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/vendors/aos/aos.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script>
    AOS.init({
        duration: 1000
    });
</script>
</body>

</html>
