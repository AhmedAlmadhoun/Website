<?php

namespace App\Http\Controllers\Admin;

use App\Models\Degree;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DegreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $degrees = Degree::orderBy('id', 'DESC')->paginate(10);
        return view('admin.degrees.index', compact('degrees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $degree = new Degree();
        return view('admin.degrees.create', compact('degree'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //name
        $request->validate([
            'name' => 'required',
        ]);

        Degree::create([
            'name' => $request->name,
        ]);

        return redirect()->route('admin.degrees.index')->with('msg', 'Degree created successfully')->with('type', 'success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $degree = Degree::findOrFail($id);
        return view('admin.degrees.edit', compact('degree'));
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
        ]);

        $degree = Degree::findOrFail($id);
        $degree->update([
            'name' => $request->name,
        ]);

        return redirect()->route('admin.degrees.index')->with('msg', 'Degree updated successfully')->with('type', 'success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $degree = Degree::findOrFail($id);
        $degree->delete();  
        return redirect()->route('admin.degrees.index')->with('msg', 'Degree deleted successfully')->with('type', 'success');
    }
}
