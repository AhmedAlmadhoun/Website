<?php

namespace App\Http\Controllers\Admin;

use App\Models\Suggested;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SuggestedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suggesteds = Suggested::orderBy('id', 'DESC')->paginate(10);
        return view('admin.suggesteds.index', compact('suggesteds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $suggested = new Suggested();
        return view('admin.suggesteds.create', compact('suggested'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //name	title	email	phone

        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        Suggested::create([
            'name' => $request->name,
            'title' => $request->title,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        return redirect()->route('admin.suggesteds.index')->with('msg', 'Suggested created successfully')->with('type', 'success');
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
        $suggested = Suggested::findOrFail($id);
        return view('admin.suggesteds.edit', compact('suggested'));
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
        $suggested = Suggested::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        $suggested->update([
            'name' => $request->name,
            'title' => $request->title,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        return redirect()->route('admin.suggesteds.index')->with('msg', 'Suggested updated successfully')->with('type', 'info');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $suggested = Suggested::findOrFail($id);
        $suggested->delete();
        return redirect()->route('admin.suggesteds.index')->with('msg', 'Suggested deleted successfully')->with('type', 'danger');
    }
}
