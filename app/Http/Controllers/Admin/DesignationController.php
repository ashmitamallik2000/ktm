<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Designation\DesignationStoreRequest;
use App\Http\Requests\Designation\DesignationUpdateRequest;
use App\Models\Designation;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $designations = designation::all();
        return view('admin.designation.index', compact('designations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.Designation.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DesignationStoreRequest $request)
    {
        Designation::create($request->validated());

        return redirect()->route('admin.designation.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Designation $designation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Designation $designation)
    {
        return view('admin.Designation.edit', compact('designation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DesignationUpdateRequest $request, Designation $designation)
    {
        $designation->update($request->validated());

        // Redirect with success message
        return redirect()->route('admin.designation.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Designation $designation)
    {
        $designation->delete();

        // Redirect with success message
        return redirect(route('admin.designation.index'));
    }
}
