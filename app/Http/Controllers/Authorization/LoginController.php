<?php

namespace App\Http\Controllers\Authorization;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create(){
        return view('auth.login');
    }

    public function login(Request $request){
        if(Auth::check()){
            return redirect()->intended('/');
        }
        $validated = $request->validate([
            'email' => 'required | email',
            'password' => 'required'
        ]);

        if(Auth::attempt($validated)){
            if(Auth::user()->role->name == "admin")
                return redirect()->intended('/adm/');
            return redirect()->intended('/');
        }

        return back()->withErrors('Incorrect email or password');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login.form');
    }
}
