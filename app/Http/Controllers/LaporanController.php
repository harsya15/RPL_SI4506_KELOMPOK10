<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        $laporan = Laporan::all();
        return view('karyawan.laporan.index', compact('laporan'));
    }

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

        return redirect(route('admin'))->with('success', 'Laporan berhasil terkirim!');
    }
}