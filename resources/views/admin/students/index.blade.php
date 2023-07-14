@extends('admin.master')

@section('titl', __('site.students'))

@section('styles')

@endsection


@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">All Students</h1>

@if (session('msg'))
    <div class="alert alert-{{ session('type') }}">
        {{ session('msg') }}
    </div>
@endif

<form action="{{ route('admin.students.index') }}" method="get">
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search..." value="{{ request()->keyword }}" name="keyword">
        <button class="btn btn-success" type="submit" id="button-addon2">Search</button>
      </div>
</form>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>{{ __('site.name') }}</th>
            <th>{{ __('site.id_number') }}</th>
            <th>{{ __('site.phone') }}</th>
            <th>{{ __('site.email') }}</th>
            <th>{{ __('site.gender') }}</th>
            <th>{{ __('site.address') }}</th>
            <th>{{ __('site.date_of_birth') }}</th>
            <th> {{ __('site.degree') }}</th>
            <th>{{ __('site.courses') }}</th>
            <th>{{ __('site.coach_id') }}</th>
            <th>{{ __('site.created_at') }}</th>
            <th>{{ __('site.name') }}</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->id_number }}</td>
            <td>{{ $student->phone }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->gender }}</td>
            <td>{{ $student->address }}</td>
            <td>{{ $student->date_of_birth }}</td>
            <td>{{ $student->degree->name }}</td>
            <td>{{ $student->course->name }}</td>
            <td>{{ $student->coach->name }}</td>
            <td>{{ $student->created_at ? $student->created_at->diffForHumans() : '' }}</td>
            <td>
                <a class="btn btn-sm btn-primary" href="{{ route('admin.students.edit', $student->id) }}"><i class="fas fa-edit"></i></a>
                <form class="d-inline" action="{{ route('admin.students.destroy', $student->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure')"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $students->links() }}

@stop



@section('scripts')
@endsection
