<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth ;

class AuthController extends Controller
{
    //
    public function showLoginForm()
    {
        if(Auth::check()){
            return redirect('/dashboard');
        }
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials.']);
    }
}
