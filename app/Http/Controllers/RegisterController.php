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
            'email'=>'required|unique:users',
            'role'=>'nullable',
            'password'=> 'required'
        ]);

        $validated['password']= Hash::make($validated['password']);

        User::create($validated);

      
        return redirect('/dashboard/akun')->with('success', 'Akun berhasil ditambahkan!');        
    }

    // public function edit(User $user)
    // {
    //     return view('dashboard.pages.akun.edit', ["users"=>$user]);
    // }

}
