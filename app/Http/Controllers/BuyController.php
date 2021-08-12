<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BuyController extends Controller
{
    public function index()
    {
        return view('guest.buy.index');
    }

    public function checkout()
    {
        return view('guest.buy.checkout');
    }

    public function cart()
    {
        return view('guest.buy.cart');
    }
}
