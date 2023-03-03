<?php

namespace App\Http\Controllers\Admin;

use App\Models\Advertising;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdvertisingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advertitings = Advertising::orderBy('id', 'DESC')->paginate(10);
        return view('admin.advertsings.index', compact('advertitings'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $advertising = new Advertising();
        return view('admin.advertsings.create', compact('advertising'));
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

        Advertising::create([
            'title' => $request->title,
            'details' => $request->details,
            'image' => $request->image,
            'link' => $request->link,
        ]);

        return redirect()->route('admin.advertsings.index')->with('msg', 'Advertising created successfully')->with('type', 'success');
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

        $advertising = Advertising::find($id);
        return view('admin.advertsings.edit', compact('advertising'));
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
            'title' => 'required',
            'details' => 'required',
            'image' => 'required',
            'link' => 'required',
        ]);

        $advertising = Advertising::find($id);
        $advertising->update([
            'title' => $request->title,
            'details' => $request->details,
            'image' => $request->image,
            'link' => $request->link,
        ]);

        return redirect()->route('admin.advertsings.index')->with('msg', 'Advertising updated successfully')->with('type', 'info');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $advertising = Advertising::find($id);
        $advertising->delete();
        return redirect()->route('admin.advertsings.index')->with('msg', 'Advertising deleted successfully')->with('type', 'danger');
    }
}
