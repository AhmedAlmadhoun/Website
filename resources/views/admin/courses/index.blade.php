@extends('admin.master')

@section('titl', __('site.courses'))

@section('styles')

@endsection


@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">All courses</h1>

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
            <th>Name</th>
            <th>Image</th>
            <th>start_course</th>
            <th>end_course</th>
            <th>address</th>
            <th>hours_count</th>
            <th>days_count</th>
            <th>time </th>
            <th>coach </th>
            <th>Created At</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($courses as $course)
        <tr>
            <td>{{ $course->id }}</td>
            <td>{{ $course->name }}</td>
            <td><img src="{{ $course->image }}" width="200px" alt=""></td>
            <td>{{ $course->start_course }}</td>
            <td>{{ $course->end_course }}</td>
            <td>{{ $course->address }}</td>
            <td>{{ $course->hours_count }}</td>
            <td>{{ $course->days_count }}</td>
            <td>{{ $course->time }}</td>
            <td>{{ $course->coach->name }}</td>
            <td>{{ $course->created_at ? $course->created_at->diffForHumans() : '' }}</td>
            <td>
                <a class="btn btn-sm btn-primary" href="{{ route('admin.courses.edit', $course->id) }}"><i class="fas fa-edit"></i></a>
                <form class="d-inline" action="{{ route('admin.courses.destroy', $course->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure')"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $courses->links() }}

@stop



@section('scripts')
@endsection
