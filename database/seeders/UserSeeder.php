<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'             => 'admin',
            'email'            => 'admin@admin.com',
            'password'         => bcrypt('password'),
            'role'             => 'admin',
        ]);
        $user->save();

        $user = User::create([
            'name'             => 'seller',
            'email'            => 'seller@seller.com',
            'password'         => bcrypt('password'),
            'role'             => 'seller',
        ]);
        $user->save();

        $user = user::create([
            'name'             => 'CV Wilis Furniture',
            'email'            => 'wilis@wilis.com',
            'password'         => bcrypt('password'),
            'role'             => 'seller',
        ]);
        $user->save();
    }
}
