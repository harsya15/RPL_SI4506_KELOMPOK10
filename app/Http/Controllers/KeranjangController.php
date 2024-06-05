<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Menu;
use App\Models\pesanan;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KeranjangController extends Controller
{
    public function index()
    {
        $keranjang = Keranjang::all();
        $menu = Menu::all();
        $keranjang_count = Keranjang::count();
        return view('keranjang.index',compact('keranjang','menu', 'keranjang', 'keranjang_count'));
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

    // Controller buat request pesanan
    public function simpan(Request $request)
    {
        $data = $request->all();
        $pemesan = Auth::user()->name;
        $email = Auth::user()->email;
        $menu = Keranjang::all();

        pesanan::create([
            'nama_pemesan' => $pemesan,
            'email' => $email,
            'list_menu' => json_encode($menu),
            'catatan' => $data['catatan'],
        ]);

        return redirect(route('landingPage'));
    }

    public function lihat()
    {
        $pesanan = pesanan::all();
        return view('Pesanan.index', compact('pesanan'));
    }

    public function insert(){

        $email = Auth::user()->email;
        //send mail
        $this->sendmail($email,'Pesanan','Pesanan sedang diproses');
        // return redirect with alert
        return redirect('/pesanan')->with('alert', 'Pesanan customer sudah diupdate');
    }

    public function sendmail($to, $subject, $message){
        $client = new Client();
    
        try {
            $response = $client->post('https://api.mailersend.com/v1/email', [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Authorization' => 'Bearer mlsn.7cbdd0020e01e14b572276b7af46bf3c99a45e9c548636cd7fae6023a13fa2c6'
                ],
                'json' => [
                    "from" => [
                        "email" => "AdminBalibul@trial-k68zxl2ekoklj905.mlsender.net"
                    ],
                    "to" => [
                        [
                            "email" => $to
                        ]
                    ],
                    "subject" => $subject,
                    "text" => $message,
                    "html" => "<p>".$message."</p>"
                ]
            ]);
    
            $statusCode = $response->getStatusCode();
            $body = $response->getBody()->getContents();
    
            return response()->json([
                'status_code' => $statusCode,
                'response_body' => $body
            ]);
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $statusCode = $response->getStatusCode();
            $body = $response->getBody()->getContents();
    
            // Handle specific 422 error
            if ($statusCode == 422) {
                $errorData = json_decode($body, true);
                $errorMessage = $errorData['message'];
                return response()->json([
                    'status_code' => $statusCode,
                    'error_message' => $errorMessage,
                    'detailed_errors' => $errorData['errors']
                ], 422);
            }
    
            return response()->json([
                'status_code' => $statusCode,
                'error_message' => 'An error occurred while sending the email.',
                'response_body' => $body
            ], $statusCode);
        }
    }

    public function updateStatus($id, $status)
    {
        $pesanan = pesanan::find($id);
        $pesanan->status = $status;
        $pesanan->save();
        //sendmail
        $email = $pesanan->email;
        $this->sendmail($email,'Status Pesanan','Status pesanan anda '.$status);

        return redirect(route('pesanan.index'))->with('success', 'Status pesanan berhasil diupdate!');
    }

}
