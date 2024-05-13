@extends('layouts.adminPage.layout')

@section('title', 'Laporan Kinerja')

@section('content')
    <section id="form">
        <div class="container">
            <h1>Laporan Kinerja</h1>
            <form action="{{ route('laporan.store') }}" method="post">
                @csrf
                <label for="nama">Nama</label>
                <input name="nama" id="nama" class="form-control">
                <label for="deskripsi">Rincian Kegiatan</label>
                <textarea name="deskripsi" id="deskripsi" rows="3"></textarea>
                <label for="tanggal">Tanggal</label>
                <input type="date" name="tanggal" id="tanggal" class="form-control">
                <button type="submit" class="btn btn-primary" style="margin-top: 40px;">Submit</button>
            </form>
        </div>
    </section>
@endsection
