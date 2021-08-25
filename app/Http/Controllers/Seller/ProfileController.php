<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\City;
use App\Models\Item;
use App\Models\Province;
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
        $province = Province::get();
        $city = City::get();
        return view('seller.profile.index', compact(['user', 'seller', 'item', 'category', 'province', 'city']));
    }

    public function edit(Request $request)
    {
        $user = auth()->user();
        $seller = Seller::where('idUser', $user->id)->first();
        $seller->update([
            'name'                  => $request->name,
            'owner'                 => $request->owner,
            'description'           => $request->description,
            'number'                => $request->number,
            'address'               => $request->address,
            'idProvince'            => $request->province,
            'idCity'                => $request->city,
            'facebook'              => $request->facebook,
            'twitter'               => $request->twitter,
            'instagram'             => $request->instagram,
        ]);
        return redirect()->to('profile');
    }
}
