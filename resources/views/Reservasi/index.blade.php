@extends('layouts.adminPage.layout')

@section('content')

@if (session('success'))
<p class="alert alert-success">{{ session('success') }}</p>
@endif

<div class="card card-default px-4">
    @if (count($reservasi) > 0)
    <div class="card-body mt-4 p-0 table-responsive">
        <table class="table table-bordered table-striped table-hover mb-0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pemesan</th>
                    <th>Nomor Meja</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Jumlah Orang</th>
                </tr>
            </thead>
            <?php $no = 1 ?>
            @foreach($reservasi as $reservasis)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $reservasis->atas_nama }}</td>
                <td>{{ $reservasis->no_meja }}</td>
                <td>{{ $reservasis->date }}</td>
                <td>{{ $reservasis->time }}</td>
                <td>{{ $reservasis->jumlah_orang }}</td>
            </tr>
            @endforeach
        </table>
    </div>
    @else
        <p>Tidak ada Data Reservasi</p>
    @endif
</div>
@endsection