<!DOCTYPE html>
<html>
    <head>
        <title>جامعة الأزهر</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('siteasset/css/style.css') }}">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrety="sha512-1PK0gIY59xJ8Co8+NE6FZ+L0AZKjKY8iq0G4B3CyeY6wYHN3yt9PW0XpScriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous">
        @yield('css')
    </head>

    <body>
        <div class="container sticky-container">
            <div class="sticky">
                <div class="header">
                    <div class="social-media-links">
                        <div class="facebook">
                            <i class="fab fa-facebook-f"></i>
                        </div>
                        <div class="youtube">
                            <i class="fab fa-youtube"></i>
                        </div>
                    </div>
                    <div class="email">
                        <div class="icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="email-text">
                            p.r@alazhar.edu.ps
                        </div>
                    </div>
                    <div class="phone-number">
                        <span class="text-margin">08-012 3456</span><i  class="fa fa-phone"></i>
                    </div>
                </div>
                <div class="nav-bar">
                    <div class="log-in">
                        @auth
                        <a href=""  class="link"> {{ Auth::user()->name }}</a>

                        @else

                        <a href="{{ route('login') }}"  class="link">تسجيل الدخول<small>
                            <a href="{{ route('register') }}" style="text-decoration: none;">
                        <span style="color: red;">

                                /انشاء حساب جديد

                            </span>
                            </a>

                    </small> </a>
                        @endauth

                    </div>
                    <div class="call-us">
                        <a href="{{ route('contact') }}"  class="link">اتصل بنا</a>
                    </div>
                    <div class="about-us">
                        <a href="{{ route('about') }}"  class="link">من نحن</a>
                    </div>
                    <div class="news">
                        <a href="{{ route('articles') }}"  class="link">أخبار العامة</a>
                    </div>
                    <div class="courses">
                        <a href="{{ route('courses') }}"  class="link">الدورات</a>
                    </div>
                    <div class="continuous-learning-page">
                        <a href="{{ route('suggest') }}"  class="link">صفحة التعليم المستمر</a>
                    </div>
                    <div class="university-page">
                        <a href="http://www.alazhar.edu.ps/arabic/index.asp" class="link">صفحة الجامعة</a>
                    </div>
                    <div class="main-page">
                        <a href="{{ route('home') }}" class="link active">الرئيسية</a>
                    </div>
                </div>
            </div>
<div class="main-content">
    <div class="main-container" style="width: 65%;
    height: 1%;">
        <div class="logo">
            <img src="{{ asset('siteasset/image/AzharLogo.png') }}" alt="Logo">
        </div>
        <form method="POST" action="{{ route('register') }}" class="login-form" style="margin-top: 2%">
            @csrf


            <div class="name" style="width: 101%;
            margin-right: -22%;">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter Name">
@error('name')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
            </div>







            <div class="name" style="width: 101%;
            margin-right: -22%;">
<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter Email">
@error('email')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
            </div>


            <div class="name" style="width: 101%;
            margin-right: -22%;">
<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Password">

@error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
            </div>

            <div class="name" style="width: 101%;
            margin-right: -22%;">
<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Enter Confirm Password">

<div class="name" style="width: 101%;
margin-right: -22%;">
    <input type="submit" value="register" id="login-button" style="margin-bottom: 5%;">
    </form>
    </div>
</div>

</div>
<script src="{{ asset('siteasset/js/script.js') }}"></script>

@yield('script')
</body>
</html>
