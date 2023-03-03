@extends('site.master')
@section('content')

    <div class="newest-courses">
        <div class="the-new-courses">
            @foreach ($courses as $course)
            <div class="course-box">
                <div><img src="{{ $course->image }}" alt="" class="image-of-course" ></div>
                <div class="name-of-course">{{ $course->name }}</div>
                <div class="description-of-course">{{ $course->details }}</div>
                <div class="subscribe-to-course-btn">
                    <button>اشترك الآن</button>
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
