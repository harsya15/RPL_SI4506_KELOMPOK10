@extends('layouts.adminPage.layout')

@section('content')
  <section id='form'>
    <div class="container">
      <h1 class="tambahh1">Edit Menu</h1>
      <p class="tambahp">Mengubah Menu makanan yang ada dalam list menu</p>
      <form action="{{ route('menu.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="nama">Nama Menu</label>
        <input id="nama" name="nama" type="text" value="{{ $menu->nama_menu }}">
        <label for="deskripsi">Deskripsi Menu</label>
        <input id="deskripsi" name="deskripsi" type="text" value="{{ $menu->deskripsi_menu }}">
        <label for="kategori">Kategori Menu</label>
        <select class="form-select mt-3" name="kategori" id="kategori" aria-label="Default select example">
            <option value="sate" {{ $menu->kategori_menu == 'sate'? 'selected' : '' }}>Sate</option>
            <option value="masakan" {{ $menu->kategori_menu == 'masakan'? 'selected' : '' }}>Masakan</option>
        </select>
        <label for="harga">Harga Menu</label>
        <input id="harga" name="harga" type="text" value="{{ $menu->harga_menu }}">
        <label for="gambar">Gambar Menu</label>
        <img class="mt-2" src="{{ url('uploads/menu').'/'.$menu->gambar_menu }}" style="max-width:200px;">
        <input name="gambar" type="file">
        <button class="btn btn-primary" type="submit" style="margin-top: 40px;">Update</button>
      </form>
    </div>
  </section>
@endsection