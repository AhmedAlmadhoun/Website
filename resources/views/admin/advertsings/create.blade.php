@extends('admin.master')

@section('titl', __('site.advertsings'))

@section('styles')

@endsection


@section('content')
<form action="{{ route('admin.advertsings.store') }}" method="post">
    @csrf
    @include('admin.advertsings.form')
    <div class="form-group">
        <button type="submit" class="btn btn-primary">{{ __('site.add') }}</button>
    </div>



</form>
@endsection


@section('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
$('#lfm').filemanager('file');

@endsection
