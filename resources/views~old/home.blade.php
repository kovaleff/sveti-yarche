@extends('layouts.main')
@section('title', 'Свети ярче!')
@section('content')
    <main>
        <div style="height: 82px;"></div>

        <!-- Видео-фон в шапке -->
        <section class="hero-video-wrapper" id="home">
            <video class="hero-video" autoplay muted loop playsinline>
                <source src="https://assets.mixkit.co/videos/preview/mixkit-stars-in-space-1612-large.mp4" type="video/mp4">
                Ваш браузер не поддерживает видео.
            </video>
            <div class="hero-overlay"></div>
            <div class="container hero-content">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6">
                        <span class="badge bg-warning bg-opacity-10 text-warning mb-3 px-3 py-2 rounded-pill"><i class="bi bi-stars me-1"></i> Сакральное знание</span>
                        <h1 class="display-4 fw-semibold mb-3">Откройте <span class="gold-text">врата</span> своей души</h1>
                        <p class="lead mb-4">Древние практики, астрология, энергетические настройки и таро. Помогаем обрести внутреннюю гармонию, ясность и силу на пути самопознания.</p>
                        <div class="d-flex flex-wrap gap-3">
                            <a href="#booking" class="btn btn-esoteric"><i class="bi bi-calendar-check"></i> Записаться</a>
                            <a href="#about" class="btn btn-esoteric"><i class="bi bi-compass"></i> Узнать путь</a>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center">
                        <img src="https://picsum.photos/id/104/500/450" alt="Эзотерика" class="img-fluid rounded-4 shadow-lg" style="max-height: 400px; object-fit: cover;">
                    </div>
                </div>
            </div>
        </section>

        <!-- Цитата -->
        <div class="container my-4 animate-on-scroll">
            <div class="text-center py-3">
                <div class="mystic-divider"></div>
                <p class="fs-5 fst-italic">«Тот, кто смотрит внутрь, пробуждается. Вселенная шепчет ответы тем, кто научился слушать тишину»</p>
                <div class="mystic-divider"></div>
            </div>
        </div>

        <!-- О практике -->
        <section id="about" class="py-5 animate-on-scroll">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-md-6">
                        <h2 class="display-5 fw-semibold mb-3">Энергия <span class="gold-text">Луны и камней</span></h2>
                        <p>Мы используем древние техники: карты Таро, руны, астрологические карты и регрессивные практики. Каждая консультация — это уникальное путешествие в глубины вашего подсознания.</p>
                        <ul class="list-unstyled mt-4">
                            <li class="mb-2"><i class="bi bi-gem gold-text me-2"></i> Индивидуальные сеансы с кристаллами</li>
                            <li class="mb-2"><i class="bi bi-moon gold-text me-2"></i> Лунные календари и ритуалы</li>
                            <li class="mb-2"><i class="bi bi-tree gold-text me-2"></i> Родовая терапия и медитации</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <img src="https://picsum.photos/id/29/600/450" class="img-fluid rounded-4 shadow-lg" alt="Эзотерика">
                    </div>
                </div>
            </div>
        </section>

        <!-- Услуги -->
        <section id="services" class="py-5 animate-on-scroll">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="display-5">Направления <span class="gold-text">эзотерики</span></h2>
                    <p class="lead">Выберите практику, которая откликается вашему сердцу</p>
                </div>
                <div class="row g-4">
                    <div class="col-md-4 animate-on-scroll delay-1">
                        <div class="card-esoteric card h-100 p-4 text-center">
                            <div class="icon-circle mx-auto"><i class="bi bi-brightness-alt-high"></i></div>
                            <h5 class="card-title fs-4">Астрология</h5>
                            <p>Натальная карта, прогнозы, поиск предназначения и благоприятных периодов.</p>
                        </div>
                    </div>
                    <div class="col-md-4 animate-on-scroll delay-2">
                        <div class="card-esoteric card h-100 p-4 text-center">
                            <div class="icon-circle mx-auto"><i class="bi bi-eye"></i></div>
                            <h5 class="card-title fs-4">Таро & Оракулы</h5>
                            <p>Глубокий анализ ситуаций, расклады на отношения, карьеру и духовный рост.</p>
                        </div>
                    </div>
                    <div class="col-md-4 animate-on-scroll delay-3">
                        <div class="card-esoteric card h-100 p-4 text-center">
                            <div class="icon-circle mx-auto"><i class="bi bi-flower1"></i></div>
                            <h5 class="card-title fs-4">Рейки & Энерготерапия</h5>
                            <p>Восстановление энергетического баланса, исцеление чакр, снятие блоков.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Галерея -->
        <section id="gallery" class="py-5 animate-on-scroll">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="display-5">Сакральное <span class="gold-text">пространство</span></h2>
                    <p class="lead">Атмосфера наших ритуалов и практик</p>
                </div>
                <div class="row g-4">
                    <div class="col-md-4 col-sm-6">
                        <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#galleryModal" data-img="https://picsum.photos/id/42/800/600">
                            <img src="https://picsum.photos/id/42/600/400" class="img-fluid rounded-4" style="width:100%; height:250px; object-fit:cover;">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#galleryModal" data-img="https://picsum.photos/id/169/800/600">
                            <img src="https://picsum.photos/id/169/600/400" class="img-fluid rounded-4" style="width:100%; height:250px; object-fit:cover;">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#galleryModal" data-img="https://picsum.photos/id/20/800/600">
                            <img src="https://picsum.photos/id/20/600/400" class="img-fluid rounded-4" style="width:100%; height:250px; object-fit:cover;">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ОТЗЫВЫ С КАРУСЕЛЬЮ -->
        <section id="testimonials" class="py-5 animate-on-scroll">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="display-5">Отзывы <span class="gold-text">наших клиентов</span></h2>
                    <p class="lead">Что говорят те, кто уже открыл свой путь с нами</p>
                </div>
                <div class="swiper testimonial-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-card">
                                <img src="https://randomuser.me/api/portraits/women/1.jpg" alt="Анна" class="testimonial-avatar">
                                <h5 class="mt-3">Анна С.</h5>
                                <div class="gold-text mb-2">★★★★★</div>
                                <p class="fst-italic">"Благодаря консультации с Аурой я нашла ответы на вопросы, которые мучили меня годами. Астрологическая карта открыла новые горизонты. Огромная благодарность!"</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-card">
                                <img src="https://randomuser.me/api/portraits/men/2.jpg" alt="Дмитрий" class="testimonial-avatar">
                                <h5 class="mt-3">Дмитрий К.</h5>
                                <div class="gold-text mb-2">★★★★★</div>
                                <p class="fst-italic">"Сеанс Рейки помог восстановить энергию и обрести внутренний покой. Очень рекомендую! Атмосфера и подход — выше всяких похвал."</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-card">
                                <img src="https://randomuser.me/api/portraits/women/3.jpg" alt="Елена" class="testimonial-avatar">
                                <h5 class="mt-3">Елена М.</h5>
                                <div class="gold-text mb-2">★★★★★</div>
                                <p class="fst-italic">"Таро раскрыло истинные причины проблем в отношениях. Теперь я смотрю на жизнь иначе. Спасибо за профессионализм и душевность!"</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-card">
                                <img src="https://randomuser.me/api/portraits/men/4.jpg" alt="Михаил" class="testimonial-avatar">
                                <h5 class="mt-3">Михаил П.</h5>
                                <div class="gold-text mb-2">★★★★★</div>
                                <p class="fst-italic">"Очень глубокий подход к эзотерике. Чувствуется мудрость и опыт. Обязательно приду еще на кристаллотерапию!"</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <!-- ФОРМА ЗАПИСИ -->
        <section id="booking" class="py-5 animate-on-scroll">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="text-center mb-5">
                            <h2 class="display-5">Запись на <span class="gold-text">консультацию</span></h2>
                            <p class="lead">Выберите удобную дату и время для личной или онлайн-встречи</p>
                        </div>
                        <div class="card-esoteric p-4 p-md-5">
                            <form id="bookingForm">
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control form-control-custom" id="bookingName" placeholder="Ваше имя *" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" class="form-control form-control-custom" id="bookingEmail" placeholder="Email *" required>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-select form-control-custom" id="bookingService">
                                            <option value="Астрология">Астрология</option>
                                            <option value="Таро">Таро</option>
                                            <option value="Рейки">Рейки</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control form-control-custom" id="bookingDate" placeholder="Выберите дату" readonly>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-esoteric w-100 py-3"><i class="bi bi-calendar-check"></i> Записаться</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- КАРТА ПРОЕЗДА И КОНТАКТЫ -->
        <section id="contact" class="py-5 animate-on-scroll">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="display-5">Где <span class="gold-text">нас найти</span></h2>
                    <p class="lead">Студия в центре города и онлайн-консультации по всему миру</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div id="map" style="height: 400px; border-radius: 24px;"></div>
                        <p class="mt-3 text-center"><i class="bi bi-geo-alt-fill gold-text"></i> г. Москва, ул. Арбат, 15, офис 204</p>
                    </div>
                    <div class="col-lg-6">
                        <div class="card-esoteric p-4 h-100">
                            <h4><i class="bi bi-telephone-fill gold-text"></i> Контакты</h4>
                            <hr>
                            <p><i class="bi bi-whatsapp"></i> +7 (999) 123-45-67</p>
                            <p><i class="bi bi-telegram"></i> @AuraMystica_help</p>
                            <p><i class="bi bi-envelope"></i> info@auramystica.ru</p>
                            <p><i class="bi bi-clock"></i> Пн-Вс: 10:00 - 21:00</p>
                            <hr>
                            <p class="fst-italic">"Возможны онлайн-консультации для клиентов из любых городов"</p>
                            <div class="social-icons mt-3">
                                <a href="#"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-telegram"></i></a>
                                <a href="#"><i class="bi bi-vk"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <div class="container">
        <div class="modal fade gallery-modal" id="galleryModal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content bg-transparent border-0">
                    <div class="modal-body text-center p-0">
                        <img id="modalImage" src="" class="img-fluid rounded-4 shadow-lg">
                        <button class="btn btn-esoteric mt-3" data-bs-dismiss="modal">Закрыть</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
