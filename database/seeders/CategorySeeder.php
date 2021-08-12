<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = Category::create([
            'name'             => 'Fashion Pria',
        ]);
        $user->save();
        $user = Category::create([
            'name'             => 'Fashion Wanita',
        ]);
        $user->save();
        $user = Category::create([
            'name'             => 'Fashion Bayi & anak',
        ]);
        $user->save();
        $user = Category::create([
            'name'             => 'Perabotan',
        ]);
        $user->save();
        $user = Category::create([
            'name'             => 'Makanan',
        ]);
        $user->save();
        $user = Category::create([
            'name'             => 'Otomotif',
        ]);
        $user->save();
        $user = Category::create([
            'name'             => 'Pernikahan',
        ]);
        $user->save();
    }
}
