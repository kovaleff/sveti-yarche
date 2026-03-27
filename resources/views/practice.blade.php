@extends('layouts.main')

@section('title', 'О практике | Свети Ярче')

@section('styles')
@endsection

@section('content')
    <div class="bg-arcane">
      <main>
        <section id="practice" class="container py-5 py-lg-6">
          <div class="d-flex align-items-end justify-content-between gap-3 flex-wrap mb-4">
            <div>
              <h1 class="fw-bold text-glow mb-1">О практике</h1>
              <p class="muted mb-0">Смысл рождается из тишины: без лишнего шума и давления.</p>
            </div>
            <div class="d-flex gap-2">
              <span class="badge badge-arcane">
                <i class="bi bi-magic me-1" aria-hidden="true"></i> Бережные ритуалы
              </span>
              <span class="badge badge-arcane">
                <i class="bi bi-stars me-1" aria-hidden="true"></i> Смысл и память
              </span>
            </div>
          </div>

          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <div class="col">
              <div class="card card-arcane h-100 p-4">
                <div class="d-flex align-items-center gap-3 mb-3">
                  <div class="card-icon"><i class="bi bi-book" aria-hidden="true"></i></div>
                  <div>
                    <div class="fw-semibold">Библиотека символов</div>
                    <div class="small muted">Символы + заметки о смыслах.</div>
                  </div>
                </div>
                <div class="muted">Собирайте подсказки и интерпретации. Возвращайтесь, когда нужен знак.</div>
              </div>
            </div>

            <div class="col">
              <div class="card card-arcane h-100 p-4">
                <div class="d-flex align-items-center gap-3 mb-3">
                  <div class="card-icon"><i class="bi bi-rss" aria-hidden="true"></i></div>
                  <div>
                    <div class="fw-semibold">Лента кодекса</div>
                    <div class="small muted">Новые записи в спокойном темпе.</div>
                  </div>
                </div>
                <div class="muted">Как перелистывать страницы. Никакой суеты — только атмосфера.</div>
              </div>
            </div>

            <div class="col">
              <div class="card card-arcane h-100 p-4">
                <div class="d-flex align-items-center gap-3 mb-3">
                  <div class="card-icon"><i class="bi bi-calendar-event" aria-hidden="true"></i></div>
                  <div>
                    <div class="fw-semibold">Ритм практики</div>
                    <div class="small muted">Напоминания по желанию.</div>
                  </div>
                </div>
                <div class="muted">Настраивайте намерение на своих условиях. Мы делаем это деликатно.</div>
              </div>
            </div>

            <div class="col">
              <div class="card card-arcane h-100 p-4">
                <div class="d-flex align-items-center gap-3 mb-3">
                  <div class="card-icon"><i class="bi bi-search" aria-hidden="true"></i></div>
                  <div>
                    <div class="fw-semibold">Поиск по состоянию</div>
                    <div class="small muted">Находите смысл по ощущениям.</div>
                  </div>
                </div>
                <div class="muted">Ищите по темам, настроению и коротким подсказкам.</div>
              </div>
            </div>

            <div class="col">
              <div class="card card-arcane h-100 p-4">
                <div class="d-flex align-items-center gap-3 mb-3">
                  <div class="card-icon"><i class="bi bi-bell" aria-hidden="true"></i></div>
                  <div>
                    <div class="fw-semibold">Тихие уведомления</div>
                    <div class="small muted">Только действительно важное.</div>
                  </div>
                </div>
                <div class="muted">Узнавайте, когда появляется новое или обновляется архив.</div>
              </div>
            </div>

            <div class="col">
              <div class="card card-arcane h-100 p-4">
                <div class="d-flex align-items-center gap-3 mb-3">
                  <div class="card-icon"><i class="bi bi-diagram-3" aria-hidden="true"></i></div>
                  <div>
                    <div class="fw-semibold">Ответ себе</div>
                    <div class="small muted">Красиво фиксируйте наблюдения.</div>
                  </div>
                </div>
                <div class="muted">Снимки разговора с собой, чтобы видеть собственные узоры.</div>
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
