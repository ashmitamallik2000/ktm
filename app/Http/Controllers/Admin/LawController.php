<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Law\LawStoreRequest;
use App\Http\Requests\Law\LawUpdateRequest;
use App\Models\Law;
use App\Models\LawCategory;
use Illuminate\Http\Request;

class LawController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        $laws = Law::with('lawCategory')->orderBy('position')->get();
        return view('admin.law.index', compact('laws'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $lawCategorys=LawCategory::all();
        return view('admin.Law.create', compact('lawCategorys'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LawStoreRequest $request)
    {
        
        Law::create($request->validated());
        return redirect()->route('admin.law.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Law $law)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Law $law)
    {
        $lawCategorys= LawCategory::all();
        return view('admin.Law.edit', compact('law','lawCategorys'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LawUpdateRequest $request, Law $law)
    {
        $law->update($request->validated());
        return redirect()->route('admin.law.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Law $law)
    {
        $law->delete();
        return redirect()->route('admin.law.index');
    }
}
