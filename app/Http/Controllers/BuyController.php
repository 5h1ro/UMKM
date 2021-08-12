<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BuyController extends Controller
{
    public function index($id)
    {
        $item = Item::where('id', $id)->first();
        return view('guest.buy.index', compact('item'));
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
