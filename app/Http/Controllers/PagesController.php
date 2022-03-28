<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function showKelasOnHome()
    {
       return view('index',['classes'=>Classroom::latest()->get()]);
    }

    public function showKelas()
    {
       return view('user.pages.classroom',['classes'=>Classroom::all()]);
    }
}
