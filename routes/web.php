<?php

use App\Http\Controllers\LatihanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return "Hallo nama saya Livia Dita Eka Puspita";
});

Route::get('/latihan', [LatihanController::class, 'index']);

Route::get('/beranda', [LatihanController::class, 'beranda']);
Route::get('/', [HomepageController::class, 'index']);
Route::get('/about', [HomepageController::class, 'about']);
Route::get('/kontak', [HomepageController::class, 'kontak']);
Route::get('/kategori', [HomepageController::class, 'kategori']);

// Route kategori grup
Route::group(['prefix' => 'admin'], function(){
    Route::get('/', [DashboardController::class, 'index']);
    // route kategori
    Route::resource('kategori', KategoriController::class);

});

// Route group mahasiswa
Route::prefix('/mahasiswa')->group(function () {

    Route::get('/pendaftaran', function (){
        $title = "Halaman Pendaftaran";
        $teks = "INI HALAMAN PENDAFTARAN";

        return view('mahasiswa.index', compact ('title', 'teks'));
    });

    Route::get('/ujian', function (){
        $title = "Halaman Ujian";
        $teks = "INI HALAMAN UJIAN";

        return view('mahasiswa/index', compact('title', 'teks'));
    });

    Route::get('/nilai', function (){
        $title = "Halaman Nilai";
        $teks = "INI HALAMAN NILAI";

        return view('mahasiswa/index', compact('title', 'teks'));
    });

});

// Route::get('/admin', [DashboardController::class, 'index']);
