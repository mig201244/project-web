<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }
 
    public function register(Request $request)
    {

        // echo $request->request->get('name');
        // print_r($request->post());
        //....................................................
        // $data = $request ->all();
        // echo $data['password'];
        // die;
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            // 'password' => 'required|confirmed|min:6',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
        ]);
        // die;
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
 
        return redirect('login')->with('success', 'Registration successful! Please log in.');
    }

}
