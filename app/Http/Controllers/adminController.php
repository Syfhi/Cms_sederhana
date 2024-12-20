<?php

namespace App\Http\Controllers;

use App\Models\beranda;
use App\Models\ekstraModel;
use App\Models\guruModel;
use App\Models\kegiatanModel;
use App\Models\galeriModel;
use App\Models\komentarModel;
use Illuminate\Http\Request;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tampilberanda=beranda::all();
        return view('backend.admin', compact('tampilberanda'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update (Request $request, $id)
    {   $file = $request->file('gambarr');
        $image = $request->file('gambarr')->getClientOriginalName();
        $upload = 'gambar';
        $unggah=$file->move($upload,$file->getClientOriginalName());
        if($unggah){
        $editberanda=beranda::find($id);
        $editberanda->pict=$image;
        $editberanda->judul_beranda=$request->judul;
        $editberanda->nama_beranda=$request->nama;
        $editberanda->deskripsi_beranda=$request->deskripsi;
        $editberanda->lokasi=$request->lokasi;
        $editberanda->instagram=$request->instagram;
        $editberanda->youtube=$request->youtube;
        $editberanda->facebook=$request->facebook;
        $editberanda->tentang=$request->tentang;
        $simpanberanda=$editberanda->save();
        if($simpanberanda){
            return redirect('admin')->with('pesan','Edit Sukses');
        }else{
            return redirect('admin')->with('pesan','Edit gagal');
        }

    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapusberanda=beranda::find($id);
        $hapus=$hapusberanda->delete();
        if($hapus){
            return redirect('admin')->with('pesan','Data Berhasil Dihapus');
        }else{
            return redirect('admin')->with('pesan','Data gagal');
        }

        /* $hapusfooter=footerModel::find($id);
        $hapus=$hapusfooter->delete();
        if($hapus){
            return redirect('admin')->with('pesan','Data Berhasil Dihapus');
        }else{
            return redirect('admin')->with('pesan','Data gagal');
        } */
    }

    public function dashboard(){
        $tampilekstra=ekstraModel::all();
        $tampilkegiatan=kegiatanModel::all();
        $tampilguru=guruModel::all();
        $tampilgaleri=galeriModel::all();
        $tampilkomentar=komentarModel::all();
        return view('backend.dashboard',compact('tampilekstra','tampilkegiatan','tampilguru','tampilgaleri','tampilkomentar'));
    }
}
