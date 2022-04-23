<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videohomepage;
use Illuminate\Support\Facades\Storage;

class VideohomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pages.video-homepage.index',['videohomepages'=>Videohomepage::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Videohomepage $videohomepage)
    {
        return view('dashboard.pages.video-homepage.create',['videohomepage'=>$videohomepage]);
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
            'video'=> 'required|mimetypes:video/x-ms-asf,video/x-flv,video/mp4,application/x-mpegURL,video/MP2T,video/3gpp,video/quicktime,video/x-msvideo,video/x-ms-wmv,video/avi|max:128000',
        ]);

        if ($request->file('video')) {
            $validatedData['video'] = $request->file('video')->store('lesson-video');
        }

        Videohomepage::create($validatedData);

        return redirect('/dashboard/video-homepage')->with('success', 'Video berhasil ditambahkan!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Videohomepage  $videohomepage
     * @return \Illuminate\Http\Response
     */
    public function show(Videohomepage $videohomepage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Videohomepage  $videohomepage
     * @return \Illuminate\Http\Response
     */
    public function edit(Videohomepage $videohomepage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Videohomepage  $videohomepage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Videohomepage $videohomepage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Videohomepage  $videohomepage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Videohomepage $videohomepage, $id)
    {
        if($videohomepage->video){
            Storage::delete($videohomepage->video);
        }
       
        Videohomepage::destroy($id);

        return redirect('/dashboard/video-homepage')->with('success', 'video Berhasil dihapus!');
    }
}
