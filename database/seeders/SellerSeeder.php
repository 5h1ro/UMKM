<?php

namespace Database\Seeders;

use App\Models\Seller;
use Illuminate\Database\Seeder;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = Seller::create([
            'name'             => 'CV Wilis Furniture',
            'description'      => 'Menjual produk resmi Logitech Indonesia.',
            'address'          => 'Jl. Jatijajar no 18, Kota Madiun',
            'city'             => 'Kota Madiun',
            'idUser'           => '3',
        ]);
        $user->save();
    }
}
