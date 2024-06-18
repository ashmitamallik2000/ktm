<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Introduction\IntroductionStoreRequest;
use App\Http\Requests\Introduction\IntroductionUpdateRequest;
use App\Models\Introduction;
use Illuminate\Http\Request;

class IntroductionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $introductions=Introduction::all();
        return view('admin.introduction.index',compact('introductions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.Introduction.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(IntroductionStoreRequest $request)
    {
        Introduction::create($request->validated());
        return redirect()->route('admin.introduction.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Introduction $introduction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Introduction $introduction)
    {
        return view('admin.Introduction.edit',compact('introduction'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(IntroductionUpdateRequest $request, Introduction $introduction)
    {
        $introduction->update($request->validated());
        return redirect()->route('admin.introduction.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Introduction $introduction)
    {
        $introduction->delete();
        return redirect()->route('admin.introduction.index');
    }
}
