@extends('layouts.admin')
@section('content')
<h1 class="h3 mb-3"><strong>Edit</strong> User</h1>

<form class="card" action="{{ route('user.update', $data->id) }}" method="post">
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

    <input type="hidden" name="role" value="1">

    <button type="submit" class="btn btn-primary mt-3">Save</button>
  </div>
</form>
@endsection