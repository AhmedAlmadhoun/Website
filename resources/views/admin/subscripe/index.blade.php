@extends('admin.master')

@section('title', 'Note | ' . env('APP_NAME'))

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">All subscripe</h1>

@if (session('msg'))
    <div class="alert alert-{{ session('type') }}">
        {{ session('msg') }}
    </div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Email User</th>
            <th>Name User</th>
            <th>Name Course</th>
            <th>Name Coach</th>
            <th>Created At</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($subscripes as $subscripe)
        <tr>
            <td>{{ $subscripe->id }}</td>
            <td>{{ $subscripe->user->email }}</td>
            <td>{{ $subscripe->user->name }}</td>
            <td>{{ $subscripe->name }}</td>
            <td>{{ $subscripe->coach->name }}</td>
            <td>{{ $subscripe->created_at ? $subscripe->created_at->diffForHumans() : '' }}</td>
            <td>
                <form class="d-inline" action="{{ route('admin.subscripe.destroy', $subscripe->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure')"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $subscripes->links() }}

@stop
