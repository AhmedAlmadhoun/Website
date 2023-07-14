@extends('site.master')

@section('content')
        <div class="container sticky-container">
            <div class="main-content" >

                <div class="title" style="margin-bottom: 4%">
                    <h1>تفاصيل الدورة</h1>

                </div>
                <div class="card mb-3" style="max-width: 540px;" >
                    <div class="row g-0" style="margin-top: 5%;margin-bottom: 8%">
                      <div class="col-md-4">
                        <img width="80%" style="margin-left: -64%;" src="{{ $courses->image }}" class="img-fluid rounded-start" alt="..." >
                      </div>
                      <div class="col-md-8" style="    margin-left: 44%;
                      margin-top: -47%;
                      margin-right: -12%;">

                        <div class="card-body">
                            <form action="{{ route('CoursesAdd',$courses->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="course_id" value="{{ $courses->id }}">
                                @php
                                    $user = Auth::user()->id
                                @endphp

                                <input type="hidden" name="coach_id" value="{{ $courses->coach->id }}">
                                <h5 class="card-title">{{ $courses->name }}  : اسم الدورة</h5>
                                <p class="card-text ">{!!  $courses->details !!} : التفاصيل </p>
                                <p class="card-text"> {{ $courses->coach->name }}  : اسم المحاضر </p>
                                <p class="card-text">عدد ساعات الدورة :{{ $courses->hours_count }}</p>
                                <p class="card-text">عدد ايام الدورة :    {{ $courses->days_count }}</p>

                                <p class="card-text">وقت البدء    :    {{ $courses->start_course }}</p>
                                <p class="card-text">{{ $courses->end_course }} :  وقت الانتهاء</p>
                                <p class="card-text">   {{ $courses->address }}  : العنوان </p>

                                <button  class="btn btn-primary">حجز مقعد الان </button>
                            </form>
                        </div>

                      </div>
                    </div>

                  </div>
            </div>
        </div>
@endsection

