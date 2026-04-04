<header class="navbar navbar-expand-lg navbar-glass sticky-top navbar-dark">
    <div class="container py-2">
        <a class="navbar-brand d-flex align-items-center gap-2" href="{{ url('/') }}" aria-label="Свети Ярче — главная">
            <span class="card-icon" aria-hidden="true">
              <img src="/images/logo.png" class="img-fluid" alt="">
            </span>
            <div class="lh-1.1">
                <div class="fw-semibold text-glow">Свети Ярче</div>
                <div class="small gold-text">Энергоцелитель Милана Соболевская</div>
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
                <li class="nav-item"><a class="nav-link text-light" href="{{ route('meditations') }}">Медитации</a></li>
                <li class="nav-item"><a class="nav-link text-light active" aria-current="page" href="{{ url('/reviews') }}">Отзывы</a></li>
                <li class="nav-item"><a class="nav-link text-light" href="{{ url('/booking') }}">Запись</a></li>
            </ul>
        </div>
    </div>
</header>
