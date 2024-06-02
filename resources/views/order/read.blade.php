@extends('layouts.adminPage.layout')

@if (session('success'))
    <p class="alert alert-success">{{ session('success') }}</p>
@endif

@section('content')


<div class="px-4">
    <div class="mt-4">
        @if (count($orders) > 0)
        <table class="table table-bordered mb-0">
            <thead class="table-danger align-middle">
                <tr>
                    <th>No</th>
                    <th>Nama Pemesan</th>
                    <th>Nomor HP</th>
                    <th>Alamat</th>
                    <th>Status</th>
                    
                </tr>
            </thead>
            <tbody class="align-middle">
                <?php $no = 1 ?>
                @foreach($orders as $orderss)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td style="width : 250px">{{ $orderss->nama_pemesan }}</td>
                    <td>{{ $orderss->nomor_hp }}</td>
                    <td>{{ $orderss->alamat }}</td>
                    <td>
                        <?php
                            if($orderss->status == 'sedang diproses'){
                                echo "<a href='#' id='proses' class='btn btn-warning'>$orderss->status</a>";
                            }else if($orderss->status == 'dalam perjalanan'){
                                echo "<a href='#' id='perjalanan' class='btn btn-success'>$orderss->status</a>";
                            }else{
                                echo "<a href='#' id='selesai' class='btn btn-danger'>$orderss->status</a>";
                            }
                        ?>

                    </td>
                    
                  
                </tr>
                @endforeach
            </tbody>
        </table>
        <script>
          //javascript
            var proses = document.getElementById('proses');
            var perjalanan = document.getElementById('perjalanan');
            var selesai = document.getElementById('selesai');
            //if
            if(proses){
                proses.addEventListener('click', function(){
                    var ask = window.confirm("Orderan akan di ubah ke di kirim");
    if (ask) {
        window.alert("Berhasil Mengubah Status");

        window.location.href = "/order/updatestatus/{{$orderss->id}}/dalam perjalanan";

    }
                });
            }
            if(perjalanan){
                perjalanan.addEventListener('click', function(){
                    var ask = window.confirm("Orderan akan di ubah ke di selesai");
    if (ask) {
        window.alert("Berhasil Mengubah Status");

        window.location.href = "/order/updatestatus/{{$orderss->id}}/selesai";

    }
                });
            }
            if(selesai){
                selesai.addEventListener('click', function(){
                    alert('Pesanan sudah selesai');
                });
            }
        </script>
    </div>
</div>
@else
<p>Tidak ada makanan dan minum di orders ini.</p>
@endif
@endsection