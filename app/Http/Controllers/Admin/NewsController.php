<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::orderBy('id', 'DESC')->paginate(10);
        return view('admin.news.index', compact('news'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $news = new News();
        return view('admin.news.create', compact('news'));
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

        News::create([
            'title' => $request->title,
            'details' => $request->details,
            'image' => $request->image,
            'link' => $request->link,
        ]);

        return redirect()->route('admin.news.index')->with('msg', 'News created successfully')->with('type', 'success');
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
        $news = News::findOrFail($id);
        return view('admin.news.edit', compact('news'));
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

        $news = News::findOrFail($id);
        $news->update([
            'title' => $request->title,
            'details' => $request->details,
            'image' => $request->image,
            'link' => $request->link,
        ]);

        return redirect()->route('admin.news.index')->with('msg', 'News updated successfully')->with('type', 'info');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();
        return redirect()->route('admin.news.index')->with('msg', 'News deleted successfully')->with('type', 'danger');
    }
}
