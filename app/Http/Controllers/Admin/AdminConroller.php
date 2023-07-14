<?php

namespace App\Http\Controllers\Admin;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Coach;
use App\Models\Courses;
use App\Models\User;

class AdminConroller extends Controller
{
    public function index()
    {
        $female = Student::where('gender','Female')->count();
        $male = Student::where('gender','Male')->count();
        $count = Student::count();
        $counUser = User::count();
        $countCourses = Courses::count();
        $countCoach =Coach::count();
        $CoursesToday = Courses::whereDate('created_at', today())->count();
        $CoursesYear = Courses::whereYear('created_at', now()->year)->count();
        // dd($female, $male);
        return view('admin.index', compact('female','male','count','CoursesToday','CoursesYear','counUser','countCourses','countCoach'));
    }
}