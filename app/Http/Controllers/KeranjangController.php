<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Menu;
use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    public function index()
    {
        $keranjang = Keranjang::all();
        $total = $keranjang->sum('subtotal');
        $keranjang_count = Keranjang::count();
        return view('keranjang.index',compact('keranjang', 'keranjang_count'));
    }

    
    public function store($id)
    {
        $menu = Menu::findOrFail($id);

        // Check if menu already exists in keranjang
        $keranjang = Keranjang::where('nama_menu', $menu->nama_menu)->first();

        if ($keranjang){
            // If menu already exists, increment jumlah by 1
            $keranjang->jumlah += 1;
            $keranjang->subtotal = $keranjang->harga_menu * $keranjang->jumlah;
            $keranjang->save();
        } else {
            // If menu doesn't exist, create a new keranjang entry
            Keranjang::create([
                'nama_menu' => $menu['nama_menu'],
                'deskripsi_menu'  => $menu['deskripsi_menu'],
                'harga_menu' => $menu['harga_menu'] ,
                'gambar_menu'  => $menu['gambar_menu'],
                'jumlah' => 1,
                'subtotal' => $menu['harga_menu'],
            ]);
        }

        return redirect(route('landingPage'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|exists:keranjang,id',
            'quantity' => 'required|integer|min=1'
        ]);

        $keranjang = Keranjang::find($request->id);
        $keranjang->jumlah = $request->quantity;
        $keranjang->save();

        $newTotal = $keranjang->jumlah * $keranjang->harga_menu;

        return response()->json(['newTotal' => $newTotal]);
    }


    public function delete($id)
    {
        $keranjang = Keranjang::findOrFail($id);
        $keranjang->delete();
        return redirect(route('keranjang.index'));
    }
}
