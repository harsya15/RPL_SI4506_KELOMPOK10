@extends('layouts.layout')

@section('content')
  <section id='form'>
    <div class="container">
      <h1 class="tambahh1">Edit Cabang</h1>
      <p class="tambahp">Mengubah Cabang UMKM Sate Balibul</p>
      <form action="/Cabang/update/{{$cabang->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="merk">Cabang</label>
        <input id="brand" name="cabang" type="text" value="{{ $cabang->cabang }}">
        <label for="merk">Alamat Cabang</label>
        <input id="warna" name="alamat" type="text" value="{{ $cabang->alamat }}">
        <label for="merk">Kontak</label>
        <input id="tipe" name="kontak" type="text" value="{{ $cabang->kontak }}">
        <button class="btn btn-primary" type="submit" style="margin-top: 40px;">Update</button>
      </form>
    </div>
  </section>
@endsection