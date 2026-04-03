<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Свети Ярче!')</title>
    <!-- Add your CSS links here -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet" />
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet" />

{{--    @yield('styles')--}}
</head>
<body>
    <div id="app" class="bg-arcane">
        @include('../header')
        <main id="home">
            @yield('content')
            <section id="" class="container pb-5">
                <div class="p-4 p-md-5 rounded-4"
                     style="background: rgba(8,5,18,0.4); border:1px solid rgba(34,211,238,1);">
                    <div class="">
                        <h4><i class="bi bi-telephone-fill gold-text"></i> Контакты</h4>
                        <hr>
                        <div class="d-flex">
                            <div class="col"><i class="bi bi-whatsapp gold-text"></i> +7 (999) 123-45-67</div>
                            <div class="col"><i class="bi bi-whatsapp gold-text"></i> +7 (999) 123-45-67</div>
                            <div class="col"><i class="bi bi-envelope gold-text"></i> info@auramystica.ru</div>
                            <div class="col"><i class="bi bi-clock gold-text"></i> Пн-Вс: 10:00 - 21:00</div>
                            <div class="col"><i class="bi bi-telegram gold-text"></i> Пн-Вс: 10:00 - 21:00</div>
                            <div class="col"><i class="bi bi-vk gold-text"></i> Пн-Вс: 10:00 - 21:00</div>
                            <div class="col"><i class="bi bi-instagram gold-text"></i> Пн-Вс: 10:00 - 21:00</div>
                        </div>
                        <hr>
                        <p class="fst-italic">"Возможны онлайн-консультации для клиентов из любых городов"</p>
                    </div>            </div>
            </section>
        </main>

        @include('../footer')
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
{{--    <script src="{{ asset('resources/js/app.js') }}"></script>--}}
    @yield('scripts')
</body>
</html>
