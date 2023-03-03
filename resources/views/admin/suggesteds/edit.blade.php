@extends('admin.master')

@section('titl', __('site.suggesteds'))

@section('styles')

@endsection


@section('content')
    <form action="{{ route('admin.suggesteds.update',$suggested->id) }}" method="POST">
        @method('put')
        @csrf
        @include('admin.suggesteds.form')
        <div class="form-group">
            <button type="submit" class="btn btn-info">{{ __('site.update') }}</button>
        </div>

    </form>
@endsection


@section('scripts')
@endsection
