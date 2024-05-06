<?php

namespace App\Http\Controllers;
use App\Models\ReservasiModel;

use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    //make insert data to order_meja
    public function insert(Request $request){
        $no_meja = $request->no_meja;
        $atas_nama = $request->atas_nama;
        $date = $request->date;
        $time = $request->time;
        $jumlah_orang = $request->jumlah;

        $data = array(
            'no_meja' => $no_meja,
            'atas_nama' => $atas_nama,
            'date' => $date,
            'time' => $time,
            'jumlah_orang' => $jumlah_orang
        );

        ReservasiModel::create($data);
        return redirect('/#reservasi');
    }
}

