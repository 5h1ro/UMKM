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
            'owner'            => 'Nurhakiki Romadhony Ikhwandany',
            'number'           => '+62 85806651560',
            'address'          => 'Jl. Jatijajar no 18, Kota Madiun',
            'image'            => 'animasi.png',
            'facebook'         => '',
            'twitter'          => '',
            'instagram'        => 'https://www.instagram.com/dany_sgloverz/',
            'idProvince'       => '11',
            'idCity'           => '139',
            'idUser'           => '3',
        ]);
        $user->save();
    }
}
