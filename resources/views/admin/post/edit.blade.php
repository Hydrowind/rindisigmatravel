@extends('layouts.admin')
@section('content')
<h1 class="h3 mb-3"><strong>Edit</strong> Post</h1>

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
    <input type="hidden" name="object_type" value="{{ 'App\Models\Post' }}">
    <input type="hidden" name="current_url" value="{{ url()->current() }}">
  
    <button type="submit" class="btn btn-primary mt-3">Insert</button>
  </div>
</form>

<form class="card" action="{{ route('post.update', $data->id) }}" method="post" enctype="multipart/form-data">
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
    <textarea class="form-control" name="content">{{ $data->content }}</textarea>

    <label class="form-label mt-3">Meta Description</label>
    <input type="text" class="form-control" name="meta" placeholder="Enter meta here" value="{{ $data->meta }}">

    <button type="submit" class="btn btn-primary mt-3">Save</button>
  </div>
</form>
@endsection