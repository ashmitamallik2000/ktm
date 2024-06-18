<?php

namespace App\Http\Controllers;

use App\Http\Requests\Contact\ContactStoreRequest;
use App\Models\Contact;
use App\Models\Employee;
use App\Models\Introduction;
use App\Models\Law;
use App\Models\Link;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
      
        $sliders=Slider::all();
        $employees=Employee::all();
        return view('frontend.index',compact('sliders','employees'));
    }
    public function about(){
        $introductions=Introduction::all();
        return view('frontend.pages.about',compact('introductions'));
    }
    public function contact(){

        return view('frontend.pages.contact');
    }
    public function candidate(){
        $search = request('search');
        $employees=Employee::when($search, function ($query, $search) {
            $query->where('name_en', 'like', "%{$search}%")
            ->orWhere('name', 'like', "%{$search}%");
        })->get();
        return view('frontend.pages.candidate',compact('employees'));
    }
    public function law(){
        $laws=Law::all();
        return view('frontend.pages.law',compact('laws'));
    }
    public function lawDetail(Law $law){
       
        return view('frontend.pages.lawDetails',compact('law'));
    }
    public function link(){
        $links=Link::all();
        return view('frontend.pages.link',compact('links'));
    }
    public function feedBack(ContactStoreRequest $request){
        // dd($request->all());
        Contact::create($request->validated());
        toast("Feedback sent successfully");
        return back();
    }
    
}
