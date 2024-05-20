@extends('layouts.layout')

@section('content')
  <section id='form'>
    <div class="container">
      <h1 class="tambahh1">Edit Rating Customer</h1>
      <p class="tambahp">Mengubah Rating Customer Sate Balibul</p>
      <form action="/Rating/update/{{$rating->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="merk">Nama</label>
        <input id="brand" name="nama" type="text" value="{{ $rating->nama }}">
        <label for="merk">Rating</label>
        <input id="warna" name="rating" type="text" value="{{ $rating->rating }}">
        <label for="merk">Komentar</label>
        <input id="tipe" name="komentar" type="text" value="{{ $rating->komentar }}">
        <button class="btn btn-primary" type="submit" style="margin-top: 40px;">Update</button>
      </form>
    </div>
  </section>
@endsection