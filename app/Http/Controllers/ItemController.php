<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Session;

class ItemController extends Controller
{
    public function save(Request $request)
    {
        // Validate the incoming request data
        // $validatedData = $request->validate([
        //     'name' => 'required|string|max:255',
        //     'description' => 'nullable|string',
        //     'price' => 'required|numeric',
        // ]);

        // Create a new item using the validated data
        $item = new Item();
        $item->id_menu      = $request['id_menu'];
        $item->nama_menu    = $request['nama_menu'];
        $item->bank         = $request['id_bank'];
        $item->save();

        Session::put('email_nama_menu', $request['nama_menu']);
        Session::put('email_bank', $request['id_bank']);
        Session::put('email_harga', $request['harga']);

        $details = [
            'title' => 'Mail from Admin Restoran',
            'body' => 'Your reservation have been Placed Successfully'
        ];
       
        // \Mail::to(Auth::user()->email)->send(new \App\Mail\ReserveMail($details));
        
        $data["title"] = "From Admin Restoran";
        $data["body"] = "Your reservation have been Placed Successfully";


        Mail::send('mails.Reserve', $data, function($message)use($data) {
            $message->to('admin@gmail.com')
                    ->subject($data["title"]);
        });
        // Return a response, for example, redirect to a specific route with a success message
        return redirect()->route('index')->with('success', 'Saved successfully!');
    }
}
