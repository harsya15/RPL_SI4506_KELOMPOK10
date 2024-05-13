@extends('layouts.landingPage.app')
@section('title', 'Informasi Klaim Poin')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="/order/input-nomor-hp" class="btn btn-danger mt-5 mb-3">kembali</a>
            <div class="card mb-5">
                <div class="card-header">Penukaran Poin Berhasil</div>

                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <!-- Display updated points -->
                    <p><strong>Nama Pemesan:</strong> {{ $order->nama_pemesan }}</p>
                    <p><strong>Total Poin Terbaru:</strong> {{ $totalPointsFromOrders }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
