<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Information\InformationStoreRequest;
use App\Http\Requests\Information\InformationUpdateRequest;
use App\Models\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $informations=Information::all();
        return view('admin.information.index',compact('informations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.Information.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InformationStoreRequest $request)
    {
        Information::create($request->validated());
        return redirect()->route('admin.information.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Information $information)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Information $information)
    {
        return view('admin.Information.edit',compact('information'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(InformationUpdateRequest $request, Information $information)
    {
        $information->update($request->validated());
        return redirect()->route('admin.information.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Information $information)
    {
        $information->delete();
        return redirect()->route('admin.Information.index');
    }
}
