<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\KeranjangBelanjaController;
use App\Http\Controllers\NilaiKuliahController;
use App\Http\Controllers\HardDiskController;

Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari',[PegawaiDBController::class, 'cari']);

Route::get('/harddisk', [HardDiskController::class, 'index']);

Route::get('/keranjangbelanja', [KeranjangBelanjaController::class, 'index']);
Route::get('/keranjangbelanja/tambah', [KeranjangBelanjaController::class, 'tambah']);
Route::post('/keranjangbelanja/beli', [KeranjangBelanjaController::class, 'beli']);
Route::get('/keranjangbelanja/batal/{id}', [KeranjangBelanjaController::class, 'batal']);

Route::get('/nilaikuliah', [NilaiKuliahController::class, 'index']);
Route::get('/nilaikuliah/tambah', [NilaiKuliahController::class, 'tambah']);

Route::get('/', function () {
    return view('menu');
});
Route::get('/pertemuan1', function () {
    return view('pertemuan1');
});
Route::get('/pertemuan2', function () {
    return view('pertemuan2');
});
Route::get('/pertemuan3', function () {
    return view('pertemuan3');
});
Route::get('/pertemuan4', function () {
    return view('pertemuan4');
});
Route::get('/pertemuan5', function () {
    return view('pertemuan5');
});
Route::get('/pertemuan6', function () {
    return view('pertemuan6');
});

