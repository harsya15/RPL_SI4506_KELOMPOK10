<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    public function index()
    {
        $items = Keranjang::where('user_id', auth()->id())->latest()->get();
        return view('keranjang.index', [
            'title' => 'Keranjang',
            'items' => $items
        ]);
    }

    public function update()
    {
        request()->validate([
            'id' => ['required'],
            'jumlah' => ['required']
        ]);

        $item = Keranjang::findOrFail(request('id'));
        $harga = $item->list_menu->harga_menu;
        $item->update([
            'harga' => $harga,
            'jumlah' => request('jumlah'),
            'total_harga' => $harga * request('jumlah')
        ]);

        return response()->json([
            'status' => true
        ]);
    }
    public function destroy($id)
    {
        $item = Keranjang::findOrFail($id);
        $item->delete();
        return redirect()->back();
    }
}


