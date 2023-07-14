@extends('admin.master')

@section('titl', __('site.advertitings'))

@section('styles')

@endsection


@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">All advertitings</h1>

@if (session('msg'))
    <div class="alert alert-{{ session('type') }}">
        {{ session('msg') }}
    </div>
@endif

<table class="table table-bordered">
    <thead>
{{-- 	title	details	image	image --}}
        <tr>
            <th>ID</th>
            <th>title</th>
            <th>image</th>
            <th>link</th>
            <th>Created At</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($advertitings as $advertsing)
        <tr>
            <td>{{ $advertsing->id }}</td>
            <td>{{ $advertsing->title }}</td>
            <td><img src="{{ $advertsing->image }}" width="200px" alt=""></td>
            <td>{{ $advertsing->link }}</td>
            <td>{{ $advertsing->created_at ? $advertsing->created_at->diffForHumans() : '' }}</td>
            <td>
                <a class="btn btn-sm btn-primary" href="{{ route('admin.advertsings.edit', $advertsing->id) }}"><i class="fas fa-edit"></i></a>
                <form class="d-inline" action="{{ route('admin.advertsings.destroy', $advertsing->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure')"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $advertitings->links() }}

@stop



@section('scripts')
@endsection
