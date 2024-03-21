@extends('layouts.layout')

@if (session('success'))
    <p class="alert alert-success">{{ session('success') }}</p>
@endif

@section('content')

<a href="/Reservasi/create" type="button" class="btn btn-primary mt-4 mb-2 ms-4">Tambah</a>
<div class="card card-default px-4">
    @if (count($reservasi) > 0)
    <div class="card-body mt-4 p-0 table-responsive">
        <table class="table table-bordered table-striped table-hover mb-0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pemesan</th>
                    <th>Tanggal Pemesanan</th>
                    <th>Jumlah Orang</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php $no = 1 ?>
            @foreach($reservasi as $reservasis)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $reservasis->nama_pemesan }}</td>
                <td>{{ $reservasis->tanggal_reservasi }}</td>
                <td>{{ $reservasis->jumlah_orang }}</td>
                <td class="d-flex flex-col gap-3 justify-items-center">
                    <a class="btn btn-warning" href="{{ route('reservasi.edit', $reservasis->id) }}">Ubah</a>
                    <form method="post" action="{{ route('reservasi.delete', $reservasis->id) }}" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Hapus Data?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    @else
        <p>Tidak ada Data Reservasi</p>
    @endif
</div>
@endsection