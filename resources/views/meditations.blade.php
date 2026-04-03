@extends('layouts.main')

@section('title', 'Услуги | Свети Ярче')

@section('styles')
@endsection

@section('content')
    <div class="bg-arcane">

        <main>
            <section class="container py-5 py-lg-6">
                <div class="d-flex align-items-end justify-content-between gap-3 flex-wrap mb-4">
                    <div>
                        <h1 class="fw-bold text-glow mb-1">Медитации</h1>
                        <p class="muted mb-0">Выберите формат: бережно подстроим практику под вас.</p>
                    </div>
                    <div class="d-flex gap-2 flex-wrap">
                        <span class="badge badge-arcane"><i class="bi bi-person-workspace me-1" aria-hidden="true"></i> Индивидуально</span>
                        <span class="badge badge-arcane"><i class="bi bi-people me-1"
                                                            aria-hidden="true"></i> В группе</span>
                    </div>
                </div>

                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                    @foreach($meditations as $meditation)
                        <div class="col">
                            <div class="card card-arcane h-100 p-4">
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <div class="card-icon"><i class="bi bi-person-lines-fill" aria-hidden="true"></i></div>
                                    <div>
                                        <div class="fw-semibold">{{$meditation->title}}</div>
                                    </div>
                                </div>
                                <div class="muted">{!! $meditation->content !!}.</div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="mt-4">
                    <a class="btn btn-accent btn-lg px-4" href="{{ url('/booking') }}">
                        <i class="bi bi-calendar-check me-2" aria-hidden="true"></i> Перейти к записи
                    </a>
                </div>
            </section>
        </main>

        <footer class="container pb-5 pt-4">
            <div class="divider-glow mb-4"></div>
            <div class="row g-4 align-items-center">
                <div class="col-md-6">
                    <div class="fw-semibold">Свети Ярче</div>
                    <div class="small muted">Эзотерика Миланы Соболевской</div>
                </div>
                <div class="col-md-6 text-md-end footer-links">
                    <a class="me-3" href="{{ url('/practice') }}">О практике</a>
                    <a class="me-3" href="{{ url('/reviews') }}">Отзывы</a>
                    <a href="{{ url('/contacts') }}">Контакты</a>
                </div>
            </div>
            <div class="small muted mt-3">© <span id="year">2026</span> Все права защищены. Свет внутри — наружу.</div>
        </footer>
    </div>
@endsection

@section('scripts')
    <script>
        document.getElementById("year").textContent = String(new Date().getFullYear());
    </script>
@endsection
