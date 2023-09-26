@extends('layouts.admin')
@section('content')
<h1 class="h3 mb-3"><strong>Insert</strong> New Product</h1>

<form class="card" action="{{ route('product.store') }}" method="post">
  @csrf
  <!-- <div class="card-header">
    <h5 class="card-title mb-0">Add New Product</h5>
  </div> -->
  <div class="card-body">
    <label class="form-label mt-3">Product Name</label>
    <input type="text" class="form-control" name="name" placeholder="Wisata Bali 3D1N">

    <label class="form-label mt-3">Cover Image</label>
    <input type="text" class="form-control" name="cover_image" placeholder="http://image.io/7uc54z.jpg">

    <div class="row mt-3">
      <div class="col-6">
        <label class="form-label">Price</label>
        <input type="number" class="form-control" name="price" placeholder="1000000">
      </div>
      <div class="col-6">
        <label class="form-label">Rating</label>
        <input type="number" class="form-control" name="rating" placeholder="5">
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-6">
        <label class="form-label">Max Guest</label>
        <input type="number" class="form-control" name="max_guest" placeholder="10">
      </div>
      <div class="col-6">
        <label class="form-label">Min Age</label>
        <input type="number" class="form-control" name="min_age" placeholder="17">
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-6">
        <label class="form-label">Start Date</label>
        <input type="date" class="form-control" name="start_date">
      </div>
      <div class="col-6">
        <label class="form-label">End Date</label>
        <input type="date" class="form-control" name="end_date">
      </div>
    </div>

    <label class="form-label mt-3">Type</label>
    <select name="type" class="form-select">
      <option value="0">Tour</option>
      <option value="1">Akomodasi</option>
      <option value="2">Event Organizer</option>
      <option value="3">Transportasi</option>
    </select>
    
    <label class="form-label mt-3">Description</label>
    <input type="text" class="form-control" name="description" placeholder="Ketik deskripsi produk disini">

    <button type="submit" class="btn btn-primary mt-3">Save</button>
  </div>
</form>
@endsection