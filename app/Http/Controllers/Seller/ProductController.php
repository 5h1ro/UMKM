<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Item;
use App\Models\Seller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $seller = Seller::where('idUser', $user->id)->first();
        $item = Item::where('idSeller', $seller->id)->get();
        $category = Category::get();
        return view('items.index', compact(['user', 'seller', 'item', 'category']));
    }

    public function create(Request $request)
    {
        $user = auth()->user();
        $seller = Seller::where('idUser', $user->id)->first();
        $Item = Item::where('idSeller', $seller->id)->orderBy('id', 'DESC')->first();
        $Item->update([
            'name'                  => $request->name,
            'price'                 => $request->price,
            'condition'             => $request->condition,
            'weight'                => $request->weight,
            'idCategory'            => $request->category,
            'detail'                => $request->detail,
            'stock'                 => $request->stock,
            'sold'                  => 0
        ]);
        return redirect()->to('seller');
    }
    public function fileStore(Request $request)
    {
        $user = auth()->user();
        $seller = Seller::where('idUser', $user->id)->first();
        $image = $request->file('file');

        $imageName = $image->getClientOriginalName();
        $image->move(public_path('img/product'), $imageName);

        Item::create([
            'image'                => $imageName,
            'idSeller'             => $seller->id
        ]);
    }

    public function fileDestroy(Request $request)
    {
        $imageName = $request->filename;
        $path=public_path().'/img/product/'.$imageName;
        if (file_exists($path)) {
            File::delete($path);
        }
        $Item = Item::where('image', $imageName)->first();
        $Item->update([
            'image'                 => "",
        ]);
    }

    public function edit(Request $request)
    {
        $Item = Item::where('id', $request->id)->first();
        $Item->update([
            'name'                  => $request->name,
            'price'                 => $request->price,
            'detail'                => $request->detail,
            'condition'             => $request->condition,
            'weight'                => $request->weight,
            'idCategory'            => $request->category,
            'stock'                 => $request->stock,
            'sold'                  => 0
        ]);
        return redirect()->to('seller');
    }

    public function delete($id)
    {
        Item::where('id', $id)->delete();
        return redirect()->to('seller');
    }
}
