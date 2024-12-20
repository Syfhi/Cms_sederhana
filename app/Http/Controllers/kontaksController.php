<?php

namespace App\Http\Controllers;

use App\Models\kontakModel;
use Illuminate\Http\Request;

class kontaksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tampilkontak=kontakModel::all();
        return view('backend.kontaks', compact('tampilkontak'));
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
        $editkontak=kontakModel::find($id);
        $editkontak->lokasi=$request->lokasi;
        $editkontak->email=$request->email;
        $editkontak->tlpn=$request->tlpn;
        $editkontak->website=$request->website;
        $simpan=$editkontak->save();
        if($simpan){
            return redirect('kontaks')->with('pesan','Edit Data Sukses');
        }else{
            return redirect('kontaks')->with('pesan', 'Edit Data Gagal dimasukan');
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
        //
    }
}
