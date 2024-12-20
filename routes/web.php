<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [berandaController::class, 'index']);

Route::resource('guru', guruController::class);
Route::resource('ekstra',ekstraController::class);
Route::resource('beranda', berandaController::class);
Route::resource('galeri',galeriController::class);
Route::resource('kegiatan',kegiatanController::class);
Route::resource('profil',profilController::class);
Route::resource('kontak',kontakController::class);



Route::get('login',[AuthController::class, 'ceklogin'])->name('login');
Route::post('loginakun',[AuthController::class, 'login']);

Route::group(['middleware'=>'auth'], function() {  
    Route::get('dashboard',[adminController::class, 'dashboard']);
    Route::resource('ekstras',ekstrasController::class);
    Route::resource('admin',adminController::class);
    Route::resource('galeris',galerisController::class);
    Route::resource('kegiatans',kegiatansController::class);
    Route::resource('regis',memberController::class);
    Route::resource('komentar',komentarController::class);
    Route::resource('kontaks',kontaksController::class);
    Route::resource('profile',profileController::class);
    Route::resource('carousel',carouselController::class);

    Route::get('logout', [AuthController::class, 'logout']);
});

