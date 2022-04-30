<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pages.testimonial.index', ['testimonials'=>Testimonial::latest()->paginate(4)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.testimonial.create');
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
            'slug' => 'required|unique:testimonials',
            'body' => 'required',
            'image'=> 'image|file|max:1024',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('image-testimonial');
        }

        Testimonial::create($validatedData);
           

        return redirect('/dashboard/testimonial')->with('success', 'Testimonial berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        return view('dashboard.pages.testimonial.edit', ['testimonial'=>$testimonial]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $rules =[
            'name'=>'required|max:255',
            'body'=>'required',
            'image'=>'image|file|max:1024',
        ];

        if ($request->slug != $testimonial->slug) {
            $rules['slug'] = 'required|unique:testimonials';
        }

        $validateData = $request->validate($rules);

        if ($request->file('image')) {
            if($testimonial->image){
                Storage::delete($testimonial->image);
            }
            $validateData['image']=$request->file('image')->store('image-testimonial');
        }

        Testimonial::where('id', $testimonial->id)->update($validateData);

        return redirect('/dashboard/testimonial')->with('success', 'Testimonial Berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        if($testimonial->image){
            Storage::delete($testimonial->image);
        }
        Testimonial::destroy($testimonial->id);

        return redirect('/dashboard/testimonial')->with('success', 'Testimonial Berhasil dihapus!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Testimonial::class, 'slug', $request->name);
        return response()->json(['slug'=>$slug]);
    }
}
