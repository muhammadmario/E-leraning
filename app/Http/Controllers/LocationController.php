<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Location $location)
    {
        return view("user.pages.lokasi", ['NAD'=>$location->where('provinsi', "NANGGROE ACEH DARUSSALAM")->get(),
        'SUMUT'=>$location->where('provinsi', "SUMATERA UTARA")->get(),
        'RIAU'=>$location->where('provinsi', "RIAU")->get(),
        'KEPULAUANRIAU'=>$location->where('provinsi', "KEPULAUAN RIAU")->get(),
        'BANGKABELITUNG'=>$location->where('provinsi', "BANGKA BELITUNG")->get(),
        'SUMBAR'=>$location->where('provinsi', "SUMATERA BARAT")->get(),
        'JAMBI'=>$location->where('provinsi', "JAMBI")->get(),
        'SUMSEL'=>$location->where('provinsi', "SUMATERA SELATAN")->get(),
        'BENGKULU'=>$location->where('provinsi', "BENGKULU")->get(),
        'LAMPUNG'=>$location->where('provinsi', "LAMPUNG")->get(),
        'DKIJAKARTA'=>$location->where('provinsi', "DKI JAKARTA")->get(),
        'BANTEN'=>$location->where('provinsi', "BANTEN")->get(),
        'JABAR'=>$location->where('provinsi', "JAWA BARAT")->get(),
        'JATENG'=>$location->where('provinsi', "JAWA TENGAH")->get(),
        'DIY'=>$location->where('provinsi', "DI YOGYAKARTA")->get(),
        'JATIM'=>$location->where('provinsi', "JAWA TIMUR")->get(),
        'BALI'=>$location->where('provinsi', "BALI")->get(),
        'NTB'=>$location->where('provinsi', "NUSA TENGGARA BARAT")->get(),
        'NTT'=>$location->where('provinsi', "NUSA TENGGARA TIMUR")->get(),
        'KALBAR'=>$location->where('provinsi', "KALIMANTAN BARAT")->get(),
        'KALSEL'=>$location->where('provinsi', "KALIMANTAN SELATAN")->get(),
        'KALTENG'=>$location->where('provinsi', "KALIMANTAN TENGAH")->get(),
        'KALTIM'=>$location->where('provinsi', "KALIMANTAN TIMUR")->get(),
        'KALUT'=>$location->where('provinsi', "KALIMANTAN UTARA")->get(),
        'SULBAR'=>$location->where('provinsi', "SULAWESI BARAT")->get(),
        'SULUT'=>$location->where('provinsi', "SULAWESI UTARA")->get(),
        'SULSEL'=>$location->where('provinsi', "SULAWESI SELATAN")->get(),
        'SULTENG'=>$location->where('provinsi', "SULAWESI TENGAH")->get(),
        'SULTENGG'=>$location->where('provinsi', "SULAWESI TENGGARA")->get(),
        'GORONTALO'=>$location->where('provinsi', "GORONTALO")->get(),
        'MALUKU'=>$location->where('provinsi', "MALUKU")->get(),
        'MALUT'=>$location->where('provinsi', "MALUKU UTARA")->get(),
        'PAPUA'=>$location->where('provinsi', "PAPUA")->get(),
        'PAPUABARAT'=>$location->where('provinsi', "PAPUA BARAT")->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function edit(Location $location)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Location $location)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location)
    {
        //
    }
}
