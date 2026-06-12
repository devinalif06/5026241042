@extends('template')
@section('title', 'Data Kaos')
@section('konten')

    <a href="/kaos/tambah" class="btn btn-primary">Tambah Kaos Baru</a>
    <br />
    <br />
    <p>Cari Data Kaos :</p>
    <form action="/kaos/cari" method="GET" class="from-inline">
        <div class="form-group">
            <input type="text" name="cari" placeholder="Cari Kaos .." class="form-control">
            <input type="submit" value="CARI">
        </div>
    </form>
    <br />
    <table class="table table-striped table-hover ">
        <tr>
            <th>Kode Kaos</th>
            <th>Merk Kaos</th>
            <th>Stock</th>
            <th>Tersedia</th>
            <th>Opsi</th>
        </tr>
        @foreach ($kaos as $k)
            <tr>
               <td>{{ $k->kodekaos }}</td>
                <td>{{ $k->merkkaos }}</td>
                <td>{{ $k->stockkaos }}</td>
                <td>{{ $k->tersedia }}</td>
                <td>
                    <a href="/kaos/edit/{{ $k->kodekaos }}"class="btn btn-warning">Edit</a>

                    <a href="/kaos/hapus/{{ $k->kodekaos }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $kaos->links() }}
@endsection
