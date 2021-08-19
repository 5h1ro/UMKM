<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\Item;
use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BuyController extends Controller
{
    public function index($id)
    {
        $item = Item::where('id', $id)->first();
        return view('guest.buy.index', compact('item'));
    }

    public function checkout($id)
    {
        $buyer = Buyer::first();
        $item = Item::where('id', $id)->first();
        $city_origin = Seller::first()->pluck('idCity');
        $city_destination = Buyer::first()->pluck('idCity');
        $weight = $item->weight;
        $price = $item->price;
        return view('guest.buy.checkout', compact(['item','city_origin','city_destination','buyer','weight','price']));
    }

    public function cart()
    {
        return view('guest.buy.cart');
    }
}
