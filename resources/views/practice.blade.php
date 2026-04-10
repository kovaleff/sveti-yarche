@extends('layouts.main')

@section('title', 'О практике | Свети Ярче - Энергоцелительство')
@section('meta_description', 'Узнайте о практике энергоцелительства Миланы Соболевской. Подход, методы и философия энергоцелительства для духовного развития.')
@section('og_type', 'website')
@section('og_title', 'О практике | Свети Ярче - Энергоцелительство')
@section('og_description', 'Узнайте о практике энергоцелительства Миланы Соболевской. Подход, методы и философия.')
@section('canonical', url('/practice'))
@section('og_url', url('/practice'))

@section('structured_data')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@type": "AboutPage",
  "name": "О практике энергоцелительства",
  "description": "Информация о практике энергоцелительства Миланы Соболевской",
  "url": "{{ url('/practice') }}"
}
</script>
@endsection

@section('content')
    <div class="bg-arcane">
          <div class="container pt-5">
              <div class="row g-5 align-items-top">
                  <div class="col-md-6">
                      <h2 class="display-5 fw-semibold mb-3">{{$practice->title}}</span></h2>
                      <p>{!! $practice->content !!}.</p>
                  </div>
                  <div class="col-md-6">
                      <img src="{{$practice->main_image}}" class="img-fluid rounded-4 shadow-lg" alt="Эзотерика">
                  </div>
              </div>
          </div>
    </div>
@endsection

@section('scripts')
    <script>
        document.getElementById("year").textContent = String(new Date().getFullYear());
    </script>
@endsection
