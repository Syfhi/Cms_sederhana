<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\beranda;
use App\Models\kegiatanModel;
use App\Models\guruModel;
use App\Models\ekstraModel;
use App\Models\carouselModel;


class berandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $tampilberanda=beranda::all();
        $tampilkegiatan=kegiatanModel::all();
        $tampilguru=guruModel::all();
        $tampilekstra=ekstraModel::all();
        $tampilcarousel=carouselModel::all();
        return view('beranda', compact('tampilberanda','tampilkegiatan','tampilguru','tampilekstra','tampilcarousel'));
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
     * @param  \App\Models\beranda  $beranda
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\beranda  $beranda
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\beranda  $beranda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\beranda  $beranda
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
