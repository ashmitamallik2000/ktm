<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LawCategory\LawCategoryStoreRequest;
use App\Http\Requests\LawCategory\LawCategoryUpdateRequest;
use App\Models\LawCategory;
use Illuminate\Http\Request;

class LawCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lawCategories=LawCategory::all();
        return view('admin.lawcategory.index',compact('lawCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.LawCategory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LawCategoryStoreRequest $request)
    {
        LawCategory::create($request->validated());
        return redirect()->route('admin.lawCategory.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(LawCategory $lawCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LawCategory $lawCategory)
    {
        return view('admin.LawCategory.edit', compact('lawCategory'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LawCategoryUpdateRequest $request, LawCategory $lawCategory)
    {
        $lawCategory->update($request->validated());
        return redirect()->route('admin.lawCategory.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LawCategory $lawCategory)
    {
        $lawCategory->delete();
        return redirect()->route('admin.lawCategory.index');
    }
}
