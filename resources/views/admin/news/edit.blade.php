@extends('admin.master')

@section('titl', __('site.students'))

@section('styles')

@endsection


@section('content')
<form action="{{ route('admin.news.update',$news->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    @include('admin.news.form')
    <div class="form-group">
        <button type="submit" class="btn btn-primary">{{ __('site.update') }}</button>
    </div>



</form>
@endsection


@section('scripts')
@endsection
