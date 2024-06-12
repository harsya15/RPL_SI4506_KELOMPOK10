@extends('layouts.adminPage.layout')

@section('content')

@if (session('success'))
    <p class="alert alert-success">{{ session('success') }}</p>
@endif

<div class="px-4">
    <div class="mt-4">
        @if (count($pesanan) > 0)
        <table class="table table-bordered mb-0">
            <thead class="table-danger align-middle">
                <tr>
                    <th>No</th>
                    <th>Nama Pemesan</th>
                    <th>Email Pemesan</th>
                    <th>Alamat</th>
                    <th>List Menu</th>
                    <th>Total</th>
                    <th>Catatan</th>
                    <th>status</th>
                </tr>
            </thead>
            <tbody class="align-middle">
                <?php $no = 1 ?>
                @foreach($pesanan as $pesanans)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $pesanans->nama_pemesan }}</td>
                    <td>{{ $pesanans->email }}</td>
                    <td>{{ $pesanans->alamat }}</td>
                    <td>{{ $pesanans->list_menu }}</td>
                    <td>{{ $pesanans->total }}</td>
                    <td>{{ $pesanans->catatan }}</td>
                    <td>
                        <?php
                            if($pesanans->status == 'Belum Diterima'){
                                echo "<a href='#' id='proses' class='btn btn-primary'>$pesanans->status</a>";
                            }else if($pesanans->status == 'Sedang diproses'){
                                echo "<a href='#' id='perjalanan' class='btn btn-danger'>$pesanans->status</a>";
                            }else if($pesanans->status == 'Dalam perjalanan'){
                                echo "<a href='#' id='perjalanan' class='btn btn-warning'>$pesanans->status</a>";
                            }else{
                                echo "<a href='#' id='selesai' class='btn btn-success'>$pesanans->status</a>";
                            }
                        ?>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <script>
            //javascript
            var belum = document.getElementById('belum');
            var proses = document.getElementById('proses');
            var perjalanan = document.getElementById('perjalanan');
            var selesai = document.getElementById('selesai');
            //if
            if(belum){
                proses.addEventListener('click', function(){
                    var ask = window.confirm("Pesanan akan di ubah ke diproses");
                    if (ask) {
                        window.alert("Berhasil Mengubah Status");
                        window.location.href = "/pesanan/updatestatus/{{$pesanans->id}}/Sedang diproses";
                    }
                });
            }
            if(proses){
                proses.addEventListener('click', function(){
                    var ask = window.confirm("Pesanan akan di ubah ke di kirim");
                    if (ask) {
                        window.alert("Berhasil Mengubah Status");
                        window.location.href = "/pesanan/updatestatus/{{$pesanans->id}}/Dalam perjalanan";
                    }
                });
            }
            if(perjalanan){
                perjalanan.addEventListener('click', function(){
                    var ask = window.confirm("Pesanan akan di ubah ke di selesai");
                    if (ask) {
                        window.alert("Berhasil Mengubah Status");
                        window.location.href = "/pesanan/updatestatus/{{$pesanans->id}}/Selesai";
                    }
                });
            }
            if(selesai){
                selesai.addEventListener('click', function(){
                    alert('Pesanan sudah selesai');
                });
            }
        </script>
        @else
        <p>Tidak ada pesanan</p>
        @endif
    </div>
</div>

@endsection