@extends('layouts.admin')
@section('content')
<h1 class="h3 mb-3"><strong>Site</strong> Configuration</h1>

<form class="card" action="{{ route('admin.config.homepage.update') }}" method="POST" enctype="multipart/form-data">
  @method('PUT')
  @csrf
  <!-- <div class="card-header">
    <h5 class="card-title mb-0">Add New Product</h5>
  </div> -->
  <div class="card-body">
    <label class="form-label mt-3">Partners</label>
    <input type="file" class="form-control" name="partners[]">
    <input type="file" class="form-control" name="partners[]">
    <input type="file" class="form-control" name="partners[]">
    <input type="file" class="form-control" name="partners[]">
    <input type="file" class="form-control" name="partners[]">

    <label class="form-label mt-3">Guest Documentations</label>
    <input type="file" class="form-control" name="guest_doc[]">
    <input type="file" class="form-control" name="guest_doc[]">
    <input type="file" class="form-control" name="guest_doc[]">
    <input type="file" class="form-control" name="guest_doc[]">
    <input type="file" class="form-control" name="guest_doc[]">

    <button type="submit" class="btn btn-primary mt-3">Save</button>
  </div>
</form>
@endsection

@section('script')
<script>
    $(document).ready(function () {
        $('#summernote').summernote({
            // height: 300, // Set the height of the editor
        });
    });
</script>
@endsection