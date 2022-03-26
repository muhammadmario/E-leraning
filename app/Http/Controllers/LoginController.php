<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('user.pages.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            if( auth()->user()->role == 1 ){
                return redirect()->intended('/dashboard');
            }   
            elseif( auth()->user()->role == 2 ){
                return redirect()->intended('/dashboard');
            }
            elseif( auth()->user()->role == 3 ){
               return redirect()->intended('/kelas');
             }
            // return redirect()->intended('/kelas');
        }

        return back()->with('loginError', 'Login gagal!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/login ');
    }
}
