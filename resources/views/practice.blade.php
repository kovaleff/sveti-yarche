@extends('layouts.main')

@section('title', 'О практике | Свети Ярче')

@section('styles')
@endsection

@section('content')
    <div class="bg-arcane">
      <main>
          <div class="container py-5 py-lg-6">
              <div class="row g-5 align-items-center">
                  <div class="col-md-6">
                      <h2 class="display-5 fw-semibold mb-3">Энергия <span class="gold-text">Луны и камней</span></h2>
                      <p>Мы используем древние техники: карты Таро, руны, астрологические карты и регрессивные практики. Каждая консультация — это уникальное путешествие в глубины вашего подсознания.</p>
                      <ul class="list-unstyled mt-4">
                          <li class="mb-2"><i class="bi bi-gem gold-text me-2"></i> Индивидуальные сеансы с кристаллами</li>
                          <li class="mb-2"><i class="bi bi-moon gold-text me-2"></i> Лунные календари и ритуалы</li>
                          <li class="mb-2"><i class="bi bi-tree gold-text me-2"></i> Родовая терапия и медитации</li>
                      </ul>
                  </div>
                  <div class="col-md-6">
                      <img src="/images/29-600x450.jpg" class="img-fluid rounded-4 shadow-lg" alt="Эзотерика">
                  </div>
              </div>
          </div>
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
        <div class="small muted mt-3">
          © <span id="year">2026</span> Все права защищены. Свет внутри — наружу.
        </div>
      </footer>
    </div>
@endsection

@section('scripts')
    <script>
        document.getElementById("year").textContent = String(new Date().getFullYear());
    </script>
@endsection
