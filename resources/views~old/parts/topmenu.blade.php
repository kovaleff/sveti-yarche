{{--<div class="container-fluid">--}}
{{--    @include('parts.logo')--}}
{{--    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--        <span class="navbar-toggler-icon"></span>--}}
{{--    </button>--}}
{{--    @include('parts.menu')--}}
{{--    @include('parts.address')--}}
{{--</div>--}}

<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <i class="bi bi-moon-stars-fill logo-icon"></i>
            <span class="logo-text">Aura Mystica</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMain">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" href="#">Главная</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">О практике</a></li>
                <li class="nav-item"><a class="nav-link" href="#services">Услуги</a></li>
                <li class="nav-item"><a class="nav-link" href="#gallery">Галерея</a></li>
                <li class="nav-item"><a class="nav-link" href="#testimonials">Отзывы</a></li>
                <li class="nav-item"><a class="nav-link" href="#booking">Запись</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Контакты</a></li>
            </ul>
            <button class="theme-toggle" id="themeToggle">
                <i class="bi bi-sun-fill"></i> <span id="themeText">Светлая</span>
            </button>
        </div>
    </div>
</nav>

