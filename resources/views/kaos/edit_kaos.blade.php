@extends('template')
@section('title', 'Edit Data Kaos')
@section('konten')

    <a href="/kaos" class="btn btn-secondary mb-4">Kembali</a>

    @foreach($kaos as $k)
    <div class="card">
            <div class="card-header">
                Form Edit Data Kaos
            </div>

            <div class="card-body">
                <form action="/kaos/update" method="post">
                    {{ csrf_field() }}

                    <input type="hidden" name="id" value="{{ $k->kodekaos }}">

                    <div class="row mb-3">
                        <label for="nama" class="col-sm-2 col-form-label">Merk Kaos</label>
                        <div class="col-sm-10">
                            <input type="text" name="merkkaos" id="merkkaos" class="form-control" required
                                value="{{ $k->merkkaos }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="jenis" class="col-sm-2 col-form-label">Stock Kaos</label>
                        <div class="col-sm-10">
                            <input type="text" name="stockkaos" id="stockkaos" class="form-control" required
                                value="{{ $k->stockkaos }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
                        <div class="col-sm-10">
                            <select name="tersedia" id="tersedia" class="form-control" required>
                                <option value="Y" {{ $k->tersedia == 'Y' ? 'selected' : '' }}>Y</option>
                                <option value="N" {{ $k->tersedia == 'N' ? 'selected' : '' }}>N</option>
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
    @endforeach
@endsection
