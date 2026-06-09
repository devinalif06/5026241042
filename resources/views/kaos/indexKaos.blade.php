@extends('template')
@section('title', 'Data Kaos')
@section('konten')

    <h2>Data Kaos</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="/kaos/cari" method="GET" style="margin-bottom: 15px;">
        <input type="text" name="cari" placeholder="Cari merk kaos..." value="{{ request()->get('cari') }}" style="padding: 5px; width: 250px;">
        <button type="submit" class="btn btn-secondary">Cari</button>
    </form>

    <a href="/kaos/tambah" class="btn btn-primary">Tambah Kaos Baru</a>

    <br><br>

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Kaos</th>
            <th>Merk Kaos</th>
            <th>Stok Kaos</th>
            <th>Tersedia</th>
            <th>Aksi</th>
        </tr>

        @forelse($kaos as $row)
            <tr>
                <td>{{ $row->kodekaos }}</td>
                <td>{{ $row->merkkaos }}</td>
                <td>{{ $row->stockkaos }}</td>
                <td>
                    @if($row->tersedia == 'Y')
                        <span class="badge bg-success">Tersedia (Y)</span>
                    @else
                        <span class="badge bg-danger">Habis (N)</span>
                    @endif
                </td>
                <td>
                    <a href="/kaos/edit/{{ $row->kodekaos }}" class="btn btn-warning">Edit</a>

                    <form action="/kaos/hapus/{{ $row->kodekaos }}" method="GET" style="display:inline;"
                          onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                        @csrf
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Belum ada data kaos.</td>
            </tr>
        @endforelse
    </table>

    <div class="d-flex justify-content-center mt-3">
        {{ $kaos->links() }}
    </div>
@endsection
