@extends('layouts.layout')

@section('content')
  <section id='form'>
    <div class="container">
      <h1 class="tambahh1">Tambah Rating Customer</h1>
      <p class="tambahp">Tambah Rating Customer Sate Balibul</p>
      <form action="{{ route('rating.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="merk">Nama</label>
        <input id="brand" name="nama" type="text" required placeholder="Masukkan Nama Anda">
        <label for="merk">Rating</label>
        <input id="warna" name="rating" type="number" min="1" max="5" required placeholder="Berikan Rating">
        <label for="merk">Komentar</label>
        <input id="tipe" name="komentar" type="text" required placeholder="Masukkan Komentar">
        <button class="btn btn-primary" type="submit" style="margin-top: 40px;">Tambah</button>
      </form>
    </div>
  </section>
@endsection
