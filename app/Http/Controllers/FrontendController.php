<?php

namespace App\Http\Controllers;

use App\Models\Employee;
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
        return view('frontend.pages.about');
    }
    public function contact(){
        return view('frontend.pages.contact');
    }
    public function candidate(){
        return view('frontend.pages.candidate');
    }
    public function law(){
        return view('frontend.pages.law');
    }
    public function link(){
        $links=Link::all();
        return view('frontend.pages.link',compact('links'));
    }
    
}
