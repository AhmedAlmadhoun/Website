@extends('site.master')
@section('css')
<style>
    .top-news-picture {
        width: 30%;
        height: 100%;
        background-size: cover;
        background-position: center center;
        object-fit: cover;
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
           
        }
</style>

@endsection
@section('content')

    <div class="newest-courses">
        <div class="the-new-courses">
            @foreach ($courses as $course)
            <div class="course-box">
                <div><img src="{{ $course->image }}" alt="" class="image-of-course" ></div>
                <div class="name-of-course">{{ $course->name }}</div>
                <div class="description-of-course">{!!  $course->details !!}</div>
                <div class="subscribe-to-course-btn">
                    <a  class="btn-primary btn rounded-circle" href="{{ route('show', $course->id) }}">اشترك الآن</a>
                </div>
            </div>

            @endforeach
        </div>
    </div>
    <div class="suggestion-box">
        <div class="suggestion-btn">
            <a href="{{ route('suggest') }}" class="link">اقتراح دورة</a>
        </div>
    </div>

@endsection
