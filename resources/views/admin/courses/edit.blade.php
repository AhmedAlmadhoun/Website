@extends('admin.master')

@section('titl', __('site.courses'))

@section('styles')

@endsection


@section('content')
<form action="{{ route('admin.courses.update',$course->id) }}" method="POST" enctype="multipart/form-data">
    @method('put')
    @csrf
    @include('admin.courses.form')
    <div class="form-group">
        <button type="submit" class="btn btn-info">{{ __('site.update') }}</button>
    </div>

</form>
@endsection


@section('scripts')
@endsection
