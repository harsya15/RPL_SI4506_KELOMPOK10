@extends('layouts.landingPage.app')
@section('title', 'Informasi Klaim Poin')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="/order/input-nomor-hp" class="btn btn-danger mt-5 mb-3">kembali</a>
            <div class="card mb-5">
                <div class="card-header">Pilih Item untuk Ditukarkan</div>

                <div class="card-body">
                    <!-- Display selected items and provide option to proceed with claim -->
                    <form action="{{ route('order.processClaim') }}" method="POST">
                        @csrf
                        <input type="hidden" name="nomor_hp" value="{{ $order->nomor_hp }}">
                        <h5>Pilih Item:</h5>
                        @foreach($menus as $menu)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="claimed_menus[]"
                                    value="{{ $menu['poin'] }}">
                                <label class="form-check-label">
                                    {{ $menu['nama'] }} - {{ $menu['poin'] }} Poin
                                </label>
                            </div>
                        @endforeach
                        <button type="submit" class="btn btn-primary mt-3">Proses Tukar Poin</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
