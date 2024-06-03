@extends('layouts.adminPage.layout')

@section('content')
  <section id='form'>
    <div class="container">
      <h1 class="tambahh1">Edit Reservasi</h1>
      <p class="tambahp">Mengubah Reservasi Customer Sate Balibul</p>
      <form action="/Reservasi/update/{{$reservasi->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="merk">Nama Pemesan</label>
        <input id="brand" name="atas_nama" type="text" value="{{ $reservasi->atas_nama }}">
        <label for="merk">Nomor Meja</label>
        <input id="warna" name="no_meja" type="text" value="{{ $reservasi->no_meja }}">
        <label for="merk">Tanggal</label>
        <input id="tipe" name="date" type="date" value="{{ $reservasi->date }}">
        <label for="merk">Waktu</label>
        <input id="tipe" name="time" type="time" value="{{ $reservasi->time }}">
        <label for="merk">Jumlah Orang</label>
        <input id="tipe" name="jumlah_orang" type="text" value="{{ $reservasi->jumlah_orang }}">
        <button class="btn btn-primary" type="submit" style="margin-top: 40px;">Update</button>
      </form>
    </div>
  </section>
@endsection