<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Item;
use App\Models\Seller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $seller = Seller::where('idUser', $user->id)->first();
        $item = Item::where('idSeller', $seller->id)->get();
        $category = Category::get();
        return view('seller.profile.index', compact(['user', 'seller', 'item', 'category']));
    }
}
