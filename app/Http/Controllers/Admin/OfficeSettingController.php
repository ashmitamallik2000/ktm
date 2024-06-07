<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OfficeSetting\OfficeSettingUpdateRequest;
use App\Models\Employee;
use App\Models\OfficeSetting;
use Illuminate\Http\Request;

class OfficeSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees=Employee::latest()->get();
        $officeSetting=OfficeSetting::latest()->first();
        return view('admin.OfficeSetting.index',compact('employees', 'officeSetting'));
    }

   

    /**
     * Store a newly created resource in storage.
     */
    public function store(OfficeSettingUpdateRequest $request)
    {
        $officeSetting=OfficeSetting::latest()->first();
        if(!empty($officeSetting)){
            $officeSetting->update($request->validated());
        }
        else{
           OfficeSetting::create($request->validated());
        }
        return back();
    }
}
   