@extends('admin.master')

@section('titl', __('site.coaches'))

@section('styles')

@endsection


@section('content')
@include('admin.errors')
<form action="{{ route('admin.coaches.update',$coach->id) }}" method="POST">
    @method('put')
    @csrf
    @include('admin.coaches.form')
    <div class="form-group">
        <button type="submit" class="btn btn-info">{{ __('site.update') }}</button>
    </div>

</form>
@endsection


@section('scripts')
@endsection
