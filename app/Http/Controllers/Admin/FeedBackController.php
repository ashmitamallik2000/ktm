<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class FeedBackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $feedbacks=Contact::all();
        return view('admin.feedback.index',compact('feedbacks'));
    }

    
    /**
     * Update the specified resource in storage.
     */
    public function show(Contact $feedback)
    {
        return view('admin.feedback.show',compact('feedback'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $feedback)
    {
        $feedback->delete();
        return redirect()->route('admin.feedback.index');
    }
}
