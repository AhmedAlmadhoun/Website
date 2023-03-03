@extends('admin.master')

@section('titl', __('site.suggesteds'))

@section('styles')

@endsection


@section('content')
<form action="{{ route('admin.suggesteds.store') }}" method="POST">
{{-- 	name	id_number	phone	email	gender	address	date_of_birth	degree_id	course_id	coach_id --}}
@csrf

    @include('admin.suggesteds.form')
    <div class="form-group">
        <button type="submit" class="btn btn-primary">{{ __('site.add') }}</button>
    </div>


</form>
@endsection


@section('scripts')
@endsection
