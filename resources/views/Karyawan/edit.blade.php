@extends('layouts.layout')

@section('content')
  <section id='form'>
    <div class="container">
      <h1 class="tambahh1">Edit Data Karyawan</h1>
      <p class="tambahp">Mengubah Data Karyawan Sate Balibul</p>
      <form action="/Karyawan/update/{{$karyawan->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="merk">Nama</label>
        <input id="brand" name="nama" type="text" value="{{ $karyawan->nama }}">
        <label for="merk">Umur</label>
        <input id="warna" name="umur" type="number" value="{{ $karyawan->umur }}">
        <label for="merk">Email</label>
        <input id="tipe" name="email" type="text" value="{{ $karyawan->email }}">
        <label for="merk">Alamat</label>
        <input id="tipe" name="alamat" type="text" value="{{ $karyawan->alamat }}">
        <button class="btn btn-primary" type="submit" style="margin-top: 40px;">Update</button>
      </form>
    </div>
  </section>
@endsection