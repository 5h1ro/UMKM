<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Seller;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index($id)
    {
        $seller = Seller::where('id', $id)->first();
        $items  = Item::where('idSeller', $id)->get();
        return view('guest.store.index', compact(['seller','items']));
    }
}
