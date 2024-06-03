<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Menu;
use App\Models\Keranjang;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $menu = Menu::all();
        $keranjang_count = Keranjang::count(); 
        return view('landingPage', compact('menu', 'keranjang_count'));
    }
}
