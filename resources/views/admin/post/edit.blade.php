@extends('layouts.admin')
@section('content')
<h1 class="h3 mb-3"><strong>Edit</strong> Post</h1>

<form class="card" action="{{ route('post.update', $data->id) }}" method="post">
  @csrf
  @method('put')
  <!-- <div class="card-header">
    <h5 class="card-title mb-0">Add New Product</h5>
  </div> -->
  <div class="card-body">
  <div class="card-body">
    <label class="form-label mt-3">Title</label>
    <input type="text" class="form-control" name="title" placeholder="Enter title here" value="{{ $data->title }}">

    <div class="row mt-3">
      <div class="col-6">
        <label class="form-label">Cover Image</label>
        <input type="file" class="form-control" name="image">
      </div>
      <!-- <div class="col-6">
        <label class="form-label">Alt Text</label>
        <input type="text" class="form-control" name="alt_text" placeholder="Enter alt image here">
      </div> -->
    </div>
    
    <label class="form-label mt-3">Content</label>
    <input type="text" class="form-control" name="content" placeholder="Enter blog content here" value="{{ $data->content }}">

    <button type="submit" class="btn btn-primary mt-3">Save</button>
  </div>
</form>
@endsection