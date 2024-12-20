<?php

namespace App\Http\Controllers;

use App\Models\carouselModel;
use Illuminate\Http\Request;

class carouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tampilcarousel=carouselModel::all();
        return view('backend.carousel', compact('tampilcarousel'));
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
      //      try{
                $tambah=carouselModel::find($id);
                $tambah->gambar=$request->file('gambarr')->getClientOriginalName();   
                $tambah->save();
                return redirect('carousel')->with('pesan', 'Data berhasil di tambahkan');
       //     }catch(\Throwable $e){
                return redirect('carousel')->with('pesan', 'Data gagal di tambahkan');
     //       }
        }else{
            return redirect('carousel')->with('pesan', 'Foto Gagal Upload');
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
        $hapuscarousel=carouselModel::find($id);
        $hapus=$hapuscarousel->delete();
        if($hapus){
            return redirect('carousel')->with('pesan','Data Berhasil Dihapus');
        }else{
            return redirect('carousel')->with('pesan','Data gagal');
        }
    }
}
