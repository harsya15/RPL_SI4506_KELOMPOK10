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
        <h3 class="font-bold fs-2 text-center">Delivery</h3>
       <br>
        <a href="/order/" class="btn btn-primary">Tambah Pesanan</a>
       <br>
       <br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Nomor HP</th>
                    <th scope="col">Pesanan</th>
                    <th scope="col">Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
               <?php
               
                    echo "<tr>";
                    echo "<td>".$order->nama_pemesan."</td>";
                    echo "<td>".$order->alamat."</td>";
                    echo "<td>".$order->nomor_hp."</td>";
                    echo "<td>";
                    foreach($items as $detail){
                        echo $detail.',';
                    }
                    echo "</td>";
                    echo "<td><a href='#' class='btn btn-success'>$order->status</a></td>";
                    echo "<td><a href='/order/delete/".$order->id."/".$order->nomor_hp."' class='btn btn-danger'>Hapus</a></td>";
                  
                     echo "</tr>";
                

               ?>
            </tbody>
        </table>

      
    </div>

    <!--====== OUTLET PART ENDS ======-->

@endsection
