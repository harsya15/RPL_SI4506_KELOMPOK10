<?php

namespace App\View\Components;

use App\Models\Keranjang;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class Header extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        if (Auth::check()) {
            $cart_count = Keranjang::where('user_id', auth()->id())->count();
        } else {
            $cart_count = 0;
        }
        return view('components.header', [
            'cart_count' => $cart_count
        ]);
    }
}
