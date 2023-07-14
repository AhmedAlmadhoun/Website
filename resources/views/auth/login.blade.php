@extends('site.master')

@section('content')
<div class="main-content">
    <div class="main-container">
        <div class="logo">
            <img src="{{ asset('siteasset/image/AzharLogo.png') }}" alt="Logo">
        </div>
        <form method="POST" action="{{ route('login') }}" class="login-form">
            @csrf
<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
@error('email')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

@error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror

    <input type="submit" value="LOGIN" id="login-button">
    </form>
    </div>
</div>

@endsection

