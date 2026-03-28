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
                <li class="nav-item"><a class="nav-link text-light" href="{{ route('home')  }}">Главная</a></li>
                <li class="nav-item"><a class="nav-link text-light" href="{{ route('practice') }}">О практике</a></li>
                <li class="nav-item"><a class="nav-link text-light" href="{{ route('services') }}">Услуги</a></li>
                <li class="nav-item"><a class="nav-link text-light" href="{{ route('gallery') }}">Галерея</a></li>
                <li class="nav-item">
                    <a class="nav-link text-light active" aria-current="page" href="{{ url('/reviews') }}">Отзывы</a>
                </li>
                <li class="nav-item"><a class="nav-link text-light" href="{{ url('/booking') }}">Запись</a></li>
            </ul>
        </div>
    </div>
</header>
