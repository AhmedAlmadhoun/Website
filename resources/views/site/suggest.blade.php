@extends('site.master')
@section('content')
        <div class="container sticky-container">

            <div class="main-content" >
                <h1>اقتراح دورة</h1>
                <div class="suggestion-form">
                    <form action="#" class="suggest-form">
                        <p>اقترح الدورة التي ترغب بالحصول عليها</p>
                        <input type="text" name="course-name">
                        <p>ملاحظات</p>
                        <input type="text" name="notes">
                        <input type="submit" class="submit-btn" value="إرسال">
                    </form>
                </div>
            </div>
        </div>
@endsection
