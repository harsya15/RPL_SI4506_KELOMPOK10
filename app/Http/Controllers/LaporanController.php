<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function create() 
    {
        return view('karyawan.laporan.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Laporan::create([
            'nama' => $data['nama'],
            'tanggal' => $data['tanggal'],
            'deskripsi' => $data['deskripsi']
        ]);

        return redirect(route('admin'));
    }
}