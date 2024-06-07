<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class AuthController extends Controller
{
    public function loginPage()
    {
        return view('admin.auth.login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:7'],

        ]);

        if (auth()->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            return redirect('admin/dashboard');
        } else {
            return back()->with('error', 'user ceredential not matched');
        }
    }
}
