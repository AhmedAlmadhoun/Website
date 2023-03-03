@extends('admin.master')

@section('title', 'Admin Dashboard')

@section('content')
    <!-- Page Heading -->
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 text-gray-800">Deleted Course</h1>
        <a class="btn btn-outline-dark" href="{{ route('admin.courses.index') }}">All Courses</a>
    </div>

    @if (session('msg'))
    <div class="alert alert-{{ session('type') }} alert-dismissible fade show" role="alert">
        {{ session('msg') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif

    {{-- {{ App::currentLocale() }} --}}
    <table class="table table-hover table-striped table-bordered">
        <thead>
            <tr class="bg-dark text-white">
                <th>ID</th>
                <th>Name</th>
                <th>Deleted At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($courses as $course)
                <tr>
                    <td>{{ $course->id }}</td>
                    {{-- <td>{{ json_decode($course->name, true)[App::currentLocale()] }}</td> --}}
                    <td>{{ $course->name }}</td>
                    <td>{{ $course->deleted_at->diffForHumans() }}</td>
                    <td>
                        <a class="btn btn-sm btn-primary" href="{{ route('admin.courses.restore', $course->id) }}"><i class="fas fa-undo"></i></a>
                        {{-- @if (Auth::user()->type == 'super-admin') --}}
                            <a onclick="return confirm('Are you sure?!')" class="btn btn-sm btn-danger" href="{{ route('admin.courses.forcedelete',$course->id) }}"><i class="fas fa-times"></i></a>
                        {{-- @endif --}}


                    </td>
                </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">No Data Found</td>
            </tr>
            @endforelse

        </tbody>
    </table>

    {{ $courses->links() }}
@stop
