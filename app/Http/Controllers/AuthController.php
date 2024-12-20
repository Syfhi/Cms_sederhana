<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\beranda;
use App\Models\ekstraModel;
use App\Models\galeriModel;
use App\Models\guruModel;
use App\Models\kegiatanModel;
use App\Models\profilModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function ekstras() 
    {
        $lihatberanda=beranda::all();
        $ambiluser=Auth::User();
        $edituser=User::where('username','=',$ambiluser->username)->get();
        $editprofile=User::where('username','=',$ambiluser->username)->get();
        return view('ekstras', compact('lihatberanda','edituser','editprofil'));
        
    }
    public function admin() 
    {
        $lihatberanda=beranda::all();
        $ambiluser=Auth::User();
        $edituser=User::where('username','=',$ambiluser->username)->get();
        $editprofile=User::where('username','=',$ambiluser->username)->get();
        return view('admin', compact('lihatberanda','edituser','editprofil'));
        
    }
    public function galeris() 
    {
        $lihatberanda=beranda::all();
        $ambiluser=Auth::User();
        $edituser=User::where('username','=',$ambiluser->username)->get();
        $editprofile=User::where('username','=',$ambiluser->username)->get();
        return view('galeris', compact('lihatberanda','edituser','editprofil'));
        
    }
    public function guru() 
    {
        $lihatberanda=beranda::all();
        $ambiluser=Auth::User();
        $edituser=User::where('username','=',$ambiluser->username)->get();
        $editprofile=User::where('username','=',$ambiluser->username)->get();
        return view('guru', compact('lihatberanda','edituser','editprofil'));
        
    }
    public function kegiatan() 
    {
        $lihatberanda=beranda::all();
        $ambiluser=Auth::User();
        $edituser=User::where('username','=',$ambiluser->username)->get();
        $editprofile=User::where('username','=',$ambiluser->username)->get();
        return view('kegiatan', compact('lihatberanda','edituser','editprofil'));
        
    }
    public function profile() 
    {
        $lihatberanda=beranda::all();
        $ambiluser=Auth::User();
        $edituser=User::where('username','=',$ambiluser->username)->get();
        $editprofile=User::where('username','=',$ambiluser->username)->get();
        return view('profile', compact('lihatberanda','edituser','editprofil'));
        
    }

    Public function cekenkripsi()
    {
        $password_hash=Hash::make("admin");
        Return view('login', compact('password_hash'));
    }
    
    
    public function ceklogin()
    {
        if(Auth::check()) {
            return redirect('admin');
        }
        return view('backend.login');
    }
    
    public function login(Request $request)
    {
	If(empty($request->username) || empty($request->password)) {
		return redirect('login')->with('pesan','Pesan gagal');
	    } else {
		$akun=[
			'username' => $request->username,
			'password' => $request->password
		];
		Auth::attempt($akun);
        if(Auth::check()) {
            return redirect('admin')->with('pesansukses','Berhasil masuk');
        }else{
            return redirect('login')->with('pesanlogin','Akun tidak terdaftar');
        }
        }
    }

    public function logout()
    {
        Auth::logout();
        return view('backend.login');
    }


}
