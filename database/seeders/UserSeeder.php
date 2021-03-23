<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Muhammad Rizwan',
                'email' => 'mrizwan95459@gmail.com',
                'password' => Hash::make('12345'),
            ],
            [
                'name' => 'Numan',
                'email' => '6862314@gmail.com',
                'password' => Hash::make('12345'),
            ],
        ]);
    }
}
