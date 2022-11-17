<?php

use App\Http\Controllers\LatihanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\LaporanController;

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
Route::get('/admin', [DashboardController::class, 'index']);

// Route kategori grup
Route::group(['prefix' => 'admin'], function(){
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/kategori', [KategoriController::class, 'index'])->name('admin.kategori');
    Route::get('/transaksi', [TransaksiController::class, 'index'])->name('admin.transaksi');
    Route::get('/laporan', [LaporanController::class, 'index'])->name('admin.laporan');

    Route::group(['prefix' => 'kategori'], function(){
        Route::get('/', [KategoriController::class, 'index'])->name('admin.kategori');
        Route::get('/create', [KategoriController::class, 'create'])->name('create.kategori');
    });
});

// Route group mahasiswa
Route::prefix('/mahasiswa')->group(function () {

    Route::get('/pendaftaran', function (){
        $title = "Halaman Pendaftaran";
        $teks = "INI HALAMAN PENDAFTARAN";

        return view('mahasiswa.index', compact ('title', 'teks'));
    })->name('mahasiswa.pendaftaran');

    Route::get('/ujian', function (){
        $title = "Halaman Ujian";
        $teks = "INI HALAMAN UJIAN";

        return view('mahasiswa/index', compact('title', 'teks'));
    })->name('mahasiswa.ujian');

    Route::get('/nilai', function (){
        $title = "Halaman Nilai";
        $teks = "INI HALAMAN NILAI";

        return view('mahasiswa/index', compact('title', 'teks'));
    })->name('mahasiswa.nilai');

});


