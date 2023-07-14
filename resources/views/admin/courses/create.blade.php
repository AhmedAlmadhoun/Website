@extends('admin.master')

@section('titl', __('site.courses'))

@section('styles')

@endsection


@section('content')
<form action="{{ route('admin.courses.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    @include('admin.courses.form')
    <div class="form-group">
        <button type="submit" class="btn btn-primary">{{ __('site.add') }}</button>
    </div>

</form>
@endsection


@section('scripts')
<script src="https://cdn.tiny.cloud/1/pnaufl2tgt4jkehow3h3h90eqplgwxmytnkazqhemaadx6ns/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script><script>
    tinymce.init({
        selector: '.tinyedit',
        height: '400px'
    });
</script>
@endsection
