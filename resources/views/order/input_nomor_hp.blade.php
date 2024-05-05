@extends('layouts.landingPage.app')
@section('title', 'Informasi Klaim Poin')
@section('content')

    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-8">
            <a href="/order" class="btn btn-danger mt-5 mb-3">kembali</a>

                <div class="card mb-5">
                    <div class="card-header">Input Nomor HP</div>

                    <div class="card-body">
                        @if (session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif

                        <form action="{{ route('order.checkPoints') }}" GET="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nomor_hp">Nomor HP:</label>
                                <input type="text" class="form-control" id="nomor_hp" name="nomor_hp" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Cek Poin</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
