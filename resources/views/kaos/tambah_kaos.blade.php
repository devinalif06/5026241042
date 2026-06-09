@extends('template')
@section('title', 'Tambah Data Kaos')
@section('konten')

    <a href="/kaos" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Tambah Data Kaos
        </div>
        <div class="card-body">
            <form action="/kaos/store" method="post" onsubmit="return validasiForm()">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="merkkaos" class="col-sm-2 col-form-label">Merk Kaos</label>
                    <div class="col-sm-10">
                        <input type="text" name="merkkaos" id="merkkaos" class="form-control"
                               maxlength="30" placeholder="Maksimal 30 karakter. Contoh: Erigo">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="stockkaos" class="col-sm-2 col-form-label">Stok Kaos</label>
                    <div class="col-sm-10">
                        <input type="number" name="stockkaos" id="stockkaos" class="form-control"
                               placeholder="Contoh: 50">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
                    <div class="col-sm-10">
                        <select name="tersedia" id="tersedia" class="form-select">
                            <option value="" disabled selected>-- Pilih Status Ketersediaan --</option>
                            <option value="Y">Tersedia (Y)</option>
                            <option value="N">Habis (N)</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </div>

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
