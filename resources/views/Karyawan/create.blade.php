@extends('layouts.layout')

@section('content')
  <section id='form'>
    <div class="container">
      <h1 class="tambahh1">Tambah Data Karyawan</h1>
      <p class="tambahp">Tambah Data Karyawan Sate Balibul</p>
      <form action="{{ route('karyawan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="merk">Nama</label>
        <input id="brand" name="nama" type="text" required placeholder="Masukkan Nama Karyawan">
        <label for="merk">Umur</label>
        <input id="warna" name="umur" type="number" required placeholder="Masukkan Umur Karyawan">
        <label for="merk">Email</label>
        <input id="tipe" name="email" type="text" required placeholder="Masukkan Email Karyawan">
        <label for="merk">alamat</label>
        <input id="tipe" name="alamat" type="text" required placeholder="Masukkan Alamat Karyawan">
        <button class="btn btn-primary" type="submit" style="margin-top: 40px;">Tambah</button>
      </form>
    </div>
  </section>
@endsection
