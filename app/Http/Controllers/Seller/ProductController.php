<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Item;
use App\Models\Seller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
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
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('img/product'), $imageName);

        Item::create([
            'image'                => $imageName,
            'idSeller'             => $seller->id
        ]);
    }

    // public function fileDestroy(Request $request)
    // {
    //     $filename =  $request->get('filename');
    //     ImageUpload::where('filename', $filename)->delete();
    //     $path=public_path().'/images/'.$filename;
    //     if (file_exists($path)) {
    //         unlink($path);
    //     }
    //     return $filename;
    // }
}
