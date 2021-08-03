<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SellerController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('seller.index', compact(['user']));
    }
}
