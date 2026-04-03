@extends('layouts.main')

@section('title', 'Услуги | Свети Ярче')

@section('styles')
@endsection

@section('content')
    <div class="bg-arcane">
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
            @foreach($services as $service)
            <div class="col">
              <div class="card card-service card-service-{{rand(1,10)}} h-100 p-4">
                <div class="d-flex align-items-center gap-3 mb-3">
                  @if($service->is_grouped)
                  <div class="card-icon"><i class="bi bi-people-fill" aria-hidden="true"></i></div>
                  <div>
                    <div class="fw-semibold">Групповая практика</div>
                    <div class="small muted">{{$service->title}}</div>
                  </div>
                  @else
                  <div class="card-icon"><i class="bi bi-person-lines-fill" aria-hidden="true"></i></div>
                  <div>
                    <div class="fw-semibold">Индивидуальная сессия</div>
                    <div class="small muted">{{$service->title}}</div>
                  </div>
                  @endif
                </div>
                <div class="muted">{!! $service->content !!}</div>
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
    </div>
@endsection

@section('scripts')
    <script>
        document.getElementById("year").textContent = String(new Date().getFullYear());
    </script>
@endsection
