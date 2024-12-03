<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth ;


class AuthConrollerNew extends Controller
{
    public function showFormnew(){
     if(Auth::check()){
        return redirect('/dashboard');
     }
     return view('auth.login');
    }

public function loginnew(Request $request){
    $req = $request->only('email','password');
if(Auth::ettempt($req)){
return redirect()->route('dashboard');
}
return back()->withErrors(["email"=>"invalid"]);
}
}
