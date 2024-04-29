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

        $data = array(
            'no_meja' => $no_meja,
            'atas_nama' => $atas_nama,
        );

        ReservasiModel::create($data);
        return redirect('/#reservasi');
    }
}
