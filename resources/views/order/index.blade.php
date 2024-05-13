@extends('layouts.landingPage.app')
@section('title', 'Sate Balibul')
@section('content')

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <style>
        .scroll-horizontal {
            max-width: 100%;
            overflow-x: auto;
            white-space: nowrap;
        }
        .card-text {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
    </style>

    <!--====== ABOUT PART START ======-->

    <div class="container shadow-lg my-lg-5 rounded-5 p-4" style="min-height: 100vh; width : 100vw">
        <h3 class="font-bold fs-2 text-center">Silahkan Isi Data Pemesanan</h3>
        <form action="{{ route('submitOrder') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Pemesan</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat">
            </div>
            <div class="mb-3">
                <label for="nomor_hp" class="form-label">Nomor HP</label>
                <input type="text" class="form-control" id="nomor_hp" name="nomor_hp">
            </div>

            <!-- Menu Cards for selecting items to order -->
            <div class="container">
                <div class="row scroll-horizontal">
                    <!-- Sate Khas Tegal -->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Sate Khas Tegal</h5>
                                <p class="card-text">Campuran daging kambing balibul dan lemak yang dibakar tanpa
                                    menggunakan bumbu. Disajikan dengan kecap khas Tegal dan bahan pelengkap lainnya</p>
                                <input type="checkbox" name="pesanan[]" value="Sate Khas Tegal">
                            </div>
                        </div>
                    </div>
                    <!-- Sate Khas Solo -->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Sate Khas Solo</h5>
                                <p class="card-text">Campuran daging kambing balibul dan lemak yang dibakar dengan celupan
                                    bumbu kecap. Disajikan dengan kecap khas Solo dengan cita rasa manis dan gurih dan bahan
                                    pelengkap lainnya</p>
                                <input type="checkbox" name="pesanan[]" value="Sate Khas Solo">
                            </div>
                        </div>
                    </div>
                    <!-- Sate Klathak -->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Sate Klathak</h5>
                                <p class="card-text">Campuran daging kambing balibul dan lemak yang dibakar dengan celupan
                                    bumbu gurih. Disajikan dengan kuah gulai dan bahan pelengkap lainnya</p>
                                <input type="checkbox" name="pesanan[]" value="Sate Klathak">
                            </div>
                        </div>
                    </div>
                    <!-- Sate Buntel -->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Sate Buntel</h5>
                                <p class="card-text">Deskripsi Sate Buntel</p>
                                <input type="checkbox" name="pesanan[]" value="Sate Buntel">
                            </div>
                        </div>
                    </div>
                    <!-- Sate Kepala Kambing -->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Sate Kepala Kambing</h5>
                                <p class="card-text">Deskripsi Sate Kepala Kambing</p>
                                <input type="checkbox" name="pesanan[]" value="Sate Kepala Kambing">
                            </div>
                        </div>
                    </div>
                    <!-- Sate Ayam -->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Sate Ayam</h5>
                                <p class="card-text">Sate ayam yang disajikan dengan saus kacang khas Sate Balibul Bang Ali
                                </p>
                                <input type="checkbox" name="pesanan[]" value="Sate Ayam">
                            </div>
                        </div>
                    </div>


                </div>
    </div>
    <div class="text-center mt-4">
        <button type="submit" class="btn btn-success  mx-auto">Submit Pesanan</button>
    </div>
    </form>
    </div>

    <!--====== OUTLET PART ENDS ======-->

@endsection
