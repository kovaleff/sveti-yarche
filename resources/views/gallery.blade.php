@extends('layouts.main')

@section('title', 'Галерея | Свети Ярче')

@section('styles')
@endsection

@section('content')
    <div class="bg-arcane">
      <main>
        <section class="container py-5 py-lg-6">
          <div class="d-flex align-items-end justify-content-between gap-3 flex-wrap mb-4">
            <div>
              <h1 class="fw-bold text-glow mb-1">Галерея</h1>
              <p class="muted mb-0">Фрагменты атмосферы: символы, карточки практики и заметки.</p>
            </div>
          </div>

          <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-3">
            <div class="col">
              <div class="card card-arcane h-100 p-4 text-center">
                <div class="card-icon mx-auto"><i class="bi bi-gem" aria-hidden="true"></i></div>
                <div class="fw-semibold mt-3">Камень смысла</div>
                <div class="small muted mt-1">Точка внимания для ясных формулировок.</div>
              </div>
            </div>
            <div class="col">
              <div class="card card-arcane h-100 p-4 text-center">
                <div class="card-icon mx-auto"><i class="bi bi-diagram-3" aria-hidden="true"></i></div>
                <div class="fw-semibold mt-3">Схема намерения</div>
                <div class="small muted mt-1">Как желание превращается в действие.</div>
              </div>
            </div>
            <div class="col">
              <div class="card card-arcane h-100 p-4 text-center">
                <div class="card-icon mx-auto"><i class="bi bi-fire" aria-hidden="true"></i></div>
                <div class="fw-semibold mt-3">Тепло ритуала</div>
                <div class="small muted mt-1">Нагрев спокойствием — не спешкой.</div>
              </div>
            </div>
            <div class="col">
              <div class="card card-arcane h-100 p-4 text-center">
                <div class="card-icon mx-auto"><i class="bi bi-book" aria-hidden="true"></i></div>
                <div class="fw-semibold mt-3">Страница кодекса</div>
                <div class="small muted mt-1">Коротко, точно и повторяемо.</div>
              </div>
            </div>
            <div class="col">
              <div class="card card-arcane h-100 p-4 text-center">
                <div class="card-icon mx-auto"><i class="bi bi-stars" aria-hidden="true"></i></div>
                <div class="fw-semibold mt-3">Знак ночи</div>
                <div class="small muted mt-1">Маленький ответ в подходящее время.</div>
              </div>
            </div>
            <div class="col">
              <div class="card card-arcane h-100 p-4 text-center">
                <div class="card-icon mx-auto"><i class="bi bi-shield-check" aria-hidden="true"></i></div>
                <div class="fw-semibold mt-3">Безопасный тон</div>
                <div class="small muted mt-1">Мы за бережность и ясные границы.</div>
              </div>
            </div>
          </div>

          <div class="mt-4">
            <a class="btn btn-ghost btn-lg px-4" href="{{ url('/booking') }}">
              <i class="bi bi-calendar me-2" aria-hidden="true"></i> Записаться на практику
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
            <a class="me-3" href="{{ url('/services') }}">Услуги</a>
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
