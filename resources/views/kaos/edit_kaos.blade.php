@extends('template')
@section('title', 'Edit Data Kaos')
@section('konten')

    <h2>Edit Kaos</h2>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    @foreach($kaos as $k)
    <form action="/kaos/update" method="POST" onsubmit="return validasiForm()">
        @csrf
        <input type="hidden" name="id" value="{{ $k->kodekaos }}">

        <p>
            <label>Kode Kaos (Auto Number)</label><br>
            <input type="text" value="{{ $k->kodekaos }}" disabled style="background-color: #eee;">
        </p>

        <p>
            <label>Merk Kaos</label><br>
            <input type="text" name="merkkaos" id="merkkaos" maxlength="30" value="{{ old('merkkaos', $k->merkkaos) }}">
        </p>

        <p>
            <label>Stok Kaos</label><br>
            <input type="number" name="stockkaos" id="stockkaos" value="{{ old('stockkaos', $k->stockkaos) }}">
        </p>

        <p>
            <label>Status Ketersediaan</label><br>
            <select name="tersedia" id="tersedia" style="width: 180px; padding: 3px;">
                <option value="Y" {{ old('tersedia', $k->tersedia) == 'Y' ? 'selected' : '' }}>Tersedia (Y)</option>
                <option value="N" {{ old('tersedia', $k->tersedia) == 'N' ? 'selected' : '' }}>Habis (N)</option>
            </select>
        </p>

        <button type="submit" class="btn btn-warning">Update</button>
        <a href="/kaos" class="btn btn-secondary">Kembali</a>
    </form>
    @endforeach

    <script>
        function validasiForm() {
            let merk = document.getElementById('merkkaos').value.trim();
            let stok = document.getElementById('stockkaos').value.trim();
            let tersedia = document.getElementById('tersedia').value;

            if (merk === '') {
                Swal.fire({ title: "Kesalahan Input Data!", text: "Merk kaos wajib diisi", icon: "error" });
                return false;
            }
            if (merk.length > 30) {
                Swal.fire({ title: "Kesalahan Input Data!", text: "Merk kaos maksimal 30 karakter", icon: "error" });
                return false;
            }
            if (stok === '') {
                Swal.fire({ title: "Kesalahan Input Data!", text: "Stok kaos wajib diisi", icon: "error" });
                return false;
            }
            if (tersedia === '') {
                Swal.fire({ title: "Kesalahan Input Data!", text: "Status ketersediaan wajib diisi", icon: "error" });
                return false;
            }
            return true;
        }
    </script>
@endsection
