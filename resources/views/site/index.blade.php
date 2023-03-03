@extends('site.master')
@section('css')
    <link rel="stylesheet" href="{{ asset('siteasset/slick/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('siteasset/slick/slick/slick-theme.css') }}">
@endsection

@section('content')
    <div class="slideshow-section ">
        <div class="prev-btn  btn">
            <a class="prev">&#10094;</a>
        </div>
        <div class="news-section single-item-rtl">
            <div class="news-picture">

            </div>
            <div class="news-context">
                منحة لطلاب الطب البشري 2023-2024
                <div class="more">
                    <a href="#" class="link show-more">اضغط هنا</a>
                </div>
            </div>
            <div class="news-picture"></div>
            <div class="news-context">
                منحة لطلاب الطب البشري 2023-2024
                <div class="more">
                    <a href="#" class="link show-more">اضغط هنا</a>
                </div>
            </div>
            <div class="news-picture"></div>
            <div class="news-context">
                منحة لطلاب الطب البشري 2023-2024
                <div class="more">
                    <a href="#" class="link show-more">اضغط هنا</a>
                </div>
            </div>
        </div>
        <div class="next-btn btn">
            <a class="next">&#10095;</a>
        </div>
    </div>
    <div class="how-do-we-work">
        <div class="how-do-we-work-text">كيف نعمل؟</div>
        <div class="how-do-we-work-sections">
            <div class="method">
                <i class="fa fa-check-square"></i>
                <div class="method-text">الاختيار والتقويم</div>
            </div>
            <div class="method">
                <i class="fa fa-lightbulb"></i>
                <div class="method-text">التنفيذ الابداعي</div>
            </div>
            <div class="method">
                <i class="fa fa-book"></i>
                <div class="method-text">التخطيط والابتكار</div>
            </div>
            <div class="method">
                <i class="fa fa-comment"></i>
                <div class="method-text">جمع الأفكار</div>
            </div>
        </div>
    </div>
    <div class="newest-courses">
        <div class="our-newest-courses-text">جديد دوراتنا</div>
        <div class="the-new-courses">
            @foreach ($courses as $course)
                <div class="course-box">
                    <div><img src="{{ $course->image }}" alt="" class="image-of-course"></div>
                    <div class="name-of-course">{{ $course->name }}</div>
                    <div class="description-of-course">{{ $course->details }}</div>
                    <div class="subscribe-to-course-btn">
                        <button>اشترك الآن</button>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="{{ asset('siteasset/slick/slick/slick.min.js') }}"></script>
    <script>
        $('.single-item-rtl').slick({
            rtl: false
        });
    </script>
@endsection
