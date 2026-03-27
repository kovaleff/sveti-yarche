@extends('layouts.main')

@section('title', 'Контакты | Свети Ярче')

@section('styles')
@endsection

@section('content')
    <div class="bg-arcane">
      <header class="navbar navbar-expand-lg navbar-glass sticky-top navbar-dark">
        <div class="container py-2">
          <a class="navbar-brand d-flex align-items-center gap-2" href="{{ url('/') }}" aria-label="Свети Ярче — главная">
            <span class="card-icon" aria-hidden="true">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Символ Свети Ярче">
                <path d="M12 2C8.13 6.2 6 9.3 6 12.2C6 16.6 8.95 20 12 20C15.05 20 18 16.6 18 12.2C18 9.3 15.87 6.2 12 2Z" stroke="currentColor" stroke-width="1.5" />
                <path d="M8 13.2C9.2 14.8 10.6 15.6 12 15.6C13.4 15.6 14.8 14.8 16 13.2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
              </svg>
            </span>
            <div class="lh-1">
              <div class="fw-semibold text-glow">Свети Ярче</div>
              <div class="small muted">Эзотерика Миланы Соболевской</div>
            </div>
          </a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav" aria-label="Открыть меню">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div id="nav" class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center gap-lg-3">
              <li class="nav-item"><a class="nav-link text-light" href="{{ url('/') }}">Главная</a></li>
              <li class="nav-item"><a class="nav-link text-light" href="{{ url('/practice') }}">О практике</a></li>
              <li class="nav-item"><a class="nav-link text-light" href="{{ url('/services') }}">Услуги</a></li>
              <li class="nav-item"><a class="nav-link text-light" href="{{ url('/gallery') }}">Галерея</a></li>
              <li class="nav-item"><a class="nav-link text-light" href="{{ url('/reviews') }}">Отзывы</a></li>
              <li class="nav-item"><a class="nav-link text-light" href="{{ url('/booking') }}">Запись</a></li>
              <li class="nav-item">
                <a class="nav-link text-light active" aria-current="page" href="{{ url('/contacts') }}">Контакты</a>
              </li>
            </ul>
          </div>
        </div>
      </header>

      <main>
        <section class="container py-5 py-lg-6">
          <div class="row g-4 align-items-stretch">
            <div class="col-lg-5">
              <div class="h-100 p-4 p-md-5 rounded-4" style="background: rgba(8,5,18,.25); border:1px solid rgba(34,211,238,.18);">
                <div class="d-flex align-items-center gap-3 mb-3">
                  <div class="card-icon"><i class="bi bi-chat-left-dots" aria-hidden="true"></i></div>
                  <div>
                    <div class="fw-semibold text-glow">Контакты</div>
                    <div class="small muted">Напишите нам — ответим.</div>
                  </div>
                </div>

                <div class="muted">
                  Это статичный блок-шаблон. Подключите `action` формы к вашему обработчику, когда будете готовы.
                </div>

                <div class="divider-glow my-4"></div>

                <div class="small muted">
                  Хотите сначала запись?
                  <a href="{{ url('/booking') }}" class="text-info">Перейдите к записи</a>.
                </div>
              </div>
            </div>

            <div class="col-lg-7">
              <form class="form-arcane p-4 p-md-5 rounded-4" action="{{ url('/contacts') }}" method="post" aria-label="Форма контактов">
                @csrf
                <div class="row g-3">
                  <div class="col-md-6">
                    <div class="form-floating">
                      <input class="form-control" id="cname" name="name" type="text" placeholder="Имя" required />
                      <label for="cname">Имя</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-floating">
                      <input class="form-control" id="cemail" name="email" type="email" placeholder="Email" required />
                      <label for="cemail">Email</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating">
                      <textarea class="form-control" id="message" name="message" style="height: 120px" placeholder="Ваше сообщение" required></textarea>
                      <label for="message">Сообщение</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-accent w-100 py-3" type="submit">
                      <i class="bi bi-send me-2" aria-hidden="true"></i> Отправить
                    </button>
                    <div class="small muted mt-2">
                      В этом шаблоне нет внешней отправки (action оставлен по умолчанию).
                    </div>
                  </div>
                </div>
              </form>
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
            <a class="me-3" href="{{ url('/booking') }}">Запись</a>
            <a class="me-3" href="{{ url('/services') }}">Услуги</a>
            <a href="{{ url('/practice') }}">О практике</a>
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