@extends('admin.master')

@section('titl', __('site.news'))

@section('styles')

@endsection


@section('content')
    @include('admin.errors')
<form action="{{ route('admin.news.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    @include('admin.news.form')
    <div class="form-group">
        <button type="submit" class="btn btn-primary">{{ __('site.add') }}</button>
    </div>



</form>
@endsection


@section('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
$('#lfm').filemanager('file');

@endsection
