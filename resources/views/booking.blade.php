@extends('layouts.main')

@section('title', 'Запись | Свети Ярче')

@section('styles')
@endsection

@section('content')
    <div class="bg-arcane">
      <main>
        <section class="container py-5 py-lg-6">
          <div class="p-4 p-md-5 rounded-4" style="background: rgba(8,5,18,.25); border:1px solid rgba(34,211,238,.18);">
            <div class="row align-items-center g-4">
              <div class="col-lg-6">
                <h1 class="fw-bold text-glow mb-2">Запись</h1>
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
                <form class="form-arcane p-3 p-sm-4 rounded-4" action="{{ url('/booking') }}" method="post" aria-label="Форма записи">
                  @csrf
                  <div class="form-floating mb-3">
                    <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" required />
                    <label for="email">Email</label>
                  </div>

                  <div class="form-floating mb-3">
                    <input class="form-control" id="name" name="name" type="text" placeholder="Ваше имя" maxlength="80" />
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

      <footer class="container pb-5 pt-4">
        <div class="divider-glow mb-4"></div>
        <div class="row g-4 align-items-center">
          <div class="col-md-6">
            <div class="fw-semibold">Свети Ярче</div>
            <div class="small muted">Эзотерика Миланы Соболевской</div>
          </div>
          <div class="col-md-6 text-md-end footer-links">
            <a class="me-3" href="{{ url('/services') }}">Услуги</a>
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
