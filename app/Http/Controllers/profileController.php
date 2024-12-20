<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profilModel;

class profileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tampilprofil=profilModel::all();
        return view('backend.profile', compact('tampilprofil'));
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
        $tambahprofil=new profilModel();
        $tambahprofil->nama=$request->nama;
        $tambahprofil->alamat=$request->alamat;
        $tambahprofil->kota=$request->kota;
        $tambahprofil->provinsi=$request->provinsi;
        $tambahprofil->website=$request->website;
        $simpan=$tambahprofil->save();
        if($simpan){
            return redirect('profile')->with('pesan','Tambah Data Sukses');
        }else{
            return redirect('profile')->with('pesan', 'Tambah Data Gagal dimasukan');
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
        $editprofil=profilModel::find($id);
        $editprofil->nama=$request->nama;
        $editprofil->alamat=$request->alamat;
        $editprofil->kota=$request->kota;
        $editprofil->provinsi=$request->provinsi;
        $editprofil->website=$request->website;
        $simpan=$editprofil->save();
        if($simpan){
            return redirect('profile')->with('pesan','Edit Data Sukses');
        }else{
            return redirect('profile')->with('pesan', 'Edit Data Gagal dimasukan');
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
        $hapusprofil=profilModel::find($id);
        $hapus=$hapusprofil->delete();
        if($hapus){
            return redirect('profile')->with('pesan','Data Berhasil Dihapus');
        }else{
            return redirect('profile')->with('pesan','Data gagal');
        }
    }
}
