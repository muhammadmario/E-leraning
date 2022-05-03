<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('user.pages.register');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|unique:users|min:5|max:255',
            'email'=>'required|unique:users|email:dns',
            'role'=>'nullable',
            'password'=> 'required'
        ]);

        $validated['password']= Hash::make($validated['password']);

        User::create($validated);

        // if (auth()->user()->role == 1) {
        //     return redirect('/admin/akun')->with('success', 'Akun berhasil di tambahkan!');
        // }
        
        return redirect('/login')->with('success', 'Register telah berhasil');
        
    }
}
