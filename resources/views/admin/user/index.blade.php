@extends('layouts.admin')
@section('content')

@php use App\Models\User @endphp

<a href="{{ route('user.create') }}" class="btn btn-primary float-end">+ Insert</a>
<h1 class="h3 mb-3"><strong>User</strong> Data</h1>

<div class="card flex-fill">
  <!-- <div class="card-header">

    <h5 class="card-title mb-0">Latest Projects</h5>
  </div> -->
  <table class="table table-hover my-0">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th class="d-none d-md-table-cell">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $d)
      <tr>
        <td>{{ $d->name }}</td>
        <td>{{ $d->email }}</td>
        <td>
          @switch($d->role)
            @case(User::ROLE_SUPERADMIN) Superadmin @break
            @case(User::ROLE_ADMIN) Admin @break
          @endswitch
        </td>
        <td>
          <a class="btn btn-sm btn-warning" href="{{ route('user.edit', $d->id) }}"><i class="align-middle" data-feather="edit"></i> Edit</a>
          <form action="{{ route('user.destroy', $d->id) }}" method="post" class="d-inline-block">
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