@extends('layouts.layout')

@section('content')
  <section id='form'>
    <div class="container">
      <h1 class="tambahh1">Tambah Reservasi</h1>
      <p class="tambahp">Tambah Reservasi Customer Sate Balibul</p>
      <form action="{{ route('reservasi.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="merk">Nama Pemesan</label>
        <input id="brand" name="nama_pemesan" type="text" required placeholder="Masukkan Nama Pemesan">
        <label for="merk">Tanggal Pemesanan</label>
        <input id="warna" name="tanggal_pemesanan" type="date" required placeholder="Masukkan Tanggal Pemesanan">
        <label for="merk">Jumlah Orang</label>
        <input id="tipe" name="jumlah_orang" type="number" min="1" required placeholder="Masukkan Jumlah Orang">
        <button class="btn btn-primary" type="submit" style="margin-top: 40px;">Tambah</button>
      </form>
    </div>
  </section>
@endsection
