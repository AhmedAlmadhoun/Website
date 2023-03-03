@extends('site.master')
@section('content')
            <div class="main-content">
                <h1>أخبارنا</h1>
                <div class="news-container">
                    @foreach ($news as $new)
                    <div class="news-box">
                        <div class="news-picture">
                            <img src="{{ $new->image }}" alt="">
                        </div>
                        <div class="news-context">
                            {{ $new->title }}
                        </div>
                        <div class="news-description">
                            {{ $new->details }}
                        </div>
                    </div>
                    @endforeach



                </div>
            </div>
@stop
