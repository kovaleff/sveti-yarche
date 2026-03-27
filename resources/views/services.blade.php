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
              <h1 class="fw-bold text-glow mb-1">Услуги</h1>
              <p class="muted mb-0">Выберите формат: бережно подстроим практику под вас.</p>
            </div>
            <div class="d-flex gap-2 flex-wrap">
              <span class="badge badge-arcane"><i class="bi bi-person-workspace me-1" aria-hidden="true"></i> Индивидуально</span>
              <span class="badge badge-arcane"><i class="bi bi-people me-1" aria-hidden="true"></i> В группе</span>
            </div>
          </div>

          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
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
                  <div class="card-icon"><i class="bi bi-bookmark-check-fill" aria-hidden="true"></i></div>
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
                <div class="muted">Если вы чувствуете, что "что-то было", но неясно что.</div>
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
