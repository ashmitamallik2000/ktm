<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Law;
use App\Models\News;
use App\Models\Publication;
use App\Models\Slider;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        // return view('dashboard');
        $slider_count = Slider::count();
        $employee_count = Employee::count();
        $law_count = Law::count();
        $news_count= News::count();
        $publication_count= Publication::count();

        $chartData = collect([
            'Sliders' => $slider_count,
            'Employees' => $employee_count,
            'Laws' => $law_count,
            'News' => $news_count,
            'Publication' => $publication_count,
        ]);

        return view('dashboard', compact('slider_count', 'employee_count', 'law_count', 'news_count','publication_count', 'chartData'));
    }
}
