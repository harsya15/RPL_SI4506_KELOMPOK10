@extends('layouts.layout')

@if (session('success'))
    <p class="alert alert-success">{{ session('success') }}</p>
@endif

@section('content')

<a href="/Karyawan/create" type="button" class="btn btn-primary mt-4 mb-2 ms-4">Tambah</a>
<div class="card card-default px-4">
    @if (count($karyawan) > 0)
    <div class="card-body mt-4 p-0 table-responsive">
        <table class="table table-bordered table-striped table-hover mb-0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Karyawan</th>
                    <th>Umur Karyawan</th>
                    <th>Email Karyawan</th>
                    <th>Alamat Karyawan</th>
                </tr>
            </thead>
            <?php $no = 1 ?>
            @foreach($karyawan as $karyawans)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $karyawans->nama }}</td>
                <td>{{ $karyawans->umur }}</td>
                <td>{{ $karyawans->email }}</td>
                <td>{{ $karyawans->alamat }}</td>
                <td class="d-flex flex-col gap-3 justify-items-center">
                    <a class="btn btn-warning" href="{{ route('karyawan.edit', $karyawans->id) }}">Ubah</a>
                    <form method="post" action="{{ route('karyawan.delete', $karyawans->id) }}" style="display: inline-block;">
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
        <p>Tidak ada Data Karyawan</p>
    @endif
</div>
@endsection