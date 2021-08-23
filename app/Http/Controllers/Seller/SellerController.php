<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Item;
use App\Models\Seller;
use Illuminate\Support\Facades\DB;

class SellerController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $seller = Seller::where('idUser', $user->id)->first();
        $item = Item::where('idSeller', $seller->id)->get();
        $category = Category::get();
        return view('seller.index', compact(['user', 'seller', 'item', 'category']));
    }
}
