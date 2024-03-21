@extends('layouts.layout')

@section('content')
  <section id='form'>
    <div class="container">
      <h1 class="tambahh1">Edit Menu</h1>
      <p class="tambahp">Mengubah Menu makanan yang ada dalam list menu</p>
      <form action="/Admin/update/{{$admin->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="merk">Nama Menu</label>
        <input id="brand" name="nama_menu" type="text" value="{{ $admin->nama_menu }}">
        <label for="merk">Deskripsi Menu</label>
        <input id="warna" name="deskripsi_menu" type="text" value="{{ $admin->deskripsi_menu }}">
        <label for="merk">Tipe Menu</label>
        <input id="tipe" name="tipe_menu" type="text" value="{{ $admin->tipe_menu }}">
        <button class="btn btn-primary" type="submit" style="margin-top: 40px;">Update</button>
      </form>
    </div>
  </section>
@endsection