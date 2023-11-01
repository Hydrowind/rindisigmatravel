@extends('layouts.admin')
@section('content')

@php use App\Models\Product; @endphp
<h1 class="h3 mb-3"><strong>Edit</strong> Product</h1>

<div class="card">
  <div class="card-header">Images</div>
  <div class="card-body">
    <div class="row">
      @foreach($data->images as $img)
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

<form class="card" action="{{ route('fileupload.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="card-body">
    <div class="row mt-3">
      <div class="col-6">
        <label class="form-label mt-3">Image</label>
        <input type="file" class="form-control" name="file">
      </div>
      <div class="col-6">
        <label class="form-label mt-3">Alt Text</label>
        <input type="text" class="form-control" name="alt_text">
      </div>
    </div>
    
    <input type="hidden" name="object_id" value="{{ $data->id }}">
    <input type="hidden" name="object_type" value="{{ 'App\Models\Product' }}">
    <input type="hidden" name="current_url" value="{{ url()->current() }}">
  
    <button type="submit" class="btn btn-primary mt-3">Insert</button>
  </div>
</form>

<form class="card" action="{{ route('product.update', $data->id) }}" method="post" enctype="multipart/form-data">
  @csrf
  @method('put')
  <!-- <div class="card-header">
    <h5 class="card-title mb-0">Add New Product</h5>
  </div> -->
  <div class="card-body">
    <input type="hidden" class="form-control" name="id" value="{{ $data->id }}">
    
    <label class="form-label mt-3">Product Name</label>
    <input type="text" class="form-control" name="name" placeholder="Wisata Bali 3D1N" value="{{ $data->name }}">

    <!-- @if( $data->images->isNotEmpty() )
      @foreach($data->images as $img)
        <img src="{{ $img->destination }}" alt="Cover Image" width="100px;" class="d-block mt-3">
      @endforeach
    @endif

    <div class="row mt-3">
      <div class="col-6">
        <label class="form-label mt-3">Image</label>
        <input type="file" class="form-control" name="image">
      </div>
      <div class="col-6">
        <label class="form-label mt-3">Alt Text</label>
        <input type="text" class="form-control" name="alt_text">
      </div>
    </div> -->


    <div class="row mt-3">
      <div class="col-6">
        <label class="form-label">Price</label>
        <input type="number" class="form-control" name="price" placeholder="1000000" value="{{ $data->price }}">
      </div>
      <div class="col-6">
        <label class="form-label">Minimum Guest</label>
        <input type="number" class="form-control" name="min_guest" placeholder="5" value="{{ $data->min_guest }}">
      </div>
    </div>

    <label class="form-label mt-3">Duration</label>
    <input type="text" class="form-control" name="duration" placeholder="2D1N" value="{{ $data->duration }}">

    <label class="form-label mt-3">Type</label>
    <select name="type" class="form-select">
      <option @if($data->type == Product::TYPE_ACCOMMODATION) selected @endif value={{ Product::TYPE_ACCOMMODATION }}>Akomodasi</option>
      <option @if($data->type == Product::TYPE_EVENT) selected @endif value={{ Product::TYPE_EVENT }}>Event</option>
      <option @if($data->type == Product::TYPE_TRANSPORTATION) selected @endif value={{ Product::TYPE_TRANSPORTATION }}>Transportasi</option>
      <option @if($data->type == Product::TYPE_TOUR_DOMESTIC) selected @endif value={{ Product::TYPE_TOUR_DOMESTIC }}>Tour Domestik</option>
      <option @if($data->type == Product::TYPE_TOUR_INTERNATIONAL) selected @endif value={{ Product::TYPE_TOUR_INTERNATIONAL }}>Tour Internasional</option>
    </select>
    
    <label class="form-label mt-3">Description</label>
    <textarea name="description" class="form-control">{{ $data->description }}</textarea>
    
    <label class="form-label mt-3">Itinerary</label>
    <textarea name="itinerary" class="form-control">{{ $data->itinerary }}</textarea>
    
    <label class="form-label mt-3">Term and Condition</label>
    <textarea name="term_condition" class="form-control">{{ $data->term_condition }}</textarea>

    <label class="form-label mt-3">Meta Description</label>
    <input type="text" class="form-control" name="meta" placeholder="Enter meta here" value="{{ $data->meta }}">

    <button type="submit" class="btn btn-primary mt-3">Save</button>
  </div>
</form>
@endsection