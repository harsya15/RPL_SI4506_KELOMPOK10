<?php

namespace App\Http\Controllers;
use App\Models\Order;
use GuzzleHttp\Client;
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
        $order->email = $request->email;
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



    public function inputNomorHp()
    {
        return view('order.input_nomor_hp');
    }

    public function checkPoints(Request $request)
{
    $request->validate([
        'nomor_hp' => 'required|string',
    ]);

    $order = Order::where('nomor_hp', $request->nomor_hp)->first();

    if (!$order) {
        return redirect()->route('order.inputNomorHp')->with('error', 'Nomor HP tidak ditemukan.');
    }

    // Hitung total poin dari semua pesanan dengan nomor hp tersebut
    $totalPoints = Order::where('nomor_hp', $request->nomor_hp)->sum('poin');

    return view('order.check_point', compact('totalPoints', 'order'));
}


    public function selectItems(Request $request)
    {
        $request->validate([
            'nomor_hp' => 'required|string',
        ]);

        $order = Order::where('nomor_hp', $request->nomor_hp)->first();

        if (!$order) {
            return redirect()->route('order.inputNomorHp')->with('error', 'Nomor HP tidak ditemukan.');
        }

        $menu = [
            ['nama' => 'Sate Khas Tegal', 'poin' => 50],
            ['nama' => 'Sate Khas Solo', 'poin' => 60],
            ['nama' => 'Sate Klathak', 'poin' => 70],
            // Tambahkan menu lainnya di sini
        ];

        return view('order.select_item', compact('order', 'menu'));
    }

    public function processClaim(Request $request)
{
    $request->validate([
        'nomor_hp' => 'required|string',
        'claimed_menus' => 'required|array', // Add validation rules for selected items if needed
    ]);

    $order = Order::where('nomor_hp', $request->nomor_hp)->first();

    if (!$order) {
        return redirect()->route('order.inputNomorHp')->with('error', 'Nomor HP tidak ditemukan.');
    }

    // Hitung total poin dari semua pesanan dengan nomor hp tersebut
    $totalPointsFromOrders = Order::where('nomor_hp', $request->nomor_hp)->sum('poin');

    // Hitung total poin yang dipilih oleh pengguna
    $totalClaimedPoints = array_sum($request->claimed_menus);

    // Periksa apakah total poin yang dipilih melebihi total poin dari pesanan
    if ($totalClaimedPoints > $totalPointsFromOrders) {
        return redirect()->route('order.inputNomorHp')->with('error', 'Poin yang dipilih melebihi total poin yang tersedia.');
    }

    // Proses klaim di sini

    // Update poin pada pesanan
    $order->poin -= $totalClaimedPoints;
    $order->save();

    return view('order.process_claim', compact('order','totalPointsFromOrders'));
}
//cekdelivery
public function cekDelivery($no)
{
    //get order by nohp
    $order = Order::where('nomor_hp', $no)->first();

    //if order not found
    if (!$order) {
        return redirect()->route('order.inputNomorHp')->with('error', 'Nomor HP tidak ditemukan.');
    }
   
    // Get the delivery status of the order
    $deliveryStatus = $order->delivery_status;


}
//updatestatus
public function updateStatus($id,$status)
{
    $order = Order::find($id);
    $order->status = $status;
    $order->save();
    //sendmail
    $this->sendmail($order->email,'Status Pesanan','Status pesanan anda '.$status);

    return redirect()->route('order.read')->with('success', 'Status pesanan berhasil diupdate!');
}
public function sendmail($to,$subject,$message){
    $client = new Client();

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
            "text" =>   $message,
            "html" => "<p>".$message."</p>"
        ]
    ]);

    // Handle response as needed
    $statusCode = $response->getStatusCode();
    $body = $response->getBody()->getContents();

    return response()->json([
        'status_code' => $statusCode,
        'response_body' => $body
    ]);
}
}
