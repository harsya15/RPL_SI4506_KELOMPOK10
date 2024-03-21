@auth
    @extends('layouts.layout')
    @section('content')
        <!-- Jumbotron -->
        <section id="home" class="d-flex" style="height: 100vh">
            <div style="width: 30%; background-color: #dc354685">
                <ul class="list-group">
                    <li class="list-group-item px-4 bg-transparent" style="border: none"><a style="text-decoration: none" class="text-black fw-bold" href="/Admin">List Menu</a></li>
                    <li class="list-group-item px-4 bg-transparent" style="border: none"><a style="text-decoration: none" class="text-black fw-bold" href="/Rating">Daftar Rating Customer</a></li>
                    <li class="list-group-item px-4 bg-transparent" style="border: none"><a style="text-decoration: none" class="text-black fw-bold" href="/Karyawan">Daftar Karyawan</a></li>
                    <li class="list-group-item px-4 bg-transparent" style="border: none"><a style="text-decoration: none" class="text-black fw-bold" href="/Cabang">Daftar Cabang</a></li>
                    <li class="list-group-item px-4 bg-transparent" style="border: none"><a style="text-decoration: none" class="text-black fw-bold" href="/Reservasi">Daftar Reservasi</a></li>
                </ul>
            </div>
            <div class="container">
                <div class="d-flex wrap justify-content-between align-items-center gap-5" style="margin-top: 10em; padding-left:2em">
                    <div style="width: 1000px">
                        <h1>Welcome To<br> Admin Page</h1>
                        <p class="mt-3">Sate Balibul Admin page is a most successful admin page<br>in this universe</p>
                        <div class="d-flex justify-content-lg-start mt-2">
                        </div>
                    </div>
                    <div class="d-flex flex-column justify-content-between" style="">
                        <img src='logobalibul.png' class='card-img-top' alt='showroom_ead'>
                    </div>
                </div>
            </div>
        </section>
        <!-- Jumbotron End -->
    @endsection
@endauth