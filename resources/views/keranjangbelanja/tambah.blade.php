@extends('template')
@section('title', 'Keranjang Belanja')
@section('konten')

    <h2>Tambah Barang</h2>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('keranjang.store') }}" method="POST" onsubmit="return validasiForm()">
        @csrf

        <p>
            <label>Kode Barang</label><br>
            <input type="text" name="KodeBarang" id="KodeBarang" value="{{ old('KodeBarang') }}">
        </p>

        <p>
            <label>Jumlah</label><br>
            <input type="text" name="Jumlah" id="Jumlah" value="{{ old('Jumlah') }}">
        </p>

        <p>
            <label>Harga</label><br>
            <input type="text" name="Harga" id="Harga" value="{{ old('Harga') }}">
        </p>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('keranjang.index') }}" class="btn btn-secondary">Kembali</a>
    </form>

    <script>
        function validasiForm() {
            let kodeBarang = document.getElementById('KodeBarang').value.trim();
            let jumlah = document.getElementById('Jumlah').value.trim();
            let harga = document.getElementById('Harga').value.trim();

            if (kodeBarang === '') {
                Swal.fire({ title: "Kesalahan Input Data!", text: "Kode Barang wajib diisi", icon: "error" });
                return false;
            }
            if (jumlah === '') {
                Swal.fire({ title: "Kesalahan Input Data!", text: "Jumlah wajib diisi", icon: "error" });
                return false;
            }
            if (isNaN(jumlah) || parseInt(jumlah) <= 0) {
                Swal.fire({ title: "Kesalahan Input Data!", text: "Jumlah harus berupa angka positif", icon: "error" });
                return false;
            }
            if (harga === '') {
                Swal.fire({ title: "Kesalahan Input Data!", text: "Harga wajib diisi", icon: "error" });
                return false;
            }
            if (isNaN(harga) || parseInt(harga) <= 0) {
                Swal.fire({ title: "Kesalahan Input Data!", text: "Harga harus berupa angka positif", icon: "error" });
                return false;
            }
            return true;
        }
    </script>

@endsection
