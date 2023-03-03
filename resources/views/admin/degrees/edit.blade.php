@extends('admin.master')

@section('titl', __('site.degrees'))

@section('styles')

@endsection


@section('content')
<form action="{{ route('admin.degrees.update',$degree->name) }}" method="post">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="name">{{ __('site.name') }}</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ $degree->name }}">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-info">{{ __('site.update') }}</button>
    </div>
</form>
@endsection


@section('scripts')
@endsection
