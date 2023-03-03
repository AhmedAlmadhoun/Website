@extends('admin.master')

@section('titl', __('site.advertsings'))

@section('styles')

@endsection


@section('content')
<form action="{{ route('admin.advertsings.update',$advertising->id) }}" method="post">
    @csrf
    @method('put')
    @include('admin.advertsings.form')
    <div class="form-group">
        <button type="submit" class="btn btn-primary">{{ __('site.update') }}</button>
    </div>



</form>
@endsection


@section('scripts')
@endsection
