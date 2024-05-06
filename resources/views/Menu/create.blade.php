@extends('layouts.adminPage.layout')

@section('content')
  <section id='form'>
    <div class="container">
      <h1 class="add">Tambah Menu</h1>
      <p class="tambahp">Tambah Menu makanan ke dalam list menu</p>
      <form action="{{ route('Menu.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="nama">Nama Menu</label>
        <input name="nama" type="text" required placeholder="Masukkan Nama Menu">
        <label for="deskripsi">Deskripsi Menu</label>
        <input name="deskripsi" type="text" maxlength="105" required placeholder="Masukkan Deskripsi Menu">
        <label for="kategori">Kategori Menu</label>
        <select name="kategori" required>
          <option selected>Pilip Opsi</option>
          <option value="sate">Sate</option>
          <option value="masakan">Masakan</option>
        </select>
        <label for="harga">Harga Menu</label>
        <input name="harga" type="text" required placeholder="Masukkan Harga Menu">
        <label for="gambar">Gambar Menu</label>
        <input name="gambar" type="file">
        <button class="btn btn-primary" type="submit" style="margin-top: 40px;">Tambah</button>
      </form>
    </div> 
  </section>
@endsection
