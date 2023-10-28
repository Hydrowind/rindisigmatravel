@extends('layouts.admin')
@section('content')
<h1 class="h3 mb-3"><strong>Insert</strong> New User</h1>

<form class="card" action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
  @csrf
  <!-- <div class="card-header">
    <h5 class="card-title mb-0">Add New Product</h5>
  </div> -->
  <div class="card-body">
    <label class="form-label mt-3">Fullname</label>
    <input type="text" class="form-control" name="name" placeholder="Robert Downey Jr.">
    
    <label class="form-label mt-3">Email</label>
    <input type="email" class="form-control" name="email" placeholder="robert.jr@gmail.com">
    
    <label class="form-label mt-3">Password</label>
    <input type="password" class="form-control" name="password">

    <label class="form-label mt-3">Position</label>
    <input type="text" class="form-control" name="position" placeholder="Marketting">

    <label class="form-label mt-3">Image</label>
    <input type="file" class="form-control" name="image">

    <input type="hidden" name="role" value="1">

    <button type="submit" class="btn btn-primary mt-3">Save</button>
  </div>
</form>
@endsection