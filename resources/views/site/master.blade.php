
<!DOCTYPE html>
<html>
    <head>
        <title>جامعة الأزهر</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('siteasset/style.css') }}">


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
                    @auth
                        <div class="log-in">
                            <a href="{{ route('login') }}"  class="link" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            تسجيل الخروج
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </a>
                        </div>
                        @else
                        <div class="log-in">
                            <a href="{{ route('login') }}"  class="link">تسجيل الدخول</a>
                        </div>
                    @endauth
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
            @yield('content')
            <div class="footer" style="margin-top: 3%">
                <div class="contact-information">
                    <div class="bigger-text">معلومات التواصل</div>
                    <br><br>
                    <div class="location">
                        غزة، شارع جمال عبد الناصر، فلسطين
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <div class="phone">
                        08-012 3456
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="contact-email">
                        r.p@alazhar.edu.ps
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="social-media">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-youtube"></i>
                    </div>
                </div>
                <div class="links">
                    <div class="bigger-text">روابط الموقع</div>
                    <br><br>
                    <a href="../home/home.html" class="link">الرئيسية</a>
                    <a href="../about/about.html" class="link">من نحن</a>
                    <a href="../courses/courses.html" class="link">الدورات</a>
                    <a href="../suggest/suggest.html" class="link">اقتراح دورة</a>
                    <a href="../contact/contact.html" class="link">تواصل معنا</a>
                </div>
                <div class="name-of-website">
                    <div class="bigger-text">جامعة الأزهر</div>
                    <br><br>
                    مركز التعليم المستمر بجامعة الأزهر - غزة
                </div>
            </div>
        </div>
        <script src="{{ asset('siteasset/script.js') }}"></script>
        @yield('script')
    </body>
</html>
