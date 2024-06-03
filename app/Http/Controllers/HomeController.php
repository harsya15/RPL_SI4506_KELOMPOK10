<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Keranjang;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $menu = Menu::all();
        $cart = Keranjang::all();
        $cart_count = Keranjang::count();
        return view('landingPage', compact('menu', 'cart', 'cart_count'));
    }
}
