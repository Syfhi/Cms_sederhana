<?php

namespace App\Http\Controllers;

use App\Models\beranda;
use App\Models\kontakModel;
use App\Models\komentarModel;
use Illuminate\Http\Request;

class kontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tampilkontak=kontakModel::all();
        $tampilberanda=beranda::first()->get();
        $tampilkomentar=komentarModel::all();
        return view('kontak', compact('tampilkontak','tampilberanda','tampilkomentar'));
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
        $tambahkomentar=new komentarModel();
        $tambahkomentar->nama=$request->name;
        $tambahkomentar->email=$request->email;
        $tambahkomentar->subjek=$request->subjek;
        $tambahkomentar->pesan=$request->pesan;
        $simpan=$tambahkomentar->save();
        if($simpan){
            return redirect('kontak')->with('pesan','Komentar telah masukan');
        }else{
            return redirect('kontak')->with('pesan', 'Komentar Gagal dimasukan');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
