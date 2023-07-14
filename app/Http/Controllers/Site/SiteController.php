<?php

namespace App\Http\Controllers\Site;

use App\Models\News;
use App\Models\Courses;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\Subscrip;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    public function index()
    {
        $courses = Courses::orderBy('id', 'desc')->get();
        $news = News::orderBy('id', 'desc')->take(4)->get();
        return view('site.index',compact('courses','news'));
    }
    public function courses()
    {
        $courses = Courses::orderBy('id', 'desc')->get();
        return view('site.courses',compact('courses'));
    }
    public function suggest()
    {
        return view('site.suggest');
    }
    public function about()
    {
        return view('site.about');
    }
    public function articles()
    {
        $news = News::orderBy('id', 'desc')->take(4)->get();
        return view('site.articles',compact('news'));
    }
    public function contact()
    {
        return view('site.contact');
    }

    public function show($id)
    {
        $courses = Courses::findOrFail($id);
        // dd($courses);
        return view('site.show',compact('courses'));
    }

    public function CoursesAdd($id){
        $courses = Courses::findOrFail($id);

        Subscrip::create([
            'name' => $courses->name,
            'user_id' => Auth::user()->id,
            'course_id' => $id,
            'coach_id' => $courses->coach_id,

        ]);
        return redirect()->route('home');
    }

    public function SuggestStore(){
        Message::create([
            'name' => request('name'),
            'email' => request('email'),
            'note' => request('note'),
        ]);
        return redirect()->route('home');
    }



}