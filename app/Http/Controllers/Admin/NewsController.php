<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\News\NewsStoreRequest;
use App\Http\Requests\News\NewsUpdateRequest;
use App\Models\Information;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $newses = News::with('information')->orderBy('position')->get();
        return view('admin.news.index', compact('newses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $informations=Information::all();
        return view('admin.News.create', compact('informations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NewsStoreRequest $request)
    {
    //    dd($request->all());
        News::create($request->validated());
        return redirect()->route('admin.news.index');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        $informations= Information::all();
        return view('admin.News.edit', compact('news','informations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NewsUpdateRequest $request, News $news)
    {  
        
        $news->update($request->validated());
        return redirect()->route('admin.news.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        $news->delete();
        return redirect()->route('admin.news.index');
    }
}
