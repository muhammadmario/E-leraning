<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pages.kelas.index',['classrooms'=>Classroom::latest()->paginate(4)]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.kelas.create');

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
            'slug' => 'required|unique:classrooms',
            'image'=> 'image|file|max:1024'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('image-classroom');
        }

        Classroom::create($validatedData);

        return redirect('/dashboard/kelas')->with('success', 'Kelas berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function show(Classroom $classroom)
    {
        return view('dashboard.pages.kelas.show', ['classroom'=>$classroom]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function edit(Classroom $classroom)
    {
        return view('dashboard.pages.kelas.edit', ['classroom'=>$classroom]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Classroom $classroom)
    {
        $rules =[
            'name'=>'required|max:255',
            'image'=>'image|file|max:2048',
        ];

        if ($request->slug != $classroom->slug) {
            $rules['slug'] = 'required|unique:classrooms';
        }

        $validateData = $request->validate($rules);

        if ($request->file('image')) {
            if($classroom->image){
                Storage::delete($classroom->image);
            }
            $validateData['image']=$request->file('image')->store('image-classroom');
        }

        Classroom::where('id', $classroom->id)->update($validateData);

        return redirect('/dashboard/kelas')->with('success', 'Kelas Berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classroom $classroom)
    {
        if($classroom->image){
            Storage::delete($classroom->image);
        }
        Classroom::destroy($classroom->id);

        return redirect('/dashboard/kelas')->with('success', 'Kelas Berhasil dihapus!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Classroom::class, 'slug', $request->name);
        return response()->json(['slug'=>$slug]);
    }
}
