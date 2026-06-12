<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaosDBController extends Controller
{
    public function indexKaos()
    {
        // mengambil data dari table kaos
        $kaos = DB::table('kaos')->paginate(10);
        // mengirim data kaos ke view indexkaos
        return view('kaos.indexKaos', ['kaos' => $kaos]);
    }

    // method untuk menampilkan view form tambah_kaos kaos
    public function tambah_kaos()
    {
        // memanggil view tambah_kaos
        return view('kaos.tambah_kaos');
    }

    // method untuk insert data ke table kaos
    public function store_kaos(Request $request)
    {
        // insert data ke table kaos
        DB::table('kaos')->insert([
            'merkkaos'  => $request->merkkaos,
            'stockkaos' => $request->stockkaos,
            'tersedia'    => $request->tersedia
        ]);
        // alihkan halaman ke halaman kaos
        return redirect('/kaos');
    }

    // method untuk edit data kaos
    public function edit_kaos($id)
    {
        // mengambil data kaos berdasarkan id yang dipilih
        $kaos = DB::table('kaos')->where('kodekaos', $id)->get();
        // passing data kaos yang didapat ke view edit_kaos.blade.php
        return view('kaos.edit_kaos', ['kaos' => $kaos]);
    }

    // update data kaos
    public function update_kaos(Request $request)
    {
        // update data kaos
        DB::table('kaos')->where('kodekaos', $request->id)->update([
            'merkkaos'  => $request->merkkaos,
            'stockkaos' => $request->stockkaos,
            'tersedia'    => $request->tersedia
        ]);
        // alihkan halaman ke halaman kaos
        return redirect('/kaos');
    }

    // method untuk hapus data kaos
    public function hapus_kaos($id)
    {
        // menghapus data kaos berdasarkan id yang dipilih
        DB::table('kaos')->where('kodekaos', $id)->delete();
        // alihkan halaman ke halaman kaos
        return redirect('/kaos');
    }

    public function cari_kaos(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table kaos sesuai pencarian
        $kaos = DB::table('kaos')
            ->where('merkkaos', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data kaos ke view indexkaos
        return view('kaos.indexKaos', ['kaos' => $kaos]);
    }
}
