<?php

namespace App\Http\Controllers\Admin;

use App\Models\Coach;
use App\Models\Courses;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Courses::orderBy('id', 'DESC')->paginate(10);
        return view('admin.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $course = new Courses();
        $coaches = Coach::all();
        return view('admin.courses.create', compact('course', 'coaches'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //name	details	start_course	end_course	address	hours_count	days_count	time	coach_id
        $request->validate([
            'name' => 'required',
            'details' => 'required',
            'image'=> 'nullable',
            'start_course' => 'required',
            'end_course' => 'required',
            'address' => 'required',
            'hours_count' => 'required',
            'days_count' => 'required',
            'time' => 'required',
            'coach_id' => 'nullable',
        ]);

        Courses::create([
            'name' => $request->name,
            'details' => $request->details,
            'image' => $request->image,
            'start_course' => $request->start_course,
            'end_course' => $request->end_course,
            'address' => $request->address,
            'hours_count' => $request->hours_count,
            'days_count' => $request->days_count,
            'time' => $request->time,
            'coach_id' => $request->coach_id,
        ]);

        return redirect()->route('admin.courses.index')->with('msg', 'Course created successfully')->with('type', 'success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Courses::findOrFail($id);
        $coaches = Coach::all();

        return view('admin.courses.edit', compact('course', 'coaches'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //name	details	start_course	end_course	address	hours_count	days_count	time	coach_id
        $request->validate([
            'name' => 'required',
            'details' => 'required',
            'image' => 'nullable',
            'start_course' => 'required',
            'end_course' => 'required',
            'address' => 'required',
            'hours_count' => 'required',
            'days_count' => 'required',
            'time' => 'required',
            'coach_id' => 'nullable',
        ]);

        $course = Courses::findOrFail($id);
        $course->update([
            'name' => $request->name,
            'details' => $request->details,
            'image' => $request->image,
            'start_course' => $request->start_course,
            'end_course' => $request->end_course,
            'address' => $request->address,
            'hours_count' => $request->hours_count,
            'days_count' => $request->days_count,
            'time' => $request->time,
            'coach_id' => $request->coach_id,
        ]);

        return redirect()->route('admin.courses.index')->with('msg', 'Course updated successfully')->with('type', 'info');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Courses::findOrFail($id);
        $course->delete();
        return redirect()->route('admin.courses.index')->with('msg', 'Course deleted successfully')->with('type', 'danger');
    }

    // public function search(Request $request)
    // {
    //     $courses = Courses::where('name', 'like', '%' . $request->search . '%')->paginate(10);
    //     return view('admin.courses.index', compact('courses'));
    // }

    public function trash()
    {
        $courses = Courses::onlyTrashed()->paginate(10);
        return view('admin.courses.trash', compact('courses'));
    }
    public function restore(Request $request, $id)
    {
        $course = Courses::onlyTrashed()->findOrFail($id);
        $course->restore();
        return redirect()->route('admin.courses.trash')->with('msg', 'Course restored successfully')->with('type', 'info');
    }

    public function forcedelete(Request $request, $id)
    {
        $course = Courses::onlyTrashed()->findOrFail($id);
        $course->forceDelete();
        return redirect()->route('admin.courses.trash')->with('msg', 'Course deleted successfully')->with('type', 'danger');
    }

}
