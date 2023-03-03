@extends('admin.master')

@section('titl', __('site.news'))

@section('styles')

@endsection


@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">All news</h1>

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
            <th>{{ __('site.details') }}</th>
            <th>{{ __('site.created_at') }}</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($news as $new)
        <tr>
            <td>{{ $new->id }}</td>
            <td>{{ $new->title }}</td>
            <td><img src="{{$new->image }}" width="200" alt=""></td>
            <td>{{ $new->link }}</td>
            <td>{{ $new->details }}</td>
            <td>{{ $new->created_at ? $new->created_at->diffForHumans() : '' }}</td>
            <td>
                <a class="btn btn-sm btn-primary" href="{{ route('admin.news.edit', $new->id) }}"><i class="fas fa-edit"></i></a>
                <form class="d-inline" action="{{ route('admin.news.destroy', $new->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure')"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $news->links() }}

@stop



@section('scripts')
@endsection
