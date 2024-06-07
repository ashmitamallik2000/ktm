<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Link\LinkStoreRequest;
use App\Http\Requests\Link\LinkUpdateRequest;
use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $links = link::all();
        return view('admin.link.index', compact('links'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.Link.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LinkStoreRequest $request)
    {
       
        Link::create($request->validated());

        return redirect()->route('admin.link.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Link $link)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Link $link)
    {
        return view('admin.Link.edit', compact('link'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LinkUpdateRequest $request, Link $link)
    {
        $link->update($request->validated());

        // Redirect with success message
        return redirect()->route('admin.link.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Link $link)
    {
        $link->delete();

        // Redirect with success message
        return redirect(route('admin.link.index'))->with('success', 'Link dedeleted successfully');
    }
}
