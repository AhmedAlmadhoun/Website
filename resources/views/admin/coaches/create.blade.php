@extends('admin.master')

@section('titl', __('site.students'))

@section('styles')

@endsection


@section('content')
<form action="{{ route('admin.coaches.store') }}" method="post">
    @csrf
    @include('admin.coaches.form')
    <div class="form-group">
        <button type="submit" class="btn btn-primary">{{ __('site.add') }}</button>
    </div>

</form>
@endsection


@section('scripts')
@endsection
