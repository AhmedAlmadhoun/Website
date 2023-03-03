@extends('admin.master')

@section('titl', __('site.coache'))

@section('styles')

@endsection


@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">All Cache</h1>

@if (session('msg'))
    <div class="alert alert-{{ session('type') }}">
        {{ session('msg') }}
    </div>
@endif

<table class="table table-bordered">
    <thead>
        {{-- name	id_number	phone	email	gender	address	notes	status	 --}}
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Id Number</th>
            <th>phone</th>
            <th>email</th>
            <th>address</th>
            <th>gender</th>
            <th>status </th>
            <th>Created At</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($coaches as $coache)
        <tr>
            <td>{{ $coache->id }}</td>
            <td>{{ $coache->name }}</td>
            <td>{{ $coache->id_number }}</td>
            <td>{{ $coache->phone }}</td>
            <td>{{ $coache->email }}</td>
            <td>{{ $coache->gender }}</td>
            <td>{{ $coache->address }}</td>
            <td>{{ $coache->status }}</td>
            <td>{{ $coache->created_at ? $coache->created_at->diffForHumans() : '' }}</td>
            <td>
                <a class="btn btn-sm btn-primary" href="{{ route('admin.coaches.edit', $coache->id) }}"><i class="fas fa-edit"></i></a>
                <form class="d-inline" action="{{ route('admin.coaches.destroy', $coache->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure')"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $coaches->links() }}

@stop



@section('scripts')
@endsection
