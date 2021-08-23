<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = Item::create([
            'name'             => 'Ukir kayu jati motif bulgaria 60 cm',
            'price'            => '100000',
            'condition'        => 'Baru',
            'weight'           => '500',
            'idCategory'       => '4',
            'detail'           => 'Jati murni',
            'stock'            => '2',
            'sold'             => '0',
            'idSeller'         => '1',
        ]);
        $user->save();

        $user = Item::create([
            'name'             => 'Ukir kayu jati motif Jepara 80 cm',
            'price'            => '250000',
            'condition'        => 'Baru',
            'weight'           => '800',
            'idCategory'       => '4',
            'detail'           => 'Jati murni dengan motif jepara',
            'stock'            => '100',
            'sold'             => '0',
            'idSeller'         => '1',
        ]);
        $user->save();
    }
}
