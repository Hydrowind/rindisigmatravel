@extends('layouts.admin')
@section('content')
<h1 class="h3 mb-3"><strong>Edit</strong> Product</h1>

<form class="card" action="{{ route('product.update', $data->id) }}" method="post">
  @csrf
  @method('put')
  <!-- <div class="card-header">
    <h5 class="card-title mb-0">Add New Product</h5>
  </div> -->
  <div class="card-body">
    <input type="hidden" class="form-control" name="id" value="{{ $data->id }}">
    
    <label class="form-label mt-3">Product Name</label>
    <input type="text" class="form-control" name="name" placeholder="Wisata Bali 3D1N" value="{{ $data->name }}">

    <label class="form-label mt-3">Cover Image</label>
    <input type="text" class="form-control" name="cover_image" placeholder="http://image.io/7uc54z.jpg"  value="{{ $data->cover_image }}">

    <div class="row mt-3">
      <div class="col-6">
        <label class="form-label">Price</label>
        <input type="number" class="form-control" name="price" placeholder="1000000" value="{{ $data->price }}">
      </div>
      <div class="col-6">
        <label class="form-label">Rating</label>
        <input type="number" class="form-control" name="rating" placeholder="5" value="{{ $data->rating }}">
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-6">
        <label class="form-label">Max Guest</label>
        <input type="number" class="form-control" name="max_guest" placeholder="10" value="{{ $data->max_guest }}">
      </div>
      <div class="col-6">
        <label class="form-label">Min Age</label>
        <input type="number" class="form-control" name="min_age" placeholder="17" value="{{ $data->min_age }}">
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-6">
        <label class="form-label">Start Date</label>
        <input type="date" class="form-control" name="start_date" value="{{ $data->start_date }}">
      </div>
      <div class="col-6">
        <label class="form-label">End Date</label>
        <input type="date" class="form-control" name="end_date" value="{{ $data->end_date }}">
      </div>
    </div>

    <label class="form-label mt-3">Duration</label>
    <input type="text" class="form-control" name="duration" placeholder="2D1N" value="{{ $data->duration }}">

    <label class="form-label mt-3">Type</label>
    <select name="type" class="form-select">
      <option @if($data->type == 0) selected @endif value="0">Tour</option>
      <option @if($data->type == 1) selected @endif value="1">Akomodasi</option>
      <option @if($data->type == 2) selected @endif value="2">Event Organizer</option>
      <option @if($data->type == 3) selected @endif value="3">Transportasi</option>
    </select>
    
    <label class="form-label mt-3">Description</label>
    <input type="text" class="form-control" name="description" placeholder="Ketik deskripsi produk disini"  value="{{ $data->description }}">

    <button type="submit" class="btn btn-primary mt-3">Save</button>
  </div>
</form>
@endsection