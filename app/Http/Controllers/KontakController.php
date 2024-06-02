<?php

namespace App\Http\Controllers;
use App\Models\Kontak;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class KontakController extends Controller
{
     // make insert data to mengakses_kontak
     public function insert(Request $request)
     {
         // Validasi input
         $validatedData = $request->validate([
             'nama' => 'required|string|max:255',
             'subjek' => 'required|string|max:255',
             'pesan' => 'required|string',
         ]);
 
         // Tangkap input dari request
         $nama = $validatedData['nama'];
         $subjek = $validatedData['subjek'];
         $pesan = $validatedData['pesan'];
 
         // Buat instance dari model MengaksesKontak dan simpan data
         $kontak = new MengaksesKontak();
         $kontak->nama = $nama;
         $kontak->subjek = $subjek;
         $kontak->pesan = $pesan;
         $kontak->save();
 
         // Mengirim email
         $this->sendmail($nama, $subjek, $pesan);
 
         // Redirect atau beri respon sesuai kebutuhan
         return redirect()->back()->with('success', 'Data berhasil disimpan dan email telah dikirim');
     }
 
     public function sendmail($to, $subject, $message)
     {
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
                 "text" => $message,
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
 