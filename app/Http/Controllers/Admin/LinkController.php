<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Link\LinkStoreRequest;
use App\Http\Requests\Link\LinkUpdateRequest;
use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function index()
    {
        $links = Link::all();
        return view('admin.link.index', compact('links'));
    }
    public function create()
    {
        return view('admin.Link.create');
    }
    public function store(LinkStoreRequest $request)
    {

        Link::create($request->validated());

        return redirect()->route('admin.link.index');
    }
    public function edit(Link $link)
    {
        return view('admin.Link.edit', compact('link'));
    }
    public function update(LinkUpdateRequest $request, Link $link)
    {
        $link->update($request->validated());

        // Redirect with success message
        return redirect()->route('admin.link.index');
    }
    public function destroy(Link $link)
    {
        $link->delete();

        // Redirect with success message
        return redirect(route('admin.link.index'))->with('success', 'Slider deleted successfully');
    }



}
