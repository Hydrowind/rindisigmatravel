@extends('layouts.admin')
@section('content')
<h1 class="h3 mb-3"><strong>Site</strong> Configuration</h1>

<div class="card">
  <div class="card-header">Partners</div>
  <div class="card-body">
    <div class="row">
      @foreach($partners as $img)
      <div class="col-2">
        <img src="{{ $img->destination }}" width="100px" height="100px">
        <!-- <a href="{{ route('fileupload.destroy', $img->id) }}">Remove</a> -->
        <a onclick="event.preventDefault(); document.getElementById('delete-form-{{ $img->id }}').submit();">Remove</a>
      </div>
      <form id="delete-form-{{ $img->id }}" action="{{ route('fileupload.destroy', $img->id) }}" method="POST" style="display: none;">
        @csrf
        @method('DELETE')
      </form>
    
      @endforeach
    </div>

  </div>
</div>

<div class="card">
  <div class="card-header">Guest Documentation</div>
  <div class="card-body">
    <div class="row">
      @foreach($guestdocs as $img)
        <div class="col-2">
          <img src="{{ $img->destination }}" width="100px" height="100px">
          <!-- <a onclick="event.preventDefault(); document.getElementById('delete-form-{{ $img->id }}').submit();">Remove</a> -->
          <a onclick="event.preventDefault(); document.getElementById('delete-form-{{ $img->id }}').submit();">Remove</a>
        </div>
    
        <form id="delete-form-{{ $img->id }}" action="{{ route('fileupload.destroy', $img->id) }}" method="POST" style="display: none;">
          @csrf
          @method('DELETE')
        </form>
      @endforeach
    </div>
  </div>
</div>

<form class="card" action="{{ route('admin.config.homepage.update') }}" method="POST" enctype="multipart/form-data">
  @method('PUT')
  @csrf
  <!-- <div class="card-header">
    <h5 class="card-title mb-0">Add New Product</h5>
  </div> -->
  <div class="card-body">

    <label class="form-label mt-3">Partners</label>

    
    <!-- <input type="file" class="form-control" name="partners[]">
    <input type="file" class="form-control" name="partners[]">
    <input type="file" class="form-control" name="partners[]">
    <input type="file" class="form-control" name="partners[]">
    <input type="file" class="form-control" name="partners[]"> -->
    <input type="file" class="form-control" name="partner">


    <label class="form-label mt-3">Guest Documentations</label>
    <!-- <input type="file" class="form-control" name="guest_doc[]">
    <input type="file" class="form-control" name="guest_doc[]">
    <input type="file" class="form-control" name="guest_doc[]">
    <input type="file" class="form-control" name="guest_doc[]">
    <input type="file" class="form-control" name="guest_doc[]"> -->
    <input type="file" class="form-control" name="guest_doc">

    <input type="hidden" name="current_url" value="{{ url()->current() }}">
    <button type="submit" class="btn btn-primary mt-3">Insert</button>

  </div>
</form>
@endsection
