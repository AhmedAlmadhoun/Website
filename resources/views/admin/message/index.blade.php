@extends('admin.master')

@section('title', 'Note | ' . env('APP_NAME'))

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">All Suggested</h1>

@if (session('msg'))
    <div class="alert alert-{{ session('type') }}">
        {{ session('msg') }}
    </div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Email</th>

            <th>Name</th>
            <th>Note</th>
            <th>Created At</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($messages as $message)
        <tr>
            <td>{{ $message->id }}</td>
            <td>{{ $message->email }}</td>

            <td>{{ $message->name }}</td>
            <td>{{ $message->note }}</td>
            <td>{{ $message->created_at ? $message->created_at->diffForHumans() : '' }}</td>
            <td>
                <form class="d-inline" action="{{ route('admin.message.destroy', $message->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure')"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $messages->links() }}

@stop
