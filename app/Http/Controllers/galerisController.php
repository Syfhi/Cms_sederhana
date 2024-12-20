<?php

namespace App\Http\Controllers;

use App\Models\galeriModel;
use Illuminate\Http\Request;

class galerisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tampilgaleri=galeriModel::all();
        return view('backend.galeris',compact('tampilgaleri'));
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
                $tambah=new galeriModel();
                $tambah->pict=$request->file('gambarr')->getClientOriginalName();
                $tambah->nama_galeri=$request->nama;
                $tambah->deskripsi_galeri=$request->deskripsi;
                $tambah->save();
                return redirect('galeris')->with('pesan', 'Data berhasil di tambahkan');
            }catch(\Throwable $e){
                return redirect('galeris')->with('pesan', 'Data gagal di tambahkan');
            }
        }else{
            return redirect('galeris')->with('pesan', 'Foto Gagal Upload');
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
                $edit=galeriModel::find($id);
                $edit->pict=$request->file('gambarr')->getClientOriginalName();
                $edit->nama_galeri=$request->nama;
                $edit->deskripsi_galeri=$request->deskripsi;
                $edit->save();
                return redirect('galeris')->with('pesan', 'Data berhasil di edit');
            }catch(\Throwable $e){
                return redirect('galeris')->with('pesan', 'Data gagal di edit');
            }
        }else{
            return redirect('galeris')->with('pesan', 'Foto Gagal Upload');
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
        try{
            $hapus=galeriModel::find($id);
            $hapus->delete();
            return redirect('galeris')->with('pesan', 'Data berhasil di hapus');
        }catch(\Throwable $e){
            return redirect('galeris')->with('pesan', 'Data gagal di hapus');
        }

    }
    
}
