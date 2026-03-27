<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>App Name - @yield('title')</title>

    @vite('resources/css/app.css')
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400&display=swap" rel="stylesheet">
    <!-- Flatpickr для календаря -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/themes/dark.css">
    <!-- Swiper для карусели отзывов -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- Yandex Maps API -->
    <script src="https://api-maps.yandex.ru/2.1/?apikey=ваш-ключ&lang=ru_RU" type="text/javascript"></script>

</head>
<body>

<div class="container">
{{--    <nav class="navbar navbar-expand-lg bg-body-tertiary row">--}}
{{--        @include('parts.topmenu')--}}
{{--    </nav>--}}
    @include('parts.topmenu')
    <div class="main-content">@yield('content')</div>
{{--    @include('parts.footer')--}}

    <!-- Футер -->
    <footer class="footer py-5">
        <div class="container">
            <div class="footer-menu mb-3">
                <a href="#">Главная</a>
                <a href="#about">О практике</a>
                <a href="#services">Услуги</a>
                <a href="#gallery">Галерея</a>
                <a href="#testimonials">Отзывы</a>
                <a href="#booking">Запись</a>
            </div>
            <div class="social-icons text-center mb-3">
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-telegram"></i></a>
                <a href="#"><i class="bi bi-vk"></i></a>
                <a href="#"><i class="bi bi-youtube"></i></a>
            </div>
            <hr style="max-width: 200px; margin: 1rem auto;">
            <div class="text-center">
                <p><i class="bi bi-moon-stars-fill gold-text me-2"></i> Aura Mystica — эзотерическое пространство</p>
                <small>© 2025 Все права защищены. Магия в гармонии с природой.</small>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/ru.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        // Переключение темы
        const themeToggle = document.getElementById('themeToggle');
        const themeText = document.getElementById('themeText');
        let isDark = true;

        themeToggle.addEventListener('click', () => {
            document.body.classList.toggle('light-theme');
            isDark = !document.body.classList.contains('light-theme');
            themeText.textContent = isDark ? 'Светлая' : 'Тёмная';
            themeToggle.innerHTML = isDark ? '<i class="bi bi-sun-fill"></i> Светлая' : '<i class="bi bi-moon-fill"></i> Тёмная';
        });

        // Календарь
        flatpickr("#bookingDate", {
            locale: "ru",
            minDate: "today",
            dateFormat: "d.m.Y"
        });

        // Форма записи
        document.getElementById('bookingForm')?.addEventListener('submit', (e) => {
            e.preventDefault();
            alert('✨ Спасибо! Ваша заявка принята. Мы свяжемся с вами для подтверждения.');
            e.target.reset();
        });

        // Галерея модальное окно
        const galleryItems = document.querySelectorAll('.gallery-item');
        galleryItems.forEach(item => {
            item.addEventListener('click', () => {
                const imgSrc = item.getAttribute('data-img');
                document.getElementById('modalImage').src = imgSrc;
            });
        });

        // Карусель отзывов
        const swiper = new Swiper('.testimonial-swiper', {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 30,
            pagination: { el: '.swiper-pagination', clickable: true },
            navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
            breakpoints: { 768: { slidesPerView: 2 }, 992: { slidesPerView: 3 } }
        });

        // Яндекс Карта
        ymaps.ready(init);
        function init() {
            const myMap = new ymaps.Map("map", {
                center: [55.751574, 37.573856],
                zoom: 15,
                controls: ['zoomControl', 'fullscreenControl']
            });
            const placemark = new ymaps.Placemark([55.751574, 37.573856], {
                hintContent: 'Aura Mystica',
                balloonContent: 'Студия эзотерики, ул. Арбат 15'
            }, { preset: 'islands#goldDotIcon' });
            myMap.geoObjects.add(placemark);
        }

        // Анимация при скролле
        const animateElements = document.querySelectorAll('.animate-on-scroll');
        function checkScroll() {
            animateElements.forEach(el => {
                const rect = el.getBoundingClientRect();
                if (rect.top < window.innerHeight - 100) el.classList.add('animate-show');
            });
        }
        window.addEventListener('scroll', checkScroll);
        window.addEventListener('load', checkScroll);

        // Активное меню
        const sections = document.querySelectorAll('section[id], #home');
        const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
        function setActiveLink() {
            let current = '';
            const scrollPos = window.scrollY + 150;
            sections.forEach(section => {
                if (scrollPos >= section.offsetTop && scrollPos < section.offsetTop + section.offsetHeight) {
                    current = section.getAttribute('id');
                }
            });
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${current}`) link.classList.add('active');
                if (current === 'home' && link.getAttribute('href') === '#') link.classList.add('active');
            });
        }
        window.addEventListener('scroll', setActiveLink);
        window.addEventListener('load', setActiveLink);

        // Плавный скролл
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href === '#' || href === '') return;
                const target = document.querySelector(href);
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });
    </script>
</div>
@vite('resources/js/app.js')
</body>
</html>
