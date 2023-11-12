@extends('layouts.admin')
@section('content')
<h1 class="h3 mb-3"><strong>Site</strong> Homepage Configuration</h1>

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

<form class="card" action="{{ route('admin.config.partner') }}" method="POST" enctype="multipart/form-data">
  @method('PUT')
  @csrf
  <!-- <div class="card-header">
    <h5 class="card-title mb-0">Add New Product</h5>
  </div> -->
  <div class="card-body">

    <label class="form-label mt-3">Partners</label>
    <input type="file" class="form-control" name="partner">


    <label class="form-label mt-3">Guest Documentations</label>
    <input type="file" class="form-control" name="guest_doc">

    <input type="hidden" name="current_url" value="{{ url()->current() }}">
    <button type="submit" class="btn btn-primary mt-3">Insert</button>
  </div>
</form>

<form class="card" action="{{ route('admin.config.homesection') }}" method="POST" enctype="multipart/form-data">
  @method('PUT')
  @csrf

  <div class="card-body">

    <label class="form-label mt-3">Section 1 Title</label>
    <input type="text" class="form-control" name="HomeSection1Title" value="{{ $HomeSection1Title }}">
    
    <label class="form-label mt-3">Section 1 Content</label>
    <input type="text" class="form-control" name="HomeSection1Content" value="{{ $HomeSection1Content }}">
    
    <label class="form-label mt-3">Section 2 Title</label>
    <input type="text" class="form-control" name="HomeSection2Title" value="{{ $HomeSection2Title }}">

    <label class="form-label mt-3">Section 3 Title</label>
    <input type="text" class="form-control" name="HomeSection3Title" value="{{ $HomeSection3Title }}">
    
    <label class="form-label mt-3">Section 4 Title</label>
    <input type="text" class="form-control" name="HomeSection4Title" value="{{ $HomeSection4Title }}">
    
    <label class="form-label mt-3">Section 5 Title</label>
    <input type="text" class="form-control" name="HomeSection5Title" value="{{ $HomeSection5Title }}">
    
    <label class="form-label mt-3">Section 5 Content</label>
    <input type="text" class="form-control" name="HomeSection5Content" value="{{ $HomeSection5Content }}">
    

    <label class="form-label mt-3">WhatsApp Section</label>
    <input type="text" class="form-control" name="WhatsAppSection" value="{{ $WhatsAppSection }}">
    
    <label class="form-label mt-3">About Section Title</label>
    <input type="text" class="form-control" name="AboutSection1Title" value="{{ $AboutSection1Title }}">
    
    <label class="form-label mt-3">About Section Content</label>
    <input type="text" class="form-control" name="AboutSection1Content" value="{{ $AboutSection1Content }}">
    

    <input type="hidden" name="current_url" value="{{ url()->current() }}">
    <button type="submit" class="btn btn-primary mt-3">Update</button>
  </div>
</form>

@endsection
