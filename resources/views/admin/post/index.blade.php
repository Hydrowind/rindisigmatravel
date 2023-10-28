@extends('layouts.admin')
@section('content')

@php use App\Models\Product @endphp

<a href="{{ route('post.create') }}" class="btn btn-primary float-end">+ Insert</a>
<h1 class="h3 mb-3"><strong>Post</strong> Data</h1>

<div class="card flex-fill">
  <!-- <div class="card-header">

    <h5 class="card-title mb-0">Latest Projects</h5>
  </div> -->
  <table class="table table-hover my-0">
    <thead>
      <tr>
        <th>Title</th>
        <th>Content</th>
        <th class="d-none d-md-table-cell">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $d)
      <tr>
        <td>{{ $d->title }}</td>
        <td>{{ $d->content }}</td>
        <!-- <td>{{ $d->price }}</td> -->
        <td>
          <a class="btn btn-sm btn-warning" href="{{ route('post.edit', $d->id) }}"><i class="align-middle" data-feather="edit"></i> Edit</a>
          <form action="{{ route('post.destroy', $d->id) }}" method="post" class="d-inline-block">
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