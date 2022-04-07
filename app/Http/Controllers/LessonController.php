<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\Category;
use App\Models\Classroom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('dashboard.pages.materi.index', ['lessons'=>Lesson::latest()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( Category $category)
    {
        return view('dashboard.pages.materi.create', ['categories'=>$category->orderBy('name')->get()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:categories',
            'body' => 'required',
            'image'=> 'image|file|max:1024',
            'video'=> 'required|mimetypes:video/x-ms-asf,video/x-flv,video/mp4,application/x-mpegURL,video/MP2T,video/3gpp,video/quicktime,video/x-msvideo,video/x-ms-wmv,video/avi|max:128000',
            'category_id' => 'required',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('image-category');
        }

        if ($request->file('video')) {
            $validatedData['video'] = $request->file('video')->store('lesson-video');
        }

        Lesson::create($validatedData);

        return redirect('/dashboard/materi')->with('success', 'Materi berhasil ditambahkan!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function show(Lesson $lesson)
    {
        return view('dashboard.pages.materi.show', ['lesson'=>$lesson]);
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function edit(Lesson $lesson, Category $category)
    {
        return view('dashboard.pages.materi.edit', ['lesson'=>$lesson, 'categories'=>$category->all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lesson $lesson)
    {
        $rules =[
            'name' => 'required|max:255',
            'body' => 'required',
            'image'=> 'image|file|max:1024',
            'video'=> 'mimetypes:video/x-ms-asf,video/x-flv,video/mp4,application/x-mpegURL,video/MP2T,video/3gpp,video/quicktime,video/x-msvideo,video/x-ms-wmv,video/avi|max:128000',
            'category_id' => 'required',
        ];

        if ($request->slug != $lesson->slug) {
            $rules['slug'] = 'required|unique:lessons';
        }

        $validateData = $request->validate($rules);

        if ($request->file('image')) {
            if($lesson->image){
                Storage::delete($lesson->image);
            }
            $validateData['image']=$request->file('image')->store('image-category');
        }

        if ($request->file('video')) {
            if($lesson->video){
                Storage::delete($lesson->video);
            }
            $validateData['video']=$request->file('video')->store('lesson-video');
        }

        Lesson::where('id', $lesson->id)->update($validateData);

        return redirect('/dashboard/materi')->with('success', 'Materi Berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lesson $lesson)
    {
        if($lesson->image){
            Storage::delete($lesson->image);
        }
        if($lesson->video){
            Storage::delete($lesson->video);
        }
        Lesson::destroy($lesson->id);

        return redirect('/dashboard/materi')->with('success', 'Materi Berhasil dihapus!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Lesson::class, 'slug', $request->name);
        return response()->json(['slug'=>$slug]);
    }
}
