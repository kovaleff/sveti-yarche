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

                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <div class="card card-arcane p-4 p-md-5 rounded-4">
                        <form action="{{ url('/booking') }}" method="post" aria-label="Форма записи">
                            @csrf
                            <div class="row g-3 mb-4">
                                <div class="col-12">
                                    <input type="text" class="form-control form-control-custom" name="name" placeholder="Ваше имя *" required>
                                </div>
                                <div class="col-12">
                                    <input type="tel" class="form-control form-control-custom" name="phone" placeholder="+7 (999) 999-99-99" pattern="[\+]7[\s\(\-]\d{3}[\s\)\-]\d{3}[\s\-]\d{2}[\s\-]\d{2}" required>
                                </div>
                                <div class="col-12">
                                    <select class="form-select form-control-custom" name="service" required>
                                        <option value="" disabled selected>Выберите услугу</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <input type="datetime-local" class="form-control form-control-custom" name="datetobook" placeholder="Дата и время">
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-esoteric w-100 py-3">
                                        <i class="bi bi-calendar-check"></i> Записаться
                                    </button>
                                </div>
                            </div>
                        </form>
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
                </div>
            </div>
        </section>
    </div>
@endsection

@section('scripts')
    <script>
        document.getElementById("year").textContent = String(new Date().getFullYear());
    </script>
@endsection
