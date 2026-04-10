@extends('layouts.main')

@section('title', 'Медитации | Свети Ярче - Групповые и индивидуальные практики')
@section('meta_description', 'Медитации с Миланой Соболевской: индивидуальные и групповые практики. Откройте путь к внутренней гармонии и самопознанию через медитацию.')
@section('og_type', 'website')
@section('og_title', 'Медитации | Свети Ярче - Групповые и индивидуальные практики')
@section('og_description', 'Медитации с Миланой Соболевской: индивидуальные и групповые практики для внутренней гармонии.')
@section('canonical', url('/meditations'))
@section('og_url', url('/meditations'))

@section('structured_data')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@type": "Event",
  "name": "Медитации с Миланой Соболевской",
  "description": "Индивидуальные и групповые медитативные практики",
  "url": "{{ url('/meditations') }}",
  "organizer": {
    "@type": "Person",
    "name": "Милана Соболевская"
  }
}
</script>
@endsection

@section('content')
    <div class="bg-arcane">
            <section class="container py-5 py-lg-6">
                <div class="d-flex align-items-end justify-content-between gap-3 flex-wrap mb-4">
                    <div>
                        <h1 class="fw-bold text-glow mb-1">Медитации</h1>
                        <p class="muted mb-0">Выберите формат: бережно подстроим практику под вас.</p>
                    </div>
                    <div class="d-flex gap-2 flex-wrap">
                        <span class="badge badge-arcane"><i class="bi bi-person-workspace me-1" aria-hidden="true"></i> Индивидуально</span>
                        <span class="badge badge-arcane"><i class="bi bi-people me-1"
                                                            aria-hidden="true"></i> В группе</span>
                    </div>
                </div>

                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                    @foreach($meditations as $meditation)
                        <div class="col">
                            <div class="card card-arcane h-100 p-4">
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <div class="card-icon"><i class="bi bi-person-lines-fill" aria-hidden="true"></i></div>
                                    <div>
                                        <div class="fw-semibold">{{$meditation->title}}</div>
                                    </div>
                                </div>
                                <div class="muted">{!! $meditation->content !!}.</div>
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
