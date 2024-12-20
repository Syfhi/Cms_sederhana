<?php

namespace App\Http\Controllers;

use App\Models\beranda;
use App\Models\kegiatanModel;
use Illuminate\Http\Request;

class kegiatansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tampilkegiatan=kegiatanModel::all();
        return view('backend.kegiatan', compact('tampilkegiatan'));
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
        if($request->file('gambarr')->move('gambar/',$request->file('gambarr')->getClientOriginalName())) {
            try{
                $tambahkegiatan=new kegiatanModel();
                $tambahkegiatan->gambar=$request->file('gambarr')->getClientOriginalName();
                $tambahkegiatan->nama_kegiatan=$request->nama;
                $tambahkegiatan->deskripsi_kegiatan=$request->deskripsi;
                $tambahkegiatan->save();
                return redirect('kegiatans')->with('pesan', 'Data berhasil di Tambah');
            }catch(\Throwable $e){
                return redirect('kegiatans')->with('pesan', 'Data gagal di Tambah');
            }
        }else{
            return redirect('kegiatans')->with('pesan', 'Foto Gagal Upload');
        }
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
    public function update(Request $request, $id)
    {
        if($request->file('gambarr')->move('gambar/',$request->file('gambarr')->getClientOriginalName())) {
            try{
                $tambahkegiatan=kegiatanModel::find($id);
                $tambahkegiatan->gambar=$request->file('gambarr')->getClientOriginalName();
                $tambahkegiatan->nama_kegiatan=$request->nama;
                $tambahkegiatan->deskripsi_kegiatan=$request->deskripsi;
                $tambahkegiatan->save();
                return redirect('kegiatans')->with('pesan', 'Data berhasil di ganti');
            }catch(\Throwable $e){
                return redirect('kegiatans')->with('pesan', 'Data gagal di ganti');
            }
        }else{
            return redirect('kegiatans')->with('pesan', 'Foto Gagal Upload');
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
        $hapuskegiatan=kegiatanModel::find($id);
        $hapus=$hapuskegiatan->delete();
        if($hapus){
            return redirect('kegiatans')->with('pesan','Data Berhasil Dihapus');
        }else{
            return redirect('kegiatans')->with('pesan','Data gagal');
        }
    }
}
