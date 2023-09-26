@extends('layouts.admin')
@section('content')
<h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>

<a href="{{ route('product.create') }}" class="btn btn-primary">+ Insert</a>
<div class="card flex-fill">
  <!-- <div class="card-header">

    <h5 class="card-title mb-0">Latest Projects</h5>
  </div> -->
  <table class="table table-hover my-0">
    <thead>
      <tr>
        <th>Name</th>
        <th class="d-none d-xl-table-cell">Cover</th>
        <th>Description</th>
        <th>Price</th>
        <th>Rating</th>
        <th>Max Guest</th>
        <th>Min Age</th>
        <th>Duration</th>
        <th class="d-none d-xl-table-cell">Start Date</th>
        <th class="d-none d-xl-table-cell">End Date</th>
        <th>Type</th>
        <th class="d-none d-md-table-cell">Action</th>
      </tr>
    </thead>
    <tbody>
      <!-- <tr>
        <td>Project Romeo</td>
        <td class="d-none d-xl-table-cell">01/01/2021</td>
        <td class="d-none d-xl-table-cell">31/06/2021</td>
        <td><span class="badge bg-success">Done</span></td>
        <td class="d-none d-md-table-cell">Christina Mason</td>
      </tr> -->
      @foreach($data as $d)
      <tr>
        <td>{{ $d->name }}</td>
        <td>{{ $d->cover_url }}</td>
        <td>{{ substr($d->description, 0, 100) }}</td>
        <td>{{ $d->price }}</td>
        <td>{{ $d->rating }}</td>
        <td>{{ $d->max_guest }}</td>
        <td>{{ $d->min_age }}</td>
        <td>{{ $d->duration }}</td>
        <td class="d-none d-xl-table-cell">{{ $d->start_date }}</td>
        <td class="d-none d-xl-table-cell">{{ $d->end_date }}</td>
        <td><span class="badge bg-warning">{{ $d->type }}</span></td>
        <td>
          <button class="btn btn-warning"><i class="align-middle" data-feather="edit"></i> Edit</button>
          <button class="btn btn-danger"><i class="align-middle" data-feather="trash"></i> Delete</button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection