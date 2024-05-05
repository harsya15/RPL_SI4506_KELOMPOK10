@extends('layouts.landingPage.app')
@section('title', 'Sate Balibul')
@section('content')

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--====== ABOUT PART START ======-->

    <div class="container shadow-lg my-lg-5 rounded-5 p-4" style="height: 100vh; width : 100vw">
        <h1 class="fs-3 text-center">Pesanan berhasil dipesan!</h1>
        <p class="text-center">Silahkan menunggu beberapa saat selagi pesanan anda diproses</p>
        @if (session()->has('order'))
            <?php $order = session('order'); ?>
            <div class="card-body">
                <h4 class="mb-3">Detail Pesanan:</h4>
                @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @elseif(session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                <div class="row mb-3">
                    <div class="col-md-3"><strong>Nama Pemesan:</strong></div>
                    <div class="col-md-9">: {{ $order->nama_pemesan }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-3"><strong>Alamat</strong></div>
                    <div class="col-md-9">: {{ $order->alamat }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-3"><strong>Nomor Handphone</strong></div>
                    <div class="col-md-9">: {{ $order->nomor_hp }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-3"><strong>Jumlah Poin:</strong></div>
                    <div class="col-md-9">: {{ $order->poin }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-3"><strong>Pesanan</strong></div>
                    <div class="col-md-9">
                        <ul>
                            @foreach (json_decode($order->pesanan) as $item)
                                <li>- {{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endif
        <div class="text-center container">
            <a href="/" class="btn btn-danger">Kembali</a>
        </div>
    </div>



@endsection
