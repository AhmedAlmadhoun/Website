@extends('site.master')
@section('css')
<style>

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
        <div class="container sticky-container">

            <div class="main-content" >
                <h1>اقتراح دورة</h1>
                {{-- <div class="suggestion-form">
                    <form action="#" class="suggest-form">
                        <p>اقترح الدورة التي ترغب بالحصول عليها</p>
                        <input type="text" name="course-name">
                        <p>ملاحظات</p>
                        <input type="text" name="notes">
                        <input type="submit" class="submit-btn" value="إرسال">
                    </form>
                </div> --}}
                <div class="suggestion-form suggest-form">
                    <form action="{{ route('SuggestStore') }}" method="POST">
                        @csrf
                        <div class="mb-3 " >
                            <input name="email" style="margin-right: 5%" type="email" class="form-control" id="exampleFormControlInput1" placeholder="ادخل الايميل رجاءً">
                            <label for="exampleFormControlInput1" class="form-label">الايميل</label>

                          </div>

                          <div class="mb-3 ">
                            <input name="name" style="margin-right: 3%"  type="text" class="form-control" id="exampleFormControlInput1" placeholder="اسم الدورة ">

                            <label for="exampleFormControlInput1" class="form-label">اقتراح دورة </label>
                          </div>

                          <div class="mb-3">
                            <textarea name="note" class="form-control" id="exampleFormControlTextarea1" rows="3" style="width: 80%;margin-right: 3.5%;" ></textarea>

                            <label for="exampleFormControlTextarea1" class="form-label">ملاحظات</label>
                          </div>
                          <button type="submit" class="btn btn-primary" style="    margin-left: 46%;" >ارسال</button>
                    </form>
                </div>
            </div>
        </div>
@endsection
