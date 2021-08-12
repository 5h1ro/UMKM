<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $furniture = Item::where('idCategory', '4')->orderBy('sold', 'asc')->get();
        return view('guest.index', compact('furniture'));
    }
}
