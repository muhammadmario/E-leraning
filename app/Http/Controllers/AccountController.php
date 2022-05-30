<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Validator;

class AccountController extends Controller
{
    public function index()
    {
        return view('dashboard.pages.akun.index',["users"=>User::where('role',3)->orWhere('role', 2)->latest()->paginate(7)]);
    }

    public function destroy(User $user)
    {
        
        User::destroy($user->id);

        return redirect('/dashboard/akun')->with('success', 'Akun Berhasil dihapus!');
    }

    public function edit(User $user)
    {
        return view('dashboard.pages.akun.edit', ["user"=>$user]);
    }

    public function update(Request $request, User $user)
    {
        // $rules = $request->validate([
        //     'name' => 'required|max:255',
        //     'role'=>'nullable',
        //     'password'=> 'required'
        // ]);

        // if($request->username != $user->username){
        //    $rules['username'] = 'required|unique:users|min:5|max:255';
        // }

        // if ($request->email != $user->email) {
        //     $rules['email'] = 'required|unique:users|email:dns';
        // }

        // $validateData = $request->validate($rules);

        ///
        // User::where('id', $user->id)->update($validateData);
        //  $attr = $request->validate([
        //     'name' => ['required'],
        //     'username' => ['required,unique:users'.auth()->id()],
        //     'email'=>['required,unique:users,email:dns'.auth()->id()],
        //     'role'=>['nullable'],
        //     'password'=> ['required']
        //     ]);

        //     User::where('id', $user->id)->update($attr);

        // return redirect('/dashboard/akun')->with('success', 'Akun Berhasil diedit!');
    }
}
