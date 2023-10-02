@extends('layouts.user')
@section('hero')
  <div class="hero hero-inner" >
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mx-auto text-center">
          <div class="intro-wrap">
            <h1 class="mb-0">Explor The Worlds</h1>
            <p class="text-white">People Don't Take, Trips Take People</p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
  
@section('content')
  <div class="untree_co-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <h2 class="section-title mb-4 d-block">{{ $data->title }}</h2>
          <img src="{{ $data->cover_image }}" alt="" class="img-fluid rounded-20">
          
          <br></br>
          {{ $data->content }}
        </div>

        <!-- Sidebar -->
        <div class="col-lg-5 pl-lg-5 ml-auto">
          <h2 class="section-title mb-4 mt-5">Berita Menarik Lainnya</h2>
          
          @foreach($interest as $i)
          <a href="{{ route('detail.blog', $i->id) }}" class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-5">
                  <img src="{{ $i->cover_image }}" class="img-fluid rounded-start" style="height: 100%;" alt="tour">
              </div>
              <div class="col-md-7">
                <div class="card-body px-0">
                  <p class="card-text">{{ $i->title }}</p>
                  <p class="card-text"><small class="text-muted">{{ substr($i->content, 0, 50) }}...</small></p>
                </div>
              </div>
            </div>
          </a>
          @endforeach

        </div>
      </div>
    </div>
  </div>
@endsection