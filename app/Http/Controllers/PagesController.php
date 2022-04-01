<?php

namespace App\Http\Controllers;

use App\Models\Category;
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

    public function showKategori(Classroom $classroom, Category $category)
    {
       return view('user.pages.kategori',[
          'classroom'=>$classroom,
          'categories'=>Category::latest()->where('classroom_id', $classroom->id)->paginate(9)
         ]); 
    }

    public function showDaftarMateri(Classroom $classroom, Category $category)
    {
       return view('user.pages.materi'); 
    }
}
