<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiDBController;

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


Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

Route::get('pegawai', [PegawaiDBController::class, 'index']);
