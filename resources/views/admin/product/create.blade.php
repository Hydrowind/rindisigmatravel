@extends('layouts.admin')
@section('content')

@php use App\Models\Product; @endphp
<h1 class="h3 mb-3"><strong>Insert</strong> New Product</h1>

<form class="card" action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
  @csrf
  <!-- <div class="card-header">
    <h5 class="card-title mb-0">Add New Product</h5>
  </div> -->
  <div class="card-body">
    <label class="form-label mt-3">Product Name</label>
    <input type="text" class="form-control" name="name" placeholder="Wisata Bali 3D1N">

    <!-- <label class="form-label mt-3">Cover Image</label>
    <input type="file" class="form-control" name="cover_image" placeholder="http://image.io/7uc54z.jpg"> -->

    <div class="row mt-3">
      <div class="col-6">
        <label class="form-label mt-3">Image 1</label>
        <input type="file" class="form-control" name="images[]">
      </div>
      <div class="col-6">
        <label class="form-label mt-3">Alt Text</label>
        <input type="text" class="form-control" name="alt_texts[]">
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-6">
        <label class="form-label mt-3">Image 2</label>
        <input type="file" class="form-control" name="images[]">
      </div>
      <div class="col-6">
        <label class="form-label mt-3">Alt Text</label>
        <input type="text" class="form-control" name="alt_texts[]">
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-6">
        <label class="form-label mt-3">Image 3</label>
        <input type="file" class="form-control" name="images[]">
      </div>
      <div class="col-6">
        <label class="form-label mt-3">Alt Text</label>
        <input type="text" class="form-control" name="alt_texts[]">
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-6">
        <label class="form-label mt-3">Image 4</label>
        <input type="file" class="form-control" name="images[]">
      </div>
      <div class="col-6">
        <label class="form-label mt-3">Alt Text</label>
        <input type="text" class="form-control" name="alt_texts[]">
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-6">
        <label class="form-label mt-3">Image 5</label>
        <input type="file" class="form-control" name="images[]">
      </div>
      <div class="col-6">
        <label class="form-label mt-3">Alt Text</label>
        <input type="text" class="form-control" name="alt_texts[]">
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-6">
        <label class="form-label mt-3">Image 6</label>
        <input type="file" class="form-control" name="images[]">
      </div>
      <div class="col-6">
        <label class="form-label mt-3">Alt Text</label>
        <input type="text" class="form-control" name="alt_texts[]">
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-6">
        <label class="form-label mt-3">Image 7</label>
        <input type="file" class="form-control" name="images[]">
      </div>
      <div class="col-6">
        <label class="form-label mt-3">Alt Text</label>
        <input type="text" class="form-control" name="alt_texts[]">
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-6">
        <label class="form-label mt-3">Image 8</label>
        <input type="file" class="form-control" name="images[]">
      </div>
      <div class="col-6">
        <label class="form-label mt-3">Alt Text</label>
        <input type="text" class="form-control" name="alt_texts[]">
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-6">
        <label class="form-label mt-3">Image 9</label>
        <input type="file" class="form-control" name="images[]">
      </div>
      <div class="col-6">
        <label class="form-label mt-3">Alt Text</label>
        <input type="text" class="form-control" name="alt_texts[]">
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-6">
        <label class="form-label mt-3">Image 10</label>
        <input type="file" class="form-control" name="images[]">
      </div>
      <div class="col-6">
        <label class="form-label mt-3">Alt Text</label>
        <input type="text" class="form-control" name="alt_texts[]">
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-6">
        <label class="form-label">Price</label>
        <input type="number" class="form-control" name="price" placeholder="1000000">
      </div>
      <div class="col-6">
        <label class="form-label">Minimum Guest</label>
        <input type="number" class="form-control" name="min_guest" placeholder="5">
      </div>
    </div>

    <label class="form-label mt-3">Duration</label>
    <input type="text" class="form-control" name="duration" placeholder="2D1N">

    <label class="form-label mt-3">Type</label>
    <select name="type" class="form-select">
      <!-- <option value="0">Tour</option> -->
      <option value="{{ Product::TYPE_ACCOMMODATION }}">Akomodasi</option>
      <option value="{{ Product::TYPE_EVENT }}">Event Organizer</option>
      <option value="{{ Product::TYPE_TRANSPORTATION }}">Transportasi</option>
      <option value="{{ Product::TYPE_TOUR_DOMESTIC }}">Tour Domestik</option>
      <option value="{{ Product::TYPE_TOUR_INTERNATIONAL }}">Tour Internasional</option>
    </select>
    
    <label class="form-label mt-3">Description</label>
    <textarea name="description" class="form-control"></textarea>
    
    <label class="form-label mt-3">Itinerary</label>
    <textarea name="itinerary" class="form-control"></textarea>
    
    <label class="form-label mt-3">Term and Condition</label>
    <textarea name="term_condition" class="form-control"></textarea>

    <label class="form-label mt-3">Meta Description</label>
    <input type="text" class="form-control" name="meta" placeholder="Enter meta here">

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