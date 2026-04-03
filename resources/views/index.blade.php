@extends('layouts.main')

@section('title', 'Свети Ярче | Энергоцелитель Милана Соболевская')
@section('content')
{{--    <div class="bg-arcane">--}}
            <section class="container py-5 py-lg-6">
                <div class="row align-items-stretch g-4 g-lg-5">
                    <div class="col-lg-6">
                        <div class="d-inline-flex align-items-center gap-2 badge badge-arcane px-3 py-2 mb-3">
                            <i class="bi bi-moon-stars-fill" aria-hidden="true"></i>
                            <span class="small fw-semibold">Эзотерика по-доброму</span>
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
                            <div class="card card-service  card-service-{{rand(1,10)}} h-100 p-4">
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

            </section>

            <section id="testimonials" class="px-3">
                <div class="container pb-5">
                    <div class="col-md-6">
                        <h2 class="display-5">Отзывы <span class="gold-text">наших клиентов</span></h2>
                        <p class="lead">Что говорят те, кто уже открыл свой путь с нами</p>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-3">
                            <div class="testimonial-card testimonial-card-{{rand(1,10)}}">
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

            <section id="booking" class="container mb-5">
                <div class="p-4 p-md-5 rounded-4">
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
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <input type="text" class="form-control form-control-custom" name="username" placeholder="Ваше имя *" required="">
                                </div>
                                <div class="col-md-6">
                                    <input type="tel" class="form-control form-control-custom" name="phone" placeholder="+7 (999) 999-99-99"  pattern="[\+]7[\s\(\-]\d{3}[\s\)\-]\d{3}[\s\-]\d{2}[\s\-]\d{2} required">
                                </div>
                                <div class="col-md-6">
                                    <select class="form-select form-control-custom" id="bookingService">
                                        <option value="Астрология">Астрология</option>
                                        <option value="Таро">Таро</option>
                                        <option value="Рейки">Рейки</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <input type="datetime-local" class="form-control form-control-custom flatpickr-input" name="datetobook">
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-esoteric w-100 py-3"><i class="bi bi-calendar-check"></i> Записаться</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
{{--    </div>--}}
@endsection

@section('scripts')
@endsection
