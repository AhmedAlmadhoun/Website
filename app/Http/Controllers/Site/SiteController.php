<?php

namespace App\Http\Controllers\Site;

use App\Models\News;
use App\Models\Courses;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function index()
    {
        $courses = Courses::orderBy('id', 'desc')->take(4)->get();
        return view('site.index',compact('courses'));
    }
    public function courses()
    {
        $courses = Courses::orderBy('id', 'desc')->take(4)->get();
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

}
