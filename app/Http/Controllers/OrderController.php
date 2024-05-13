<?php

namespace App\Http\Controllers;
use App\Models\Order;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
       return view("order.index");
    }

    public function submitOrder(Request $request)
    {
        // Simpan pesanan ke database
        $order = new Order();
        $order->nama_pemesan = $request->nama;
        $order->nomor_hp = $request->nomor_hp;
        $order->alamat = $request->alamat;
        $order->pesanan = json_encode($request->pesanan);
        $jumlahPesanan = count($request->pesanan);
        $poin = $jumlahPesanan * 10;
        $order->poin = $poin;
        $order->save();


        // Simpan data pesanan dalam sesi
        session(['order' => $order]);

        return redirect()->route('orderSuccess')->with('success', 'Pesanan berhasil disimpan!');
    }



public function showSuccessPage(Request $request)
{
    $order = $request->session()->get('order');
    // dd($order);
    return view('order.orderSuccess', compact('order'));
}
}