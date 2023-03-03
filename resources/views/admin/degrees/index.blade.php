@extends('admin.master')

@section('titl', __('site.degrees'))

@section('styles')

@endsection


@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">All degrees</h1>

@if (session('msg'))
    <div class="alert alert-{{ session('type') }}">
        {{ session('msg') }}
    </div>
@endif

<table class="table table-bordered">
    <thead>
{{-- name	details	start_course	end_course	address	hours_count	days_count	time	coach_id	 --}}
        <tr>
            <th>ID</th>
            <th>{{ __('site.title') }}</th>
            <th>{{ __('site.created_at') }}</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($degrees as $degree)
        <tr>
            <td>{{ $degree->id }}</td>
            <td>{{ $degree->name }}</td>
            <td>{{ $degree->created_at ? $degree->created_at->diffForHumans() : '' }}</td>
            <td>
                <a class="btn btn-sm btn-primary" href="{{ route('admin.degrees.edit', $degree->id) }}"><i class="fas fa-edit"></i></a>
                <form class="d-inline" action="{{ route('admin.degrees.destroy', $degree->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure')"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $degrees->links() }}

@stop



@section('scripts')
@endsection
