<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawan = Karyawan::all(); //ambil data
        // dd($admin);
        return view('karyawan.index', compact('karyawan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('karyawan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Karyawan::create([
            'nama' => $data['nama'],
            'umur' => $data['umur'],
            'email' => $data['email'],
            'alamat' => $data['alamat'],
        ]);

        return redirect(route('karyawan.index'));
    }

    public function edit($id)
    {
        // $admin = Admin::where('id', $admin->id)->get();
        // return view('Admin.index', [
        //     'title' => 'Edit Menu',
        // ]);

        $karyawan = Karyawan::findOrFail($id);
        return view('Karyawan.edit', compact('karyawan'));
    }

    public function update(Request $request, $id)
    {
        $karyawan = Karyawan::findOrFail($id);
        $karyawan->update($request->all());

        return redirect('Karyawan')->with('success', 'Berhasil mengubah menu dengan nama ' . $request['nama']);
    }

    public function delete($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        $karyawan -> delete();
        return redirect('Karyawan')->with('success', 'Berhasil menghapus menu dengan nama ' . $karyawan->nama);
    }
}
