@extends('admin.master')

@section('titl', __('site.students'))

@section('styles')

@endsection


@section('content')
@include('admin.errors')
    <form action="{{ route('admin.students.update',$student->id) }}" method="POST">
        @method('put')
        @csrf
        @include('admin.students.form')
        <div class="form-group">
            <button type="submit" class="btn btn-info">{{ __('site.update') }}</button>
        </div>

    </form>
@endsection


@section('scripts')
@endsection
