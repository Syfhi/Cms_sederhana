<?php

namespace App\Http\Controllers;

use App\Models\kegiatanModel;
use App\Models\beranda;
use Illuminate\Http\Request;

class kegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tampilkegiatan=kegiatanModel::all();
        $tampilberanda=beranda::first()->get();
        return view('kegiatans', compact('tampilkegiatan','tampilberanda'));
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
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\kegiatanModel  $kegiatanModel
     * @return \Illuminate\Http\Response
     */
    public function show(kegiatanModel $kegiatanModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\kegiatanModel  $kegiatanModel
     * @return \Illuminate\Http\Response
     */
    public function edit(kegiatanModel $kegiatanModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kegiatanModel  $kegiatanModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $editkegiatan=kegiatanModel::find($id);
        $editkegiatan->nama_kegiatan=$request->nama;
        $editkegiatan->deskripsi_kegiatan=$request->deskripsi;
        $simpankegiatan=$editkegiatan->save();
        if($simpankegiatan){
            return redirect('kegiatans')->with('pesan','Edit Sukses');
        }else{
            return redirect('kegiatans')->with('pesan','Edit gagal');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\kegiatanModel  $kegiatanModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }
}
