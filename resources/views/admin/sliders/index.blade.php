@extends('admin.master')

@section('titl', __('site.sliders'))

@section('styles')

@endsection


@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">All sliders</h1>

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
            <th>{{ __('site.title') }}</th>
            <th>{{ __('site.image') }}</th>
            <th>{{ __('site.link') }}</th>
            <th>{{ __('site.created_at') }}</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($sliders as $slider)
        <tr>
            <td>{{ $slider->id }}</td>
            <td>{{ $slider->title }}</td>
            <td><img src="{{ $slider->image }}" width="200px" alt=""></td>
            <td>{{ $slider->link }}</td>
            <td>{{ $slider->created_at ? $slider->created_at->diffForHumans() : '' }}</td>
            <td>
                <a class="btn btn-sm btn-primary" href="{{ route('admin.sliders.edit', $slider->id) }}"><i class="fas fa-edit"></i></a>
                <form class="d-inline" action="{{ route('admin.sliders.destroy', $slider->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure')"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $sliders->links() }}

@stop



@section('scripts')
@endsection
