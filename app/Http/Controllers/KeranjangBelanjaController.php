<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangBelanjaController extends Controller
{
    public function index()
    {
        $data = DB::table('keranjangbelanja')->get();
        return view('keranjangbelanja.index', compact('data'));
    }

    public function tambah()
    {
        return view('keranjangbelanja.tambah');
    }

    public function store(Request $request)
    {
        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah'     => $request->Jumlah,
            'Harga'      => $request->Harga,
        ]);
        return redirect()->route('keranjang.index');
    }

    public function edit($id)
    {
        $row = DB::table('keranjangbelanja')->where('ID', $id)->first();
        return view('keranjangbelanja.beli', compact('row'));
    }

    public function update(Request $request, $id)
    {
        DB::table('keranjangbelanja')->where('ID', $id)->update([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah'     => $request->Jumlah,
            'Harga'      => $request->Harga,
        ]);
        return redirect()->route('keranjang.index');
    }

    public function batal($id)
    {
        DB::table('keranjangbelanja')->where('ID', $id)->delete();
        return redirect()->route('keranjang.index');
    }
}
