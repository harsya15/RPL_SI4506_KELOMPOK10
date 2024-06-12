@extends('layouts.adminPage.layout')

@section('content')

@if (session('success'))
<p class="alert alert-success">{{ session('success') }}</p>
@endif

<div class="px-4">
    <div class="mt-4">
        @if (count($laporan) > 0)
        <table class="table table-bordered mb-0">
            <thead class="table-danger align-middle">
                <tr>
                    <th>No</th>
                    <th>Nama Karyawan</th>
                    <th>Tanggal</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody class="align-middle">
                <?php $no = 1 ?>
                @foreach($laporan as $laporans)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $laporans->nama }}</td>
                    <td>{{ $laporans->tanggal }}</td>
                    <td>{{ $laporans->deskripsi }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <p>Tidak ada laporan</p>
        @endif
    </div>
</div>

@endsection