@extends('layouts.admin')
@section('content')
<h1 class="h3 mb-3"><strong>Site</strong> Configuration</h1>

<form class="card" action="{{ route('config.update') }}" method="POST">
  @method('PUT')
  @csrf
  <!-- <div class="card-header">
    <h5 class="card-title mb-0">Add New Product</h5>
  </div> -->
  <div class="card-body">
    <label class="form-label mt-3">Whatsapp Number</label>
    <input type="text" class="form-control" name="whatsapp" value="{{ $whatsapp }}">

    <label class="form-label mt-3">Head Script</label>
    <textarea class="form-control" name="headscript">{{ $headscript }}</textarea>

    <label class="form-label mt-3">Body Script</label>
    <textarea class="form-control" name="bodyscript">{{ $bodyscript }}</textarea>


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