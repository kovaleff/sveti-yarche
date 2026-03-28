@extends('layouts.main')

@section('title', 'Свети Ярче | Эзотерика Миланы Соболевской')

@section('styles')
@endsection

@section('content')
    <div class="bg-arcane">
        {{--      <header class="navbar navbar-expand-lg navbar-glass sticky-top navbar-dark">--}}
        {{--        <div class="container py-2">--}}
        {{--          <a class="navbar-brand d-flex align-items-center gap-2" href="{{ url('/') }}" aria-label="Свети Ярче — главная">--}}
        {{--            <span class="card-icon" aria-hidden="true">--}}
        {{--              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Eidolon emblem">--}}
        {{--                <path d="M12 2C8.13 6.2 6 9.3 6 12.2C6 16.6 8.95 20 12 20C15.05 20 18 16.6 18 12.2C18 9.3 15.87 6.2 12 2Z" stroke="currentColor" stroke-width="1.5" />--}}
        {{--                <path d="M8 13.2C9.2 14.8 10.6 15.6 12 15.6C13.4 15.6 14.8 14.8 16 13.2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>--}}
        {{--              </svg>--}}
        {{--            </span>--}}
        {{--            <div class="lh-1">--}}
        {{--              <div class="fw-semibold text-glow">Свети Ярче</div>--}}
        {{--              <div class="small muted">Эзотерика Миланы Соболевской</div>--}}
        {{--            </div>--}}
        {{--          </a>--}}

        {{--          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">--}}
        {{--            <span class="navbar-toggler-icon"></span>--}}
        {{--          </button>--}}

        {{--          <div id="nav" class="collapse navbar-collapse">--}}
        {{--            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center gap-lg-3">--}}
        {{--              <li class="nav-item">--}}
        {{--                <a class="nav-link text-light active" aria-current="page" href="{{ url('/') }}">Главная</a>--}}
        {{--              </li>--}}
        {{--              <li class="nav-item"><a class="nav-link text-light" href="{{ url('/practice') }}">О практике</a></li>--}}
        {{--              <li class="nav-item"><a class="nav-link text-light" href="{{ url('/services') }}">Услуги</a></li>--}}
        {{--              <li class="nav-item"><a class="nav-link text-light" href="{{ url('/gallery') }}">Галерея</a></li>--}}
        {{--              <li class="nav-item"><a class="nav-link text-light" href="{{ url('/reviews') }}">Отзывы</a></li>--}}
        {{--              <li class="nav-item"><a class="nav-link text-light" href="{{ url('/booking') }}">Запись</a></li>--}}
        {{--              <li class="nav-item"><a class="nav-link text-light" href="{{ url('/contacts') }}">Контакты</a></li>--}}
        {{--            </ul>--}}
        {{--          </div>--}}
        {{--        </div>--}}
        {{--      </header>--}}

        <main id="home">
            <section class="container py-5 py-lg-6">
                <div class="row align-items-center g-4 g-lg-5">
                    <div class="col-lg-6">
                        <div class="d-inline-flex align-items-center gap-2 badge badge-arcane px-3 py-2 mb-3">
                            <i class="bi bi-moon-stars-fill" aria-hidden="true"></i>
                            <span class="small fw-semibold">Эзотерика, но по-доброму</span>
                        </div>

                        <h1 class="display-5 fw-bold text-glow">
                            Открой тихий портал
                        </h1>
                        <p class="lead muted mt-3 mb-4">
                            Темная глоу-страница-знакомство с практикой: ритуалы, смыслы и бережные подсказки.
                            Принесите любопытство — мы принесем свет.
                        </p>

                        <div class="d-flex flex-column flex-sm-row gap-3">
                            <a class="btn btn-accent btn-lg px-4" href="{{ url('/practice') }}">
                                <i class="bi bi-sunrise me-2" aria-hidden="true"></i> К практике
                            </a>
                            <a class="btn btn-ghost btn-lg px-4" href="{{ url('/booking') }}">
                                <i class="bi bi-envelope-paper me-2" aria-hidden="true"></i> Записаться
                            </a>
                        </div>

                        <div class="d-flex flex-wrap gap-3 mt-4">
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-lock-fill text-info" aria-hidden="true"></i>
                                <span class="small muted">Без слежки. Только атмосфера.</span>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-shield-check text-warning" aria-hidden="true"></i>
                                <span class="small muted">Запись без лишнего шума.</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card card-arcane">
                            <img src="/images/mila.png" class="img-fluid rounded-4 shadow-lg" alt="Эзотерика">
                        </div>

                        <div class="row g-3 mt-3">
                            <div class="col-md-4">
                                <div class="p-3 rounded-4"
                                     style="background: rgba(8,5,18,.22); border:1px solid rgba(168,85,247,.16);">
                                    <div class="fw-semibold text-glow"><span class="display-6">37</span><span
                                            class="fs-6">%</span></div>
                                    <div class="small muted">more mindful minutes</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-3 rounded-4"
                                     style="background: rgba(8,5,18,.22); border:1px solid rgba(168,85,247,.16);">
                                    <div class="fw-semibold text-glow"><span class="display-6">12</span></div>
                                    <div class="small muted">sigil collections</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-3 rounded-4"
                                     style="background: rgba(8,5,18,.22); border:1px solid rgba(168,85,247,.16);">
                                    <div class="fw-semibold text-glow"><span class="display-6">∞</span></div>
                                    <div class="small muted">room for wonder</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{--        <section id="practice" class="container pb-5">--}}
            {{--          <div class="d-flex align-items-end justify-content-between gap-3 flex-wrap">--}}
            {{--            <div>--}}
            {{--              <h2 class="fw-bold text-glow mb-1">О практике</h2>--}}
            {{--              <p class="muted mb-0">Смысл рождается из тишины: без лишнего шума и давления.</p>--}}
            {{--            </div>--}}
            {{--            <div class="d-flex gap-2">--}}
            {{--              <span class="badge badge-arcane">--}}
            {{--                <i class="bi bi-magic me-1" aria-hidden="true"></i> Бережные ритуалы--}}
            {{--              </span>--}}
            {{--              <span class="badge badge-arcane">--}}
            {{--                <i class="bi bi-stars me-1" aria-hidden="true"></i> Смысл и память--}}
            {{--              </span>--}}
            {{--            </div>--}}
            {{--          </div>--}}

            {{--          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mt-2">--}}
            {{--            <div class="col">--}}
            {{--              <div class="card card-arcane h-100 p-4">--}}
            {{--                <div class="d-flex align-items-center gap-3 mb-3">--}}
            {{--                  <div class="card-icon"><i class="bi bi-book" aria-hidden="true"></i></div>--}}
            {{--                  <div>--}}
            {{--                    <div class="fw-semibold">Библиотека символов</div>--}}
            {{--                    <div class="small muted">Символы + заметки о смыслах.</div>--}}
            {{--                  </div>--}}
            {{--                </div>--}}
            {{--                <div class="muted">--}}
            {{--                  Собирайте подсказки и интерпретации. Возвращайтесь, когда нужен знак.--}}
            {{--                </div>--}}
            {{--              </div>--}}
            {{--            </div>--}}

            {{--            <div class="col">--}}
            {{--              <div class="card card-arcane h-100 p-4">--}}
            {{--                <div class="d-flex align-items-center gap-3 mb-3">--}}
            {{--                  <div class="card-icon"><i class="bi bi-rss" aria-hidden="true"></i></div>--}}
            {{--                  <div>--}}
            {{--                    <div class="fw-semibold">Лента кодекса</div>--}}
            {{--                    <div class="small muted">Новые записи в спокойном темпе.</div>--}}
            {{--                  </div>--}}
            {{--                </div>--}}
            {{--                <div class="muted">--}}
            {{--                  Как перелистывать страницы. Никакой суеты — только атмосфера.--}}
            {{--                </div>--}}
            {{--              </div>--}}
            {{--            </div>--}}

            {{--            <div class="col">--}}
            {{--              <div class="card card-arcane h-100 p-4">--}}
            {{--                <div class="d-flex align-items-center gap-3 mb-3">--}}
            {{--                  <div class="card-icon"><i class="bi bi-calendar-event" aria-hidden="true"></i></div>--}}
            {{--                  <div>--}}
            {{--                    <div class="fw-semibold">Ритм практики</div>--}}
            {{--                    <div class="small muted">Напоминания по желанию.</div>--}}
            {{--                  </div>--}}
            {{--                </div>--}}
            {{--                <div class="muted">--}}
            {{--                  Настраивайте намерение на своих условиях. Мы делаем это деликатно.--}}
            {{--                </div>--}}
            {{--              </div>--}}
            {{--            </div>--}}

            {{--            <div class="col">--}}
            {{--              <div class="card card-arcane h-100 p-4">--}}
            {{--                <div class="d-flex align-items-center gap-3 mb-3">--}}
            {{--                  <div class="card-icon"><i class="bi bi-search" aria-hidden="true"></i></div>--}}
            {{--                  <div>--}}
            {{--                    <div class="fw-semibold">Поиск по состоянию</div>--}}
            {{--                    <div class="small muted">Находите смысл по ощущениям.</div>--}}
            {{--                  </div>--}}
            {{--                </div>--}}
            {{--                <div class="muted">--}}
            {{--                  Ищите по темам, настроению и коротким подсказкам.--}}
            {{--                </div>--}}
            {{--              </div>--}}
            {{--            </div>--}}

            {{--            <div class="col">--}}
            {{--              <div class="card card-arcane h-100 p-4">--}}
            {{--                <div class="d-flex align-items-center gap-3 mb-3">--}}
            {{--                  <div class="card-icon"><i class="bi bi-bell" aria-hidden="true"></i></div>--}}
            {{--                  <div>--}}
            {{--                    <div class="fw-semibold">Тихие уведомления</div>--}}
            {{--                    <div class="small muted">Только действительно важное.</div>--}}
            {{--                  </div>--}}
            {{--                </div>--}}
            {{--                <div class="muted">--}}
            {{--                  Узнавайте, когда появляется новое или обновляется архив.--}}
            {{--                </div>--}}
            {{--              </div>--}}
            {{--            </div>--}}

            {{--            <div class="col">--}}
            {{--              <div class="card card-arcane h-100 p-4">--}}
            {{--                <div class="d-flex align-items-center gap-3 mb-3">--}}
            {{--                  <div class="card-icon"><i class="bi bi-diagram-3" aria-hidden="true"></i></div>--}}
            {{--                  <div>--}}
            {{--                    <div class="fw-semibold">Ответ себе</div>--}}
            {{--                    <div class="small muted">Красиво фиксируйте наблюдения.</div>--}}
            {{--                  </div>--}}
            {{--                </div>--}}
            {{--                <div class="muted">--}}
            {{--                  Снимки разговора с собой, чтобы видеть собственные узоры.--}}
            {{--                </div>--}}
            {{--              </div>--}}
            {{--            </div>--}}
            {{--          </div>--}}
            {{--        </section>--}}

            <section id="services" class="container pb-5">
                <div class="d-flex align-items-end justify-content-between gap-3 flex-wrap">
                    <div>
                        <h2 class="fw-bold text-glow mb-1">Услуги</h2>
                        <p class="muted mb-0">Выберите формат: бережно подстроим практику под вас.</p>
                    </div>
                    <div class="d-flex gap-2">
                        <span class="badge badge-arcane"><i class="bi bi-person-workspace me-1" aria-hidden="true"></i> Индивидуально</span>
                        <span class="badge badge-arcane"><i class="bi bi-people me-1"
                                                            aria-hidden="true"></i> В группе</span>
                    </div>
                </div>

                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mt-2">
                    <div class="col">
                        <div class="card card-arcane h-100 p-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="card-icon"><i class="bi bi-person-lines-fill" aria-hidden="true"></i></div>
                                <div>
                                    <div class="fw-semibold">Индивидуальная сессия</div>
                                    <div class="small muted">Намерение, ритуал и персональная подсказка.</div>
                                </div>
                            </div>
                            <div class="muted">Для тех, кто хочет ясности и бережной настройки под себя.</div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card card-arcane h-100 p-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="card-icon"><i class="bi bi-people-fill" aria-hidden="true"></i></div>
                                <div>
                                    <div class="fw-semibold">Групповая практика</div>
                                    <div class="small muted">Тихие упражнения и совместные наблюдения.</div>
                                </div>
                            </div>
                            <div class="muted">Подходит, если вам важны ритм и поддержка участников.</div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card card-arcane h-100 p-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="card-icon"><i class="bi bi-chat-square-text" aria-hidden="true"></i></div>
                                <div>
                                    <div class="fw-semibold">Сопровождение</div>
                                    <div class="small muted">Разбор, мягкая корректировка и напоминания.</div>
                                </div>
                            </div>
                            <div class="muted">Для последовательности без перегруза и спешки.</div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card card-arcane h-100 p-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="card-icon"><i class="bi bi-bookmark-check-fill" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <div class="fw-semibold">Карта практики</div>
                                    <div class="small muted">План на 4 недели: темы и задания.</div>
                                </div>
                            </div>
                            <div class="muted">Когда нужно направление, но хочется сохранить естественность.</div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card card-arcane h-100 p-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="card-icon"><i class="bi bi-lightbulb" aria-hidden="true"></i></div>
                                <div>
                                    <div class="fw-semibold">Разбор смысла</div>
                                    <div class="small muted">Интерпретации и вопросы для осознания.</div>
                                </div>
                            </div>
                            <div class="muted">Подходит, если вы чувствуете, что "что-то было", но неясно что.</div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card card-arcane h-100 p-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="card-icon"><i class="bi bi-calendar-heart" aria-hidden="true"></i></div>
                                <div>
                                    <div class="fw-semibold">Настройка ритма</div>
                                    <div class="small muted">Гибкие напоминания без давления.</div>
                                </div>
                            </div>
                            <div class="muted">Если у вас то тише, то громче — поможем удержать тон.</div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="gallery" class="py-5 animate-on-scroll animate-show">
                <div class="container">
                    <div class="text-center mb-5">
                        <h2 class="display-5">Сакральное <span class="gold-text">пространство</span></h2>
                        <p class="lead">Атмосфера наших ритуалов и практик</p>
                    </div>
                    <div class="row g-4">
                        <div class="col-md-4 col-sm-6">
                            <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#galleryModal"
                                 data-img="https://picsum.photos/id/42/800/600">
                                <img src="/images/gallery/gal1.jpg" class="img-fluid rounded-4"
                                     style="width:100%; height:250px; object-fit:cover;">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#galleryModal"
                                 data-img="https://picsum.photos/id/169/800/600">
                                <img src="/images/gallery/gal2.jpg" class="img-fluid rounded-4"
                                     style="width:100%; height:250px; object-fit:cover;">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#galleryModal"
                                 data-img="https://picsum.photos/id/20/800/600">
                                <img src="/images/gallery/gal3.jpg" class="img-fluid rounded-4"
                                     style="width:100%; height:250px; object-fit:cover;">
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            {{--        <section id="gallery" class="container pb-5">--}}
            {{--          <div class="d-flex align-items-end justify-content-between gap-3 flex-wrap mb-3">--}}
            {{--            <div>--}}
            {{--              <h2 class="fw-bold text-glow mb-1">Галерея</h2>--}}
            {{--              <p class="muted mb-0">Фрагменты атмосферы: символы, ритуальные карточки, заметки.</p>--}}
            {{--            </div>--}}
            {{--          </div>--}}

            {{--          <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-3">--}}
            {{--            <div class="col">--}}
            {{--              <div class="card card-arcane h-100 p-4">--}}
            {{--                <div class="card-icon"><i class="bi bi-gem" aria-hidden="true"></i></div>--}}
            {{--                <div class="fw-semibold mt-3">Камень смысла</div>--}}
            {{--                <div class="small muted">Точка внимания для ясных формулировок.</div>--}}
            {{--              </div>--}}
            {{--            </div>--}}
            {{--            <div class="col">--}}
            {{--              <div class="card card-arcane h-100 p-4">--}}
            {{--                <div class="card-icon"><i class="bi bi-diagram-3" aria-hidden="true"></i></div>--}}
            {{--                <div class="fw-semibold mt-3">Схема намерения</div>--}}
            {{--                <div class="small muted">Как желание превращается в действие.</div>--}}
            {{--              </div>--}}
            {{--            </div>--}}
            {{--            <div class="col">--}}
            {{--              <div class="card card-arcane h-100 p-4">--}}
            {{--                <div class="card-icon"><i class="bi bi-fire" aria-hidden="true"></i></div>--}}
            {{--                <div class="fw-semibold mt-3">Тепло ритуала</div>--}}
            {{--                <div class="small muted">Нагрев спокойствием — не спешкой.</div>--}}
            {{--              </div>--}}
            {{--            </div>--}}
            {{--            <div class="col">--}}
            {{--              <div class="card card-arcane h-100 p-4">--}}
            {{--                <div class="card-icon"><i class="bi bi-book" aria-hidden="true"></i></div>--}}
            {{--                <div class="fw-semibold mt-3">Страница кодекса</div>--}}
            {{--                <div class="small muted">Коротко, точно и повторяемо.</div>--}}
            {{--              </div>--}}
            {{--            </div>--}}
            {{--            <div class="col">--}}
            {{--              <div class="card card-arcane h-100 p-4">--}}
            {{--                <div class="card-icon"><i class="bi bi-stars" aria-hidden="true"></i></div>--}}
            {{--                <div class="fw-semibold mt-3">Знак ночи</div>--}}
            {{--                <div class="small muted">Маленький ответ в подходящее время.</div>--}}
            {{--              </div>--}}
            {{--            </div>--}}
            {{--            <div class="col">--}}
            {{--              <div class="card card-arcane h-100 p-4">--}}
            {{--                <div class="card-icon"><i class="bi bi-shield-check" aria-hidden="true"></i></div>--}}
            {{--                <div class="fw-semibold mt-3">Безопасный тон</div>--}}
            {{--                <div class="small muted">Мы за бережность и ясные границы.</div>--}}
            {{--              </div>--}}
            {{--            </div>--}}
            {{--          </div>--}}
{{--            </section>--}}


            <section id="testimonials" class="px-3">
                <div class="container pb-5">
                    <div class="col-md-6">
                        <h2 class="display-5">Отзывы <span class="gold-text">наших клиентов</span></h2>
                        <p class="lead">Что говорят те, кто уже открыл свой путь с нами</p>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-3">
                            <div class="testimonial-card">
                                <img src="/images/users/4.jpg" alt="Михаил" class="testimonial-avatar">
                                <h5 class="mt-3">Михаил П.</h5>
                                <div class="gold-text mb-2">★★★★★</div>
                                <p class="fst-italic">"Очень глубокий подход к эзотерике. Чувствуется мудрость и опыт.
                                    Обязательно приду еще на кристаллотерапию!"</p>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="testimonial-card">
                                <img src="/images/users/1.jpg" alt="Анна" class="testimonial-avatar">
                                <h5 class="mt-3">Анна С.</h5>
                                <div class="gold-text mb-2">★★★★★</div>
                                <p class="fst-italic">"Благодаря консультации с Аурой я нашла ответы на вопросы, которые
                                    мучили меня годами. Астрологическая карта открыла новые горизонты. Огромная
                                    благодарность!"</p>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="testimonial-card">
                                <img src="/images/users/2.jpg" alt="Дмитрий" class="testimonial-avatar">
                                <h5 class="mt-3">Дмитрий К.</h5>
                                <div class="gold-text mb-2">★★★★★</div>
                                <p class="fst-italic">"Сеанс Рейки помог восстановить энергию и обрести внутренний
                                    покой. Очень рекомендую! Атмосфера и подход — выше всяких похвал."</p>
                            </div>
                        </div>


                        <div class="col-lg-3">
                            <div class="testimonial-card">
                                <img src="/images/users/3.jpg" alt="Елена" class="testimonial-avatar">
                                <h5 class="mt-3">Елена М.</h5>
                                <div class="gold-text mb-2">★★★★★</div>
                                <p class="fst-italic">"Таро раскрыло истинные причины проблем в отношениях. Теперь я
                                    смотрю на жизнь иначе. Спасибо за профессионализм и душевность!"</p>
                            </div>
                        </div>

                    </div>


                </div>
            </section>

            <section id="booking" class="container pb-5">
                <div class="p-4 p-md-5 rounded-4"
                     style="background: rgba(8,5,18,.25); border:1px solid rgba(34,211,238,.18);">
                    <div class="row align-items-center g-4">
                        <div class="col-lg-6">
                            <h2 class="fw-bold text-glow mb-2">Запись</h2>
                            <p class="muted mb-4">
                                Оставьте контакт — мы ответим и подскажем следующий шаг в записи.
                            </p>

                            <div class="d-flex flex-wrap gap-3">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="bi bi-star-fill text-warning" aria-hidden="true"></i>
                                    <span class="small muted">Без спама. Только по делу.</span>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <i class="bi bi-heart-fill text-danger" aria-hidden="true"></i>
                                    <span class="small muted">Живое и понятное сообщение</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <form class="form-arcane p-3 p-sm-4 rounded-4" action="{{ url('/booking') }}" method="post"
                                  aria-label="Запись">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="email" name="email" type="email"
                                           placeholder="name@example.com" required/>
                                    <label for="email">Email</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input class="form-control" id="name" name="name" type="text" placeholder="Ваше имя"
                                           maxlength="80"/>
                                    <label for="name">Имя (необязательно)</label>
                                </div>

                                <button class="btn btn-accent w-100 py-3" type="submit">
                                    <i class="bi bi-send-fill me-2" aria-hidden="true"></i> Отправить заявку
                                </button>
                                <div class="small muted mt-2">
                                    Нажимая кнопку, вы соглашаетесь получить ответ по заявке.
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </section>

            {{--        <section id="reviews" class="container pb-5">--}}
            {{--          <div class="d-flex align-items-end justify-content-between gap-3 flex-wrap mb-3">--}}
            {{--            <div>--}}
            {{--              <h2 class="fw-bold text-glow mb-1">Отзывы</h2>--}}
            {{--              <p class="muted mb-0">Живые впечатления от практики.</p>--}}
            {{--            </div>--}}
            {{--          </div>--}}

            {{--          <div class="row g-4">--}}
            {{--            <div class="col-md-6 col-lg-4">--}}
            {{--              <div class="card card-arcane h-100 p-4">--}}
            {{--                <div class="d-flex align-items-start justify-content-between mb-2">--}}
            {{--                  <div>--}}
            {{--                    <div class="fw-semibold">Екатерина</div>--}}
            {{--                    <div class="small muted">индивидуальная сессия</div>--}}
            {{--                  </div>--}}
            {{--                  <div class="text-warning" aria-label="5 stars">--}}
            {{--                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>--}}
            {{--                  </div>--}}
            {{--                </div>--}}
            {{--                <div class="muted">--}}
            {{--                  "После встречи стало легче формулировать намерение. Больше тишины внутри и меньше суеты снаружи."--}}
            {{--                </div>--}}
            {{--              </div>--}}
            {{--            </div>--}}

            {{--            <div class="col-md-6 col-lg-4">--}}
            {{--              <div class="card card-arcane h-100 p-4">--}}
            {{--                <div class="d-flex align-items-start justify-content-between mb-2">--}}
            {{--                  <div>--}}
            {{--                    <div class="fw-semibold">Николай</div>--}}
            {{--                    <div class="small muted">групповая практика</div>--}}
            {{--                  </div>--}}
            {{--                  <div class="text-warning" aria-label="5 stars">--}}
            {{--                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>--}}
            {{--                  </div>--}}
            {{--                </div>--}}
            {{--                <div class="muted">--}}
            {{--                  "Очень понравился темп. Упражнения короткие, но дают заметный эффект в течение недели."--}}
            {{--                </div>--}}
            {{--              </div>--}}
            {{--            </div>--}}

            {{--            <div class="col-md-6 col-lg-4">--}}
            {{--              <div class="card card-arcane h-100 p-4">--}}
            {{--                <div class="d-flex align-items-start justify-content-between mb-2">--}}
            {{--                  <div>--}}
            {{--                    <div class="fw-semibold">Мария</div>--}}
            {{--                    <div class="small muted">сопровождение</div>--}}
            {{--                  </div>--}}
            {{--                  <div class="text-warning" aria-label="5 stars">--}}
            {{--                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>--}}
            {{--                  </div>--}}
            {{--                </div>--}}
            {{--                <div class="muted">--}}
            {{--                  "Практика помогла мне лучше понимать свои реакции и эмоциональные паттерны. Теперь чувствую себя более устойчиво."--}}
            {{--                </div>--}}
            {{--              </div>--}}
            {{--            </div>--}}
            {{--          </div>--}}
            {{--        </section>--}}
        </main>
    </div>
@endsection

@section('scripts')
@endsection
