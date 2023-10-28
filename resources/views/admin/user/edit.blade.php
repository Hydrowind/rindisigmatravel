@extends('layouts.admin')
@section('content')
<h1 class="h3 mb-3"><strong>Edit</strong> User</h1>

<form class="card" action="{{ route('user.update', $data->id) }}" method="post" enctype="multipart/form-data">
  @csrf
  @method('put')
  <!-- <div class="card-header">
    <h5 class="card-title mb-0">Add New Product</h5>
  </div> -->
  <div class="card-body">
    <input type="hidden" class="form-control" name="id" value="{{ $data->id }}">
    
    <label class="form-label mt-3">Fullname</label>
    <input type="text" class="form-control" name="name" placeholder="Robert Downey Jr." value="{{ $data->name }}">

    <label class="form-label mt-3">Email</label>
    <input type="email" class="form-control" name="email" placeholder="robert.jr@gmail.com" value="{{ $data->email }}">

    <label class="form-label mt-3">Position</label>
    <input type="text" class="form-control" name="position" placeholder="Marketting" value="{{ $data->position }}">

    <label class="form-label mt-3">Image</label>
    <input type="file" class="form-control" name="image">
    
    <!-- @if($data->images->isNotEmpty())
    <img class="d-block" src="{{ $data->images->first()->destination }}" width="150px" heigh="150px"/>
    @endif -->

    <button type="submit" class="btn btn-primary mt-3">Save</button>
  </div>
</form>
@endsection