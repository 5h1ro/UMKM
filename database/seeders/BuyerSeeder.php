<?php

namespace Database\Seeders;

use App\Models\Buyer;
use Illuminate\Database\Seeder;

class BuyerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = Buyer::create([
            'name'             => 'Nurhakiki',
            'number'           => '6285806651560',
            'address'          => 'Jl. Janti no 18',
            'idProvince'       => '5',
            'idCity'           => '39',
            'idUser'           => '4',
        ]);
        $user->save();
    }
}
