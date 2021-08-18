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
    // public function index()
    // {
    //     $provinces = Province::pluck('name', 'province_id');
    //     return view('ongkir', compact('provinces'));
    // }

    // public function getCities($id)
    // {
    //     $city = City::where('province_id', $id)->pluck('name', 'city_id');
    //     return response()->json($city);
    // }

    // public function check_ongkir(Request $request)
    // {
    //     $city_origin = Seller::first('idCity');
    //     $city_destination = Buyer::first('idCity');
    //     $cost = RajaOngkir::ongkosKirim([
    //         'origin'        => $city_origin, // ID kota/kabupaten asal
    //         'destination'   => $city_destination, // ID kota/kabupaten tujuan
    //         'weight'        => 500, // berat barang dalam gram
    //         'courier'       => 'jne' // kode kurir pengiriman: ['jne', 'tiki', 'pos'] untuk starter
    //     ])->get();


    //     return response()->json($cost);
    // }

    public function index()
    {
        $provinces = Province::pluck('name', 'province_id');
        $city_origin = Seller::first()->pluck('idCity');
        $city_destination = Buyer::first()->pluck('idCity');
        return view('ongkir', compact(['provinces','city_origin','city_destination']));
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getCities($id)
    {
        $city = City::where('province_id', $id)->pluck('name', 'city_id');
        return response()->json($city);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function check_ongkir(Request $request)
    {
        $cost = RajaOngkir::ongkosKirim([
            'origin'        => $request->city_origin, // ID kota/kabupaten asal
            'destination'   => $request->city_destination, // ID kota/kabupaten tujuan
            'weight'        => $request->weight, // berat barang dalam gram
            'courier'       => $request->courier // kode kurir pengiriman: ['jne', 'tiki', 'pos'] untuk starter
        ])->get();


        return response()->json($cost);
    }
}
