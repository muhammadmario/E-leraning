<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        return view('dashboard.pages.akun.index',["users"=>User::where('role',3)->orWhere('role', 2)->latest()->get()]);
    }

    public function destroy(User $user)
    {
        
        User::destroy($user->id);

        return redirect('/dashboard/akun')->with('success', 'Akun Berhasil dihapus!');
    }
}
