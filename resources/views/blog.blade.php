@extends('layouts.user')
@section('hero')
  <div class="hero hero-inner">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mx-auto text-center">
          <div class="intro-wrap"> 
          <h3 class="text-white">LET'S GET UPDATED </h3> 
          <h6 class="text-white">with</h6> 
          <h2 class="text-white">RINDI SIGMA SULTAN</h2>
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

    @foreach($posts as $post)
    <a href="{{ route('detail.blog', $post->id) }}" class="col-3">
      <div class="media-1">
        <img src="{{ $post->images->isNotEmpty() ? $post->images->first()->destination : '/uploads/no_image.jpg' }}" alt="Image" class="w-100 img-fluid" style="height: 200px;">
        <div class="d-flex">
          <div class="p-3 " style="width: 100%; word-wrap: break-word;">
            <h3 class="fw-bold">{{ $post->title }}</h3>
            <p class="text-wrap" style="width: 100%">{{ $post->content }}</p>
          </div>
        </div>
      </div>
    </a>
    @endforeach

    </div>
  </div>
</div>
@endsection