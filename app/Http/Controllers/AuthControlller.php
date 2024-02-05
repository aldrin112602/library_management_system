<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthControlller extends Controller
{
    public function login(Request $request) {
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)) {
            return redirect()->intended('/dashboard');
        }
        return redirect()->back()->withErrors(['error' => 'Invalid email or password']);
    }
}
