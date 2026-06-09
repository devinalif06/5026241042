<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaosDBController extends Controller
{
    public function indexKaos()
    {
        $kaos = DB::table('kaos')->paginate(10);
        // DIUBAH: ditambahkan 'kaos.' di depan nama view
        return view('kaos.indexKaos', ['kaos' => $kaos]);
    }

    public function tambah_kaos()
    {
        // DIUBAH: ditambahkan 'kaos.' di depan nama view
        return view('kaos.tambah_kaos');
    }

    public function store_kaos(Request $request)
    {
        DB::table('kaos')->insert([
            'merkkaos'  => $request->merkkaos,
            'stockkaos' => $request->stockkaos,
            'tersedia'  => $request->tersedia
        ]);
        return redirect('/kaos');
    }

    public function edit_kaos($id)
    {
        $kaos = DB::table('kaos')->where('kodekaos', $id)->get();
        // DIUBAH: ditambahkan 'kaos.' di depan nama view
        return view('kaos.edit_kaos', ['kaos' => $kaos]);
    }

    public function update_kaos(Request $request)
    {
        DB::table('kaos')->where('kodekaos', $request->id)->update([
            'merkkaos'  => $request->merkkaos,
            'stockkaos' => $request->stockkaos,
            'tersedia'  => $request->tersedia
        ]);
        return redirect('/kaos');
    }

    public function hapus_kaos($id)
    {
        DB::table('kaos')->where('kodekaos', $id)->delete();
        return redirect('/kaos');
    }

    public function cari_kaos(Request $request)
    {
        $cari = $request->cari;
        $kaos = DB::table('kaos')
            ->where('merkkaos', 'like', "%" . $cari . "%")
            ->paginate();

        // DIUBAH: ditambahkan 'kaos.' di depan nama view
        return view('kaos.indexKaos', ['kaos' => $kaos]);
    }
}
