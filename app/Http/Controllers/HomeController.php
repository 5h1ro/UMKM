<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $role = Auth::user()->role;
        if ($role == "admin") {
            return redirect()->to('admin');
        } elseif ($role == "seller") {
            return redirect()->to('seller');
        } elseif ($role == "buyer") {
            return redirect()->to('dashboard');
        } else {
            return redirect()->to('logout');
        }
    }
}
