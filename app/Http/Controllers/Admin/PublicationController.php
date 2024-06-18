<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Publication\PublicationStoreRequest;
use App\Http\Requests\Publication\PublicationUpdateRequest;
use App\Models\Document;
use App\Models\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publications = Publication::with('document')->orderBy('position')->get();
        return view('admin.publication.index', compact('publications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $documents=Document::all();
        return view('admin.Publication.create', compact('documents'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PublicationStoreRequest $request)
    {
        Publication::create($request->validated());
        return redirect()->route('admin.publication.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Publication $publication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Publication $publication)
    {
        $documents= Document::all();
        return view('admin.Publication.edit', compact('publication','documents'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PublicationUpdateRequest $request, Publication $publication)
    {
        $publication->update($request->validated());
        return redirect()->route('admin.publication.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publication $publication)
    {
        $publication->delete();
        return redirect()->route('admin.publication.index');
    }
}
