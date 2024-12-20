<?php

namespace App\Http\Controllers;

use App\Models\ekstraModel;
use Illuminate\Http\Request;

class ekstrasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tampilekstra=ekstraModel::all();
        return view('backend.ekstras', compact('tampilekstra'));
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
        $tambahekstra=new ekstraModel();
        $tambahekstra->nama_ekstra=$request->nama;
        $tambahekstra->deskripsi_ekstra=$request->deskripsi;
        $simpan=$tambahekstra->save();
        if($simpan){
            return redirect('ekstras')->with('pesan','Tambah Data Sukses');
        }else{
            return redirect('ekstras')->with('pesan', 'Tambah Data Gagal dimasukan');
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
        $editekstra=new ekstraModel();
        $editekstra->nama_ekstra=$request->nama;
        $editekstra->deskripsi_ekstra=$request->deskripsi;
        $simpan=$editekstra->save();
        if($simpan){
            return redirect('ekstras')->with('pesan','Edit Data Sukses');
        }else{
            return redirect('ekstras')->with('pesan', 'Edit Data Gagal dimasukan');
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
        $hapusekstra=ekstraModel::find($id);
        $hapus=$hapusekstra->delete();
        if($hapus){
            return redirect('ekstras')->with('pesan','Data Berhasil Dihapus');
        }else{
            return redirect('ekstras')->with('pesan','Data gagal');
        }
    }
}
