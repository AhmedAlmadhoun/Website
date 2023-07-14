<?php

namespace App\Http\Controllers\Admin;

use App\Models\Coach;
use App\Models\Degree;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Courses;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(request()->has('keyword')) {
            // return request()->keyword;
            $students = Student::where('name', 'like', '%'.request()->keyword.'%')->paginate(10);
        }else {
            $students = Student::orderBy('id', 'DESC')->paginate(10);

            }
            $female = Student::where('gender','Female')->count();
            $male = Student::where('gender','Male')->count();
            return view('admin.students.index', compact('students','female','male'));
        }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $student = new Student();
        $degrees = Degree::all();
        $courses = Courses::all();
        $coaches = Coach::all();
        return view('admin.students.create', compact('student' , 'degrees' , 'courses' , 'coaches'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // id	name	id_number	phone	email	gender	address	date_of_birth	degree_id	course_id	coach_id
        $request->validate([
            'name' => 'required',
            'id_number' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'gender' => 'required|in:Male,Female',
            'address' => 'required',
            'date_of_birth' => 'required',
            'degree_id' => 'required',
            'course_id' => 'required',
            'coach_id' => 'nullable',
        ]);

        Student::create([
            'name' => $request->name,
            'id_number' => $request->id_number,
            'phone' => $request->phone,
            'email' => $request->email,
            'gender' => $request->gender,
            'address' => $request->address,
            'date_of_birth' => $request->date_of_birth,
            'degree_id' => $request->degree_id,
            'course_id' => $request->course_id,
            'coach_id' => $request->coach_id,
        ]);

        return redirect()->route('admin.students.index')->with('msg', 'Student created successfully')->with('type', 'success');
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
        $student = Student::findOrFail($id);
        $degrees = Degree::all();
        $courses = Courses::all();
        $coaches = Coach::all();
        return view('admin.students.edit', compact('student' , 'degrees' , 'courses' , 'coaches'));
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
        $student = Student::findOrFail($id);
        $request->validate([
            'name' => 'required',
            'id_number' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'gender' => 'required|in:Male,Female',
            'address' => 'required',
            'date_of_birth' => 'required',
            'degree_id' => 'required',
            'course_id' => 'required',
            'coach_id' => 'nullable',
        ]);
        $student->update([
            'name' => $request->name,
            'id_number' => $request->id_number,
            'phone' => $request->phone,
            'email' => $request->email,
            'gender' => $request->gender,
            'address' => $request->address,
            'date_of_birth' => $request->date_of_birth,
            'degree_id' => $request->degree_id,
            'course_id' => $request->course_id,
            'coach_id' => $request->coach_id,
        ]);
        return redirect()->route('admin.students.index')->with('msg', 'Student Update successfully')->with('info', 'success');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->route('admin.students.index')->with('msg', 'Student deleted successfully')->with('type', 'danger');

   }
}