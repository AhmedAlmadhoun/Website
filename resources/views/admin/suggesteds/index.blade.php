@extends('admin.master')

@section('titl', __('site.suggesteds'))

@section('styles')

@endsection


@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">All suggesteds</h1>

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
            <th>{{ __('site.name') }}</th>
            <th>{{ __('site.title') }}</th>
            <th>{{ __('site.link') }}</th>
            <th>{{ __('site.created_at') }}</th>
            <th>{{ __('site.actions') }}</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($suggesteds as $suggested)
        <tr>
            <td>{{ $suggested->id }}</td>
            <td>{{ $suggested->name }}</td>
            <td>{{ $suggested->title }}</td>
            <td>{{ $suggested->email }}</td>
            <td>{{ $suggested->created_at ? $suggested->created_at->diffForHumans() : '' }}</td>
            <td>
                <a class="btn btn-sm btn-primary" href="{{ route('admin.suggesteds.edit', $suggested->id) }}"><i class="fas fa-edit"></i></a>
                <form class="d-inline" action="{{ route('admin.suggesteds.destroy', $suggested->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure')"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $suggesteds->links() }}

@stop



@section('scripts')
@endsection
