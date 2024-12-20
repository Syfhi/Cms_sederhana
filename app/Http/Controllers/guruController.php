<?php

namespace App\Http\Controllers;
use App\Models\guruModel;
use Illuminate\Http\Request;

class guruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tampilguru=guruModel::all();
        return view('backend.guru', compact('tampilguru'));
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
                $tambahguru=new guruModel();
                $tambahguru->gambar=$request->file('gambarr')->getClientOriginalName();
                $tambahguru->nama=$request->nama;
                $tambahguru->jabatan=$request->jabatan;
                $tambahguru->deskripsi=$request->deskripsi;
                $tambahguru->save();
                return redirect('guru')->with('pesan', 'Data berhasil di tambahkan');
            }catch(\Throwable $e){
                return redirect('guru')->with('pesan', 'Data gagal di tambahkan');
            }
        }else{
            return redirect('guru')->with('pesan', 'Foto Gagal Upload');
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
                $tambahguru=new guruModel();
                $tambahguru->gambar=$request->file('gambarr')->getClientOriginalName();
                $tambahguru->nama=$request->nama;
                $tambahguru->jabatan=$request->jabatan;
                $tambahguru->deskripsi=$request->deskripsi;
                $tambahguru->save();
                return redirect('guru')->with('pesan', 'Data berhasil di ganti');
            }catch(\Throwable $e){
                return redirect('guru')->with('pesan', 'Data gagal di ganti');
            }
        }else{
            return redirect('guru')->with('pesan', 'Foto Gagal Upload');
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
        $hapusguru=guruModel::find($id);
        $hapus=$hapusguru->delete();
        if($hapus){
            return redirect('guru')->with('pesan','Data Berhasil Dihapus');
        }else{
            return redirect('guru')->with('pesan','Data gagal');
        }
    }
}
