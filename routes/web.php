<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController ;
use App\Http\Controllers\PegawaiDBController ;
use App\Http\Controllers\SiswaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function () {
    return "<h1>Halo, Selamat datang</h1> di tutorial laravel <b>www.malasngofing.com</b>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('part5', function () {
    return view('pertemuan5');
});

Route::get('tugasweek4', function () {
    return view('tugasweek4');
});

Route::get('tugasweek3', function () {
    return view('tugasweek3p1');
});

Route::get('/page2', function () {
    return view('tugasweek3p2');
});

Route::get('/page3', function () {
    return view('tugasweek3p3');
});

Route::get('index', function () {
    return view('index');
});

Route::get('tugasweek5', function () {
    return view('tugasweek5');
});

Route::get('index2', function () {
    return view('index2');
});

Route::get('template', function () {
    return view('template');
});


Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

Route::get('pegawai', [PegawaiDBController::class, 'index']);

Route::get('/pegawai',[PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah',[PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store',[PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}',[PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update',[PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}',[PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);
Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);

Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');
