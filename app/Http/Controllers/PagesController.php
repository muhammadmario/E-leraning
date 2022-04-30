<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Classroom;
use App\Models\Gallery;
use App\Models\Lesson;
use App\Models\Testimonial;
use App\Models\Videohomepage;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function showKelasOnHome()
    {
       return view('index',[
          'classes'=>Classroom::latest()->get(),
          'testimonials'=>Testimonial::latest()->get(),
          'videohomepage'=>Videohomepage::all()
         ]);
    }

    public function showKelas()
    {
      
       return view('user.pages.classroom',['classes'=>Classroom::latest()->filter()->get()]);
    }

    public function showKategori(Classroom $classroom, Category $category)
    {
       return view('user.pages.kategori',[
          'classroom'=>$classroom, //single kelas dari kelas yg di pilih
         //  'categories'=>Category::with('classroom')->latest()->where('classroom_id', $classroom->id)->paginate(9)
          'categories'=>$classroom->category
         ]);   
    }

    public function showDaftarMateri(Classroom $classroom, Category $category)
    {
      return view('user.pages.materi',[
         'category'=>$category, //single kategori dari kategori yang dipilih
         'classroom'=>$category->classroom->slug,
         'lessons'=>$category->lesson
      ]);
    }

    public function showDetailMateri(Classroom $classroom, Category $category, Lesson $lesson)
    {
      return view('user.pages.detail-materi',[
         'lesson'=>$lesson, //single materi dari materi yang dipilih
         'lessons'=>$lesson->latest()->take(5)->get()
      ]);
    }

    public function showGallery(Gallery $gallery)
    {
      return view('user.pages.galeri',[
         'galleries'=>Gallery::latest()->get()
      ]);
    }
}
