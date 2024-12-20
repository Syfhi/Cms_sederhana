<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class memberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tampiluser=User::all();
        return view('backend.regis', compact('tampiluser'));
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
        if(empty($request->username) || empty($request->password) || empty($request->password2)) {
            return redirect('regis')->with('pesan','Form wajib diisi');
        } else if($request->password != $request->password2) {
            return redirect('regis')->with('pesan','Password tidak sama');
        } else {
            try {
                $tambahuser=new User();
                $tambahuser->username=$request->username;
                $tambahuser->password= Hash::make($request->password);
                $tambahuser->save();
                    return redirect('regis')->with('pesan','Tambah Data Sukses');
            } catch (\Throwable $th) {
                return redirect('regis')->with('pesan', 'Tambah Data Gagal dimasukan');
            }
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
        if(empty($request->username) || empty($request->password) || empty($request->password2)) {
            return redirect('regis')->with('pesan','Form wajib diisi');
        } else if($request->password != $request->password2) {
            return redirect('regis')->with('pesan','Password tidak sama');
        } else {
            try {
                $tambahuser=User::find($id);
                $tambahuser->username=$request->username;
                $tambahuser->password= Hash::make($request->password);
                $simpan=$tambahuser->save();
                if($simpan){
                    return redirect('regis')->with('pesan','Edit Data Sukses');
                }else{
                    return redirect('regis')->with('pesan', 'Edit Data Gagal');
                }
            } catch (\Throwable $th) {
                return redirect('regis')->with('pesan', 'Edit Data Gagal dimasukan');
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
        try {
            $admin=User::find($id);
            $admin->delete();
            return redirect('regis')->with('pesan','Admin telah dihapus');
        } catch (\Throwable $th) {
            return redirect('regis')->with('pesan','Admin gagal dihapus');
        }
    
    }
}
