@extends('layouts.landingPage.app')
@section('title', 'Klaim Poin')
@section('content')

<div class="container my-6">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="/order/input-nomor-hp" class="btn btn-danger mt-5 mb-3">kembali</a>
            <div class="card mb-5">
                <div class="card-header">Informasi Poin</div>

                <div class="card-body">
                    @if(session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                    <p><strong>Nama Pemesan:</strong> {{ $order->nama_pemesan }}</p>
                    <p><strong>Total Poin:</strong> {{ $totalPoints }}</p>

                    <!-- Add option to select items -->
                    <form action="{{ route('order.selectItems') }}" method="POST">
                        @csrf
                        <input type="hidden" name="nomor_hp" value="{{ $order->nomor_hp }}">
                        <!-- Add form fields here -->
                        <button type="submit" class="btn btn-primary mt-4">Pilih Menu untuk Ditukarkan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
