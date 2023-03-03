@extends('admin.master')

@section('titl', __('site.sliders'))

@section('styles')

@endsection


@section('content')
<form action="{{ route('admin.sliders.update',$slider->id) }}" method="post">
    @csrf
    @method('put')
    @include('admin.sliders.form')
    <div class="form-group">
        <button type="submit" class="btn btn-primary">{{ __('site.update') }}</button>
    </div>



</form>
@endsection


@section('scripts')
@endsection
