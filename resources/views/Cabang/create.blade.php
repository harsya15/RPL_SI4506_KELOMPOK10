@extends('layouts.layout')

@section('content')
  <section id='form'>
    <div class="container">
      <h1 class="tambahh1">Tambah Cabang</h1>
      <p class="tambahp">Tambah Cabang UMKM Sate Balibul</p>
      <form action="{{ route('cabang.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="merk">Cabang</label>
        <input id="brand" name="cabang" type="text" required placeholder="Masukkan Nama Cabang">
        <label for="merk">Alamat Cabang</label>
        <input id="warna" name="alamat" type="text" required placeholder="Masukkan Alamat Cabang">
        <label for="merk">Kontak</label>
        <input id="tipe" name="kontak" type="text" required placeholder="Masukkan Nomor Kontak">
        <button class="btn btn-primary" type="submit" style="margin-top: 40px;">Tambah</button>
      </form>
    </div>
  </section>
@endsection
