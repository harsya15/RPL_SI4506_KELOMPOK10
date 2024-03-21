<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    public function index()
    {
        $reservasi = Reservasi::all(); //ambil data
        // dd($reservasi);
        return view('reservasi.index', compact('reservasi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reservasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Reservasi::create([
            'nama_pemesan' => $data['nama_pemesan'],
            'tanggal_pemesanan' => $data['tanggal_pemesanan'],
            'jumlah_orang' => $data['jumlah_orang'],
        ]);

        return redirect(route('reservasi.index'));
    }

    public function edit($id)
    {
        // $reservasi = reservasi::where('id', $reservasi->id)->get();
        // return view('reservasi.index', [
        //     'title' => 'Edit Menu',
        // ]);

        $reservasi = Reservasi::findOrFail($id);
        return view('Reservasi.edit', compact('reservasi'));
    }

    public function update(Request $request, $id)
    {
        $reservasi = Reservasi::findOrFail($id);
        $reservasi->update($request->all());

        return redirect('Reservasi')->with('success', 'Berhasil mengubah menu dengan nama ' . $request['nama_pemesan']);
    }

    public function delete($id)
    {
        $reservasi = Reservasi::findOrFail($id);
        $reservasi -> delete();
        return redirect('Reservasi')->with('success', 'Berhasil menghapus menu dengan nama ' . $reservasi->nama_pemesan);
    }
}
