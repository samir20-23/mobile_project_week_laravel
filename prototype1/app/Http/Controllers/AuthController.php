<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function formLogin()
    {
        if (Auth::check()) {
            return redirect("/dashboard");
        }
        return view("layouts.app");
    }

    public function login(Request $request)
    {
        $req = $request->only("email", "password");
        if (Auth::attempt($req)) {
            return redirect()->route("/dashboard");
        }
        return back()->withErrors(["email" => "invalid"]);
    }
}
