<?php

namespace App\Http\Controllers;

use App\Models\Cabang;
use Illuminate\Http\Request;

class CabangController extends Controller
{
    public function index()
    {
        $cabang = Cabang::all(); //ambil data
        // dd($admin);
        return view('cabang.index', compact('cabang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cabang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Cabang::create([
            'cabang' => $data['cabang'],
            'alamat' => $data['alamat'],
            'kontak' => $data['kontak'],
        ]);

        return redirect(route('cabang.index'));
    }

    public function edit($id)
    {
        // $admin = Admin::where('id', $admin->id)->get();
        // return view('Admin.index', [
        //     'title' => 'Edit Menu',
        // ]);

        $cabang = Cabang::findOrFail($id);
        return view('Cabang.edit', compact('cabang'));
    }

    public function update(Request $request, $id)
    {
        $admin = Cabang::findOrFail($id);
        $admin->update($request->all());

        return redirect('Cabang')->with('success', 'Berhasil mengubah menu dengan nama ' . $request['cabang']);
    }

    public function delete($id)
    {
        $admin = Cabang::findOrFail($id);
        $admin -> delete();
        return redirect('Cabang')->with('success', 'Berhasil menghapus menu dengan nama ' . $admin->cabang);
    }
}
