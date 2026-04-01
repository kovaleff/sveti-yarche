@extends('layouts.main')

@section('title', 'Свети Ярче | Эзотерика Миланы Соболевской')

@section('styles')
@endsection

@section('content')
    <div class="bg-arcane">
        <main id="home">
            <section class="container py-5 py-lg-6">
                <div class="row align-items-stretch g-4 g-lg-5">
                    <div class="col-lg-6">
                        <div class="d-inline-flex align-items-center gap-2 badge badge-arcane px-3 py-2 mb-3">
                            <i class="bi bi-moon-stars-fill" aria-hidden="true"></i>
                            <span class="small fw-semibold">Эзотерика, но по-доброму</span>
                        </div>

                        <h2 class="fw-bold">
                            {{$main->title}}
                        </h2>
                        <p class="lead muted mt-3 mb-4">
                            {!! $main->content !!}
                        </p>


                    </div>

                    <div class="col-lg-6 d-flex flex-column justify-content-center">
                        <div class="card card-arcane mt-3">
                            <img src="{{$main->main_image}}" class="img-fluid rounded-4 shadow-lg" alt="Эзотерика">
                        </div>
                        <div class="mt-5">
                            <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
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

{{--                        <div class="row g-3 mt-3">--}}
{{--                            <div class="col-md-4">--}}
{{--                                <div class="p-3 rounded-4"--}}
{{--                                     style="background: rgba(8,5,18,.22); border:1px solid rgba(168,85,247,.16);">--}}
{{--                                    <div class="fw-semibold text-glow"><span class="display-6">37</span><span--}}
{{--                                            class="fs-6">%</span></div>--}}
{{--                                    <div class="small muted">more mindful minutes</div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-4">--}}
{{--                                <div class="p-3 rounded-4"--}}
{{--                                     style="background: rgba(8,5,18,.22); border:1px solid rgba(168,85,247,.16);">--}}
{{--                                    <div class="fw-semibold text-glow"><span class="display-6">12</span></div>--}}
{{--                                    <div class="small muted">sigil collections</div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-4">--}}
{{--                                <div class="p-3 rounded-4"--}}
{{--                                     style="background: rgba(8,5,18,.22); border:1px solid rgba(168,85,247,.16);">--}}
{{--                                    <div class="fw-semibold text-glow"><span class="display-6">∞</span></div>--}}
{{--                                    <div class="small muted">room for wonder</div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </section>

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
                    @foreach($services as $service)
                        <div class="col">
                            <div class="card card-arcane h-100 p-4">
                                <div class="d-flex align-items-center gap-3 mb-3">
                                        @if($service->is_grouped)
                                            <div class="card-icon"><i class="bi bi-people-fill" aria-hidden="true"></i></div>
                                        <div>
                                            <div class="fw-semibold">Групповая практика</div>
                                            <div class="small muted">{{$service->title}}</div>
                                        </div>
                                        @else
                                            <div class="card-icon"><i class="bi bi-person-lines-fill" aria-hidden="true"></i></div>
                                            <div>
                                                <div class="fw-semibold">Индивидуальная сессия</div>
                                                <div class="small muted">{{$service->title}}</div>
                                            </div>
                                        @endif

                                </div>

                                <div class="muted">{!!$service->content!!}</div>
                            </div>
                        </div>
                    @endforeach
{{--                    <div class="col">--}}
{{--                        <div class="card card-arcane h-100 p-4">--}}
{{--                            <div class="d-flex align-items-center gap-3 mb-3">--}}
{{--                                <div class="card-icon"><i class="bi bi-person-lines-fill" aria-hidden="true"></i></div>--}}
{{--                                <div>--}}
{{--                                    <div class="fw-semibold">Индивидуальная сессия</div>--}}
{{--                                    <div class="small muted">Намерение, ритуал и персональная подсказка.</div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="muted">Для тех, кто хочет ясности и бережной настройки под себя.</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col">--}}
{{--                        <div class="card card-arcane h-100 p-4">--}}
{{--                            <div class="d-flex align-items-center gap-3 mb-3">--}}
{{--                                <div class="card-icon"><i class="bi bi-people-fill" aria-hidden="true"></i></div>--}}
{{--                                <div>--}}
{{--                                    <div class="fw-semibold">Групповая практика</div>--}}
{{--                                    <div class="small muted">Тихие упражнения и совместные наблюдения.</div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="muted">Подходит, если вам важны ритм и поддержка участников.</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col">--}}
{{--                        <div class="card card-arcane h-100 p-4">--}}
{{--                            <div class="d-flex align-items-center gap-3 mb-3">--}}
{{--                                <div class="card-icon"><i class="bi bi-chat-square-text" aria-hidden="true"></i></div>--}}
{{--                                <div>--}}
{{--                                    <div class="fw-semibold">Сопровождение</div>--}}
{{--                                    <div class="small muted">Разбор, мягкая корректировка и напоминания.</div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="muted">Для последовательности без перегруза и спешки.</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col">--}}
{{--                        <div class="card card-arcane h-100 p-4">--}}
{{--                            <div class="d-flex align-items-center gap-3 mb-3">--}}
{{--                                <div class="card-icon"><i class="bi bi-bookmark-check-fill" aria-hidden="true"></i>--}}
{{--                                </div>--}}
{{--                                <div>--}}
{{--                                    <div class="fw-semibold">Карта практики</div>--}}
{{--                                    <div class="small muted">План на 4 недели: темы и задания.</div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="muted">Когда нужно направление, но хочется сохранить естественность.</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col">--}}
{{--                        <div class="card card-arcane h-100 p-4">--}}
{{--                            <div class="d-flex align-items-center gap-3 mb-3">--}}
{{--                                <div class="card-icon"><i class="bi bi-lightbulb" aria-hidden="true"></i></div>--}}
{{--                                <div>--}}
{{--                                    <div class="fw-semibold">Разбор смысла</div>--}}
{{--                                    <div class="small muted">Интерпретации и вопросы для осознания.</div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="muted">Подходит, если вы чувствуете, что "что-то было", но неясно что.</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col">--}}
{{--                        <div class="card card-arcane h-100 p-4">--}}
{{--                            <div class="d-flex align-items-center gap-3 mb-3">--}}
{{--                                <div class="card-icon"><i class="bi bi-calendar-heart" aria-hidden="true"></i></div>--}}
{{--                                <div>--}}
{{--                                    <div class="fw-semibold">Настройка ритма</div>--}}
{{--                                    <div class="small muted">Гибкие напоминания без давления.</div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="muted">Если у вас то тише, то громче — поможем удержать тон.</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </section>
{{--            <section id="gallery" class="py-5 animate-on-scroll animate-show">--}}
{{--                <div class="container">--}}
{{--                    <div class="text-center mb-5">--}}
{{--                        <h2 class="display-5">Сакральное <span class="gold-text">пространство</span></h2>--}}
{{--                        <p class="lead">Атмосфера наших ритуалов и практик</p>--}}
{{--                    </div>--}}
{{--                    <div class="row g-4">--}}
{{--                        <div class="col-md-4 col-sm-6">--}}
{{--                            <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#galleryModal"--}}
{{--                                 data-img="https://picsum.photos/id/42/800/600">--}}
{{--                                <img src="/images/gallery/gal1.jpg" class="img-fluid rounded-4"--}}
{{--                                     style="width:100%; height:250px; object-fit:cover;">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-4 col-sm-6">--}}
{{--                            <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#galleryModal"--}}
{{--                                 data-img="https://picsum.photos/id/169/800/600">--}}
{{--                                <img src="/images/gallery/gal2.jpg" class="img-fluid rounded-4"--}}
{{--                                     style="width:100%; height:250px; object-fit:cover;">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-4 col-sm-6">--}}
{{--                            <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#galleryModal"--}}
{{--                                 data-img="https://picsum.photos/id/20/800/600">--}}
{{--                                <img src="/images/gallery/gal3.jpg" class="img-fluid rounded-4"--}}
{{--                                     style="width:100%; height:250px; object-fit:cover;">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </section>--}}


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
                     style="background: rgba(8,5,18,0.4); border:1px solid rgba(34,211,238,1);">
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
        </main>
    </div>
@endsection

@section('scripts')
@endsection
