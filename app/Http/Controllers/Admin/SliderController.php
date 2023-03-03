<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::orderBy('id', 'DESC')->paginate(10);
        return view('admin.sliders.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $slider = new Slider();
        return view('admin.sliders.create', compact('slider'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //title	details	image	link

        $request->validate([
            'title' => 'required',
            'details' => 'required',
            'image' => 'required',
            'link' => 'required',
        ]);

        Slider::create([
            'title' => $request->title,
            'details' => $request->details,
            'image' => $request->image,
            'link' => $request->link,
        ]);

        return redirect()->route('admin.sliders.index')->with('msg', 'Slider created successfully')->with('type', 'success');
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
        $slider = Slider::findOrFail($id);
        return view('admin.sliders.edit', compact('slider'));
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
        //title	details	image	link

        $request->validate([
            'title' => 'required',
            'details' => 'required',
            'image' => 'required',
            'link' => 'required',
        ]);

        $slider = Slider::findOrFail($id);
        $slider->update([
            'title' => $request->title,
            'details' => $request->details,
            'image' => $request->image,
            'link' => $request->link,
        ]);

        return redirect()->route('admin.sliders.index')->with('msg', 'Slider updated successfully')->with('type', 'info');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
        $slider->delete();
        return redirect()->route('admin.sliders.index')->with('msg', 'Slider deleted successfully')->with('type', 'danger');
    }
}
