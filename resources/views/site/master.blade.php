
<!DOCTYPE html>
<html>
    <head>
        <title>جامعة الأزهر</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('siteasset/css/style.css') }}">
        {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> --}}

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrety="sha512-1PK0gIY59xJ8Co8+NE6FZ+L0AZKjKY8iq0G4B3CyeY6wYHN3yt9PW0XpScriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous">
        @yield('css')
        <style>


              .dropdown {
                position: relative;
                display: inline-block;
              }

              .dropdown-menu {
                position: absolute;
                top: 100%;
                left: 0;
                display: none;
                float: left;
                min-width: 10rem;
                padding: 0.5rem 0;
                margin: 0.125rem 0 0;
                font-size: 1rem;
                text-align: left;
                background: #f8f9fa;
                border-radius: 0.25rem;
                z-index: 1;
                box-shadow: 0 0.1875rem 0.375rem rgba(0, 0, 0, 0.16),
                  0 0.1875rem 0.375rem rgba(0, 0, 0, 0.23);
              }

              .dropdown-item {
                display: block;
                padding: 0.25rem 1rem;
                white-space: nowrap;

              }

              .d-block {
                display: block;
              }

        </style>
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
                        <div class="log-in">
                            @auth
                            {{-- <a href="{{ route('admin.index') }}"  class="link" style="color: red"> {{ Auth::user()->name }}</a> --}}
                            <div class="max-w-xl mx-auto px-8 py-6">

                                <div class="dropdown">
                                  <button data-toggle="dropdown" data-target="#test" class=" link btn btn-primary" style="display: contents;
                                  color: black;">{{ Auth::user()->name }}</button>
                                  <div id="test" class="dropdown-menu">

                                    {{-- <a class="dropdown-item" href="{{ route('password.reset') }}">اعادة تعين كلمة المرور</a> --}}
                                    <a class="dropdown-item" href="{{ route('logout') }}" style="text-decoration: none"                   onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"  >تسجيل الخروج</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                                </div>

                              </div>
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
                    <a href="{{ route('home') }}" class="link">الرئيسية</a>
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
        <script src="{{ asset('siteasset/js/script.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js
        "></script>
        @yield('script')
        <script>
            var list = document.querySelectorAll("[data-toggle=dropdown]");
for (var i = 0, s = list.length; i < s; i++) {
  var elm = list[i];
  elm.addEventListener("click", function () {
    // this for loop will hide previously clicked drop downs
    for (var j = 0, z = list.length; j < z; j++) {
      if (list[j] != this) {
        var elm = document.querySelector(list[j].getAttribute("data-target"));
        var str = elm.className.replace("d-block");
        elm.className = str;
      }
    } // if you like, remove the above loop
    var obj = document.querySelector(this.getAttribute("data-target"));
    if (obj.className.indexOf("d-block") > 0) {
      var temp = obj.className.replace("d-block", "");
      obj.className = temp;
    } else {
      obj.className += " d-block";
    }
  });
}

        </script>
    </body>
</html>
