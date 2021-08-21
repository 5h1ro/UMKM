<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\City;
use App\Models\Province;
use App\Models\Seller;
use Illuminate\Http\Request;
use Kavist\RajaOngkir\Facades\RajaOngkir;

class CheckOngkirController extends Controller
{
    public function index()
    {
        $provinces = Province::pluck('name', 'province_id');
        $city_origin = Seller::first()->pluck('idCity');
        $city_destination = Buyer::first()->pluck('idCity');
        return view('ongkir', compact(['provinces','city_origin','city_destination']));
    }

    public function getCities($id)
    {
        $city = City::where('province_id', $id)->pluck('name', 'city_id');
        return response()->json($city);
    }

    public function check_ongkir(Request $request)
    {
        $cost = RajaOngkir::ongkosKirim([
            'origin'        => $request->city_origin,
            'destination'   => $request->city_destination,
            'weight'        => $request->weight,
            'courier'       => $request->courier
        ])->get();


        return response()->json($cost);
    }
}
