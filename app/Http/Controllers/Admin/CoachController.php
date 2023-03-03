<?php

namespace App\Http\Controllers\Admin;

use App\Models\Coach;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CoachController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coaches = Coach::orderBy('id', 'DESC')->paginate(10);
        return view('admin.coaches.index', compact('coaches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $coach = new Coach();
        return view('admin.coaches.create', compact('coach'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //name	id_number	phone	email	gender	address	notes	status

        $request->validate([
            'name' => 'required',
            'id_number' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'gender' => 'required|in:Male,Female',
            'address' => 'required',
            'notes' => 'nullable',
            'status' => 'required|in:Active,Inactive',
        ]);

        Coach::create([
            'name' => $request->name,
            'id_number' => $request->id_number,
            'phone' => $request->phone,
            'email' => $request->email,
            'gender' => $request->gender,
            'address' => $request->address,
            'notes' => $request->notes,
            'status' => $request->status,

        ]);

        return redirect()->route('admin.coaches.index')->with('msg', 'Coach created successfully')->with('type', 'success');
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
        $coach = Coach::findOrFail($id);
        return view('admin.coaches.edit', compact('coach'));
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
        $request->validate([
            'name' => 'required',
            'id_number' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'gender' => 'required|in:Male,Female',
            'address' => 'required',
            'notes' => 'nullable',
            'status' => 'required|in:Active,Inactive',
        ]);

        $coach = Coach::findOrFail($id);
        $coach->update([
            'name' => $request->name,
            'id_number' => $request->id_number,
            'phone' => $request->phone,
            'email' => $request->email,
            'gender' => $request->gender,
            'address' => $request->address,
            'notes' => $request->notes,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.coaches.index')->with('msg', 'Coach updated successfully')->with('type', 'info');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coach = Coach::findOrFail($id);
        $coach->delete();
        return redirect()->route('admin.coaches.index')->with('msg', 'Coach deleted successfully')->with('type', 'danger');
    }
}
