<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaikuliahController extends Controller
{
    public function index()
    {
        // Mengambil semua data
        $data = DB::table('nilaikuliah')->get();

        foreach ($data as $row) {
            $na = $row->NilaiAngka;

            // Logika Nilai Huruf
            if ($na <= 40) {
                $row->NilaiHuruf = 'D';
            } elseif ($na <= 60) {
                $row->NilaiHuruf = 'C';
            } elseif ($na <= 80) {
                $row->NilaiHuruf = 'B';
            } else {
                $row->NilaiHuruf = 'A';
            }

            // Hitung Bobot
            $row->Bobot = $na * $row->SKS;
        }

        // Mengirim data ke view index dengan menggunakan layout template
        return view('nilaikuliah.index', compact('data'));
    }

    public function tambah()
    {
        // Mengarahkan ke file view tambah_data
        return view('nilaikuliah.tambah');
    }

    public function store(Request $request)
    {
        // Menyimpan data ke database
        DB::table('nilaikuliah')->insert([
            'NRP'        => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'SKS'        => $request->SKS,
        ]);

        // Kembali ke halaman daftar nilai
        return redirect('/nilaikuliah');
    }
}
