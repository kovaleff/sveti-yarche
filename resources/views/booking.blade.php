@extends('layouts.main')

@section('title', 'Запись | Свети Ярче')

@section('styles')
@endsection

@section('content')
    <div class="bg-arcane">
        <section class="container py-5 py-lg-6">
            <div class="row align-items-center g-4">
                <div class="col-lg-6">
                    <div class="d-inline-flex align-items-center gap-2 badge badge-arcane px-3 py-2 mb-3">
                        <i class="bi bi-calendar-check" aria-hidden="true"></i>
                        <span class="small fw-semibold">Запись на консультацию</span>
                    </div>
                    <h1 class="fw-bold">
                        {{$bookingArticle->title ?? 'Запись'}}
                    </h1>
                    <p class="lead muted mt-3 mb-4">
                        {!! $bookingArticle->content ?? 'Оставьте контакт — мы ответим и подскажем следующий шаг.' !!}
                    </p>

                    <div class="d-flex flex-wrap gap-3">
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

                <div class="col-lg-6 d-flex flex-column justify-content-center" id="booking-block">
                    <div class="card card-arcane p-4 p-md-5 rounded-4">
                        <form action="{{ route('make-booking') }}" method="post" id="booking-form" class="form-arcane" aria-label="Форма записи">
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
                                <select class="form-select form-control-custom" name="booking.id_service" required>
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
                                <input type="datetime-local" class="form-control form-control-custom" name="booking.booking_date">
                            </div>
                            <button id="make-submit-button" type="submit" class="btn btn-esoteric btn-accent w-100 py-3 fs-5">
                                <i class="bi bi-calendar-check me-2"></i> Записаться
                            </button>
                        </form>
                        <div class="d-flex flex-wrap gap-3 mt-3">
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
                </div>
                <div id="booking-done" class="col-lg-6 d-flex flex-column justify-content-center d-none"></div>
            </div>
        </section>
    </div>
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
