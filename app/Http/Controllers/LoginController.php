<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('name', 'password');
    
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/')->with('success', 'login successful!.');
        }
    
        return redirect('login')->with('error', 'Invalid credentials. Please try again.');

        session()->flash('message','login successful!. ');
    }

    public function showLoginForm()
    {
        return view('login');
    }
}
