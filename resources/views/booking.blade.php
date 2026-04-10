@extends('layouts.main')

@section('title', 'Запись на консультацию | Свети Ярче')
@section('meta_description', 'Запишитесь на консультацию к энергоцелителю Милане Соболевской. Индивидуальные сессии и групповые практики. Оставьте заявку онлайн.')
@section('og_type', 'website')
@section('og_title', 'Запись на консультацию | Свети Ярче')
@section('og_description', 'Запишитесь на консультацию к энергоцелителю Милане Соболевской онлайн.')
@section('canonical', url('/booking'))
@section('og_url', url('/booking'))

@section('structured_data')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@type": "ContactPage",
  "name": "Запись на консультацию",
  "description": "Форма записи на консультацию к энергоцелителю",
  "url": "{{ url('/booking') }}"
}
</script>
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
<script src="{{ asset('/js/booking-form.js') }}"></script>
@endsection
