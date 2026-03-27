@extends('layouts.main')

@section('title', 'Отзывы | Свети Ярче')

@section('styles')
@endsection

@section('content')
    <div class="bg-arcane">


      <main>
        <section class="container py-5 py-lg-6">
          <div class="d-flex align-items-end justify-content-between gap-3 flex-wrap mb-4">
            <div>
              <h1 class="fw-bold text-glow mb-1">Отзывы</h1>
              <p class="muted mb-0">Живые впечатления от практики.</p>
            </div>
          </div>

          <div class="row g-4">
            <div class="col-md-6 col-lg-4">
              <div class="card card-arcane h-100 p-4">
                <div class="d-flex align-items-start justify-content-between mb-2">
                  <div>
                    <div class="fw-semibold">Екатерина</div>
                    <div class="small muted">индивидуальная сессия</div>
                  </div>
                  <div class="text-warning" aria-label="5 звёзд">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                </div>
                <div class="muted">После встречи стало легче формулировать намерение. Больше тишины внутри и меньше суеты снаружи.</div>
              </div>
            </div>

            <div class="col-md-6 col-lg-4">
              <div class="card card-arcane h-100 p-4">
                <div class="d-flex align-items-start justify-content-between mb-2">
                  <div>
                    <div class="fw-semibold">Николай</div>
                    <div class="small muted">групповая практика</div>
                  </div>
                  <div class="text-warning" aria-label="5 звёзд">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                </div>
                <div class="muted">Очень понравился темп. Упражнения короткие, но дают заметный эффект в течение недели.</div>
              </div>
            </div>

            <div class="col-md-6 col-lg-4">
              <div class="card card-arcane h-100 p-4">
                <div class="d-flex align-items-start justify-content-between mb-2">
                  <div>
                    <div class="fw-semibold">Мария</div>
                    <div class="small muted">сопровождение</div>
                  </div>
                  <div class="text-warning" aria-label="5 звёзд">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                </div>
                <div class="muted">Мягко помогли разложить мысли по полочкам. И важное: всё без давления и без магии ради магии.</div>
              </div>
            </div>
          </div>

          <div class="mt-4">
            <a class="btn btn-accent btn-lg px-4" href="{{ url('/booking') }}">
              <i class="bi bi-chat-left-dots me-2" aria-hidden="true"></i> Записаться
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
            <a class="me-3" href="{{ url('/gallery') }}">Галерея</a>
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
