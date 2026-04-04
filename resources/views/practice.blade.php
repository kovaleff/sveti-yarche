@extends('layouts.main')

@section('title', 'О практике | Свети Ярче')

@section('styles')
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
