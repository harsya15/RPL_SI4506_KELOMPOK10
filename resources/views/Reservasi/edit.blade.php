@extends('layouts.layout')

@section('content')
  <section id='form'>
    <div class="container">
      <h1 class="tambahh1">Edit Reservasi</h1>
      <p class="tambahp">Mengubah Reservasi Customer Sate Balibul</p>
      <form action="/Reservasi/update/{{$reservasi->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="merk">Nama Pemesan</label>
        <input id="brand" name="nama_pemesan" type="text" value="{{ $reservasi->nama_pemesan }}">
        <label for="merk">Tanggal Reservasi</label>
        <input id="warna" name="tanggal_reservasi" type="date" value="{{ $reservasi->tanggal_reservasi }}">
        <label for="merk">Jumlah Orang</label>
        <input id="tipe" name="jumlah_orang" type="number" min="1" value="{{ $reservasi->jumlah_orang }}">
        <button class="btn btn-primary" type="submit" style="margin-top: 40px;">Update</button>
      </form>
    </div>
  </section>
@endsection