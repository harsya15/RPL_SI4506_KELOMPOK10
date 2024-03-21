<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
        return view('landingPage');
    }

    public function send(){
        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'subject' => 'required|min:3',
            'message' => 'required|min:5',
        ]);
        Mail::to('konsumenbalibul@gmail.com')->send(new ContactUs($data));

        return redirect()->back()->with('success','Ulasan anda telah terkirim, Terimakasih !');
    }
}
