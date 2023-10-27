@extends('layouts.admin')
@section('content')

@php use App\Models\Product @endphp

<a href="{{ route('product.create') }}" class="btn btn-primary float-end">+ Insert</a>
<h1 class="h3 mb-3"><strong>Product</strong> Data</h1>

<div class="card flex-fill">
  <!-- <div class="card-header">

    <h5 class="card-title mb-0">Latest Projects</h5>
  </div> -->
  <table class="table table-hover my-0">
    <thead>
      <tr>
        <th>Name</th>
        <!-- <th class="d-none d-xl-table-cell">Cover</th> -->
        <th>Price</th>
        <th>Min Guest</th>
        <th>Duration</th>
        <th>Type</th>
        <th class="d-none d-md-table-cell">Action</th>
      </tr>
    </thead>
    <tbody>
      <!-- <tr>
        <td class="d-none d-md-table-cell">Christina Mason</td>
      </tr> -->
      @foreach($data as $d)
      <tr>
        <td>{{ $d->name }}</td>
        <td>{{ number_format($d->price, 0) }}</td>
        <td>{{ $d->min_guest }}</td>
        <td>{{ $d->duration }}</td>

        <td>{{ $d->type }}</td>
        <td>
          <a class="btn btn-sm btn-warning" href="{{ route('product.edit', $d->id) }}"><i class="align-middle" data-feather="edit"></i> Edit</a>
          <form action="{{ route('product.destroy', $d->id) }}" method="post" class="d-inline-block">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-sm btn-danger"><i class="align-middle" data-feather="trash"></i> Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection