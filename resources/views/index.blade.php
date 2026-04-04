@extends('layouts.main')

@section('title', 'Свети Ярче | Энергоцелитель Милана Соболевская')
@section('content')
{{--    <div class="bg-arcane">--}}
            <section class="container py-5 py-lg-6 main-article">
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
                        </div>
                    </div>
                </div>
            </section>

            <section id="services" class="container pb-5">
                <div class="d-flex align-items-end justify-content-between gap-3 flex-wrap">
                    <div>
                        <h2 class="fw-bold text-glow mb-1">Услуги</h2>
                        <p class="muted mb-0">Выберите формат: бережно подстроим практику под вас. <span><a class="badge badge-arcane" href="{{ url('/services') }}"> Все услуги</a></span> </p>
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
{{--                                <div class="muted">{!!$service->content!!}</div>--}}
                            </div>
                        </div>
                    @endforeach

            </section>

            <section id="testimonials" class="px-3">
                <div class="container pb-5">
                    <div class="col-md-6">
                        <h2 class="display-7">Отзывы <span class="gold-text">наших клиентов</span></h2>
                        <p class="lead">Что говорят те, кто уже открыл свой путь с нами</p>
                    </div>
                    <div class="row g-4">
                        @foreach($reviews as $review)
                        <div class="col-lg-3">
                            <div class="testimonial-card testimonial-card-{{rand(1,10)}}">
                                @if($review->photo)
                                <img src="{{$review->photo}}" alt="{{$review->name}}" class="testimonial-avatar">
                                @endif
                                <h5 class="mt-3">{{$review->name}}</h5>
                                <div class="gold-text mb-2">{{str_repeat('★', $review->stars)}}{{str_repeat('☆', 5 - $review->stars)}}</div>
                                <p class="fst-italic">"{!! $review->review !!}"</p>
                            </div>
                        </div>
                        @endforeach
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

                        <div class="col-lg-6" id="booking-block">
                            <div class="card bg-transparent p-4 p-md-5">
                                <form action="{{ route('make-booking') }}" method="POST" id="booking-form" class="form-arcane">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">
                                        <i class="bi bi-person-fill me-1 text-muted"></i> Ваше имя *
                                    </label>
                                    <input type="text" class="form-control form-control-custom" name="booking.name" placeholder="Как к вам обращаться?" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">
                                        <i class="bi bi-telephone-fill me-1 text-muted"></i> Телефон
                                    </label>
                                    <input type="tel" class="form-control form-control-custom" name="booking.phone" placeholder="+7 (999) 999-99-99" pattern="[\d\+\-\(\)\s]+">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">
                                        <i class="bi bi-stars me-1 text-muted"></i> Услуга
                                    </label>
                                    <select class="form-select form-control-custom" id="bookingService" name="booking.id_service">
                                        <option value="" disabled selected>Выберите услугу</option>
                                        @isset($services)
                                            @foreach($services as $service)
                                                <option value="{{ $service->id }}">{{ $service->title }}</option>
                                            @endforeach
                                        @endisset
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label fw-semibold">
                                        <i class="bi bi-calendar-event-fill me-1 text-muted"></i> Дата и время
                                    </label>
                                    <input type="datetime-local" class="form-control form-control-custom flatpickr-input" name="booking.booking_date">
                                </div>
                                <button id="make-submit-button" type="submit" class="btn btn-esoteric btn-accent w-100 py-3 fs-5">
                                    <i class="bi bi-calendar-check me-2"></i> Записаться
                                </button>
                                </form>
                            </div>
                        </div>
                        <div id="booking-done" class="col-lg-6 d-none"></div>
                    </div>
                </div>
            </section>
{{--    </div>--}}
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('booking-form');
    const bookingBlock = document.getElementById('booking-block');
    const bookingDone = document.getElementById('booking-done');

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        const formData = new FormData(form);
        const submitBtn = form.querySelector('#make-submit-button');
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Отправка...';

        fetch(form.action, {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'Accept': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                bookingBlock.classList.add('d-none');
                bookingBlock.classList.remove('d-flex');
                bookingDone.classList.remove('d-none');
                bookingDone.innerHTML = `
                    <div class="card card-arcane p-4 p-md-5 text-center">
                        <div class="mb-3">
                            <i class="bi bi-check-circle-fill text-success" style="font-size: 4rem;"></i>
                        </div>
                        <h3 class="fw-bold text-glow mb-2">Вы записаны!</h3>
                        <p class="muted mb-4">${data.message}</p>
                        <p class="small muted">Мы свяжемся с вами в ближайшее время для подтверждения.</p>
                    </div>
                `;
            } else {
                alert(data.message || 'Произошла ошибка.');
            }
        })
        .catch(error => {
            alert('Произошла ошибка при отправке формы.');
            console.error(error);
        })
        .finally(() => {
            submitBtn.disabled = false;
            submitBtn.innerHTML = '<i class="bi bi-calendar-check me-2"></i> Записаться';
        });
    });
});
</script>
@endsection
