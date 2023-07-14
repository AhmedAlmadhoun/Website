@extends('site.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('siteasset/slick/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('siteasset/slick/slick/slick-theme.css') }}">

    <style>
        .top-news-picture {
            width: 30%;
            height: 100%;
        }


        .slider {
            overflow: hidden; /* Add this line to hide the bottom scrollbar */

        }
        .slider2 {
            overflow: hidden; /* Add this line to hide the bottom scrollbar */
        }
            .btn-primary {
                /* أنماط خاصة بلون الخلفية */
                background-color: #007bff;
                border-color: #007bff;
                /* أنماط خاصة بالنص */
                color: #ffffff;
                /* أنماط خاصة بحجم الخط */
                font-size: 14px;
                /* أنماط خاصة بحجم الزر */
                width: 100px;
                height: 50px;
                /* أنماط خاصة بتوسيط النص داخل الزر */
                display: flex;
                justify-content: center;
                align-items: center;
                /* أنماط خاصة بزوايا الزر */
                border-radius: 50%;
                /* أنماط خاصة بتعديل الفضاء بين الزر والعناصر المجاورة */
                margin-left: 33%;
            }


    </style>
@endsection

@section('content')

<div class="slider" style="    margin-top: 3%;" >
    @foreach ($news as $new)
        <div>
            <img class="top-news-picture" src="{{ $new->image }}" alt="صورة 1">
            <div class="caption" style="margin-left: 45%; margin-top: -7%;">
                {{ $new->details }}
                <div class="more" style="padding-top: 2%;">
                    <a href="#" class="link show-more" style="margin-left: 64%">اضغط هنا</a>
                </div>
            </div>
        </div>
    @endforeach
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

<div class="newest-courses ">
    <div class="our-newest-courses-text">جديد دوراتنا</div>
    <div class=" slider2 the-new-courses"  data-slick='{"slidesToShow": 4, "slidesToScroll": 4}'>
        @foreach ($courses as $course)
            <div class="  course-box">
                <div><img src="{{ $course->image }}" alt="" class="image-of-course"></div>
                <div class="name-of-course" style="text-align: center;">{{ $course->name }}</div>
                <div class="description-of-course" style="text-align: center;">{!!  $course->details !!}</div>
                <div class="subscribe-to-course-btn">
                    <a style="margin-left: 33%;text-decoration: none;" class="btn-primary btn rounded-circle" href="{{ route('show', $course->id) }}"> التفاصيل</a>
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
    $(document).ready(function(){
        $('.slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 1500,
            dots: true,
            arrows: true,
        });
    });
    $(document).ready(function(){
        $('.slider2').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 3000,
            dots: true,
            arrows: true,
        });
    });

</script>
@endsection
