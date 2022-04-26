<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pages.gallery.index', ['galleries'=>Gallery::latest()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.gallery.create');
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
            'slug' => 'required|unique:galleries',
            'image'=> 'image|file|max:1024',
            'body' => 'required'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('gallery-image');
        }

        Gallery::create($validatedData);

        return redirect('/dashboard/gallery')->with('success', 'Kelas berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        return view('dashboard.pages.gallery.edit',['gallery'=>$gallery]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        return view('dashboard.pages.gallery.edit',['gallery'=>$gallery]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        $rules =[
            'name'=>'required|max:255',
            'body'=>'required',
            'image'=>'image|file|max:2048',
        ];

        if ($request->slug != $gallery->slug) {
            $rules['slug'] = 'required|unique:galleries';
        }

        $validateData = $request->validate($rules);

        if ($request->file('image')) {
            if($gallery->image){
                Storage::delete($gallery->image);
            }
            $validateData['image']=$request->file('image')->store('gallery-image');
        }

        Gallery::where('id', $gallery->id)->update($validateData);

        return redirect('/dashboard/gallery')->with('success', 'Galeri Berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        if($gallery->image){
            Storage::delete($gallery->image);
        }
        Gallery::destroy($gallery->id);

        return redirect('/dashboard/gallery')->with('success', 'Gallery Berhasil dihapus!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Gallery::class, 'slug', $request->name);
        return response()->json(['slug'=>$slug]);
    }
}
