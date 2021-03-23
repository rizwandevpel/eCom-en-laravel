<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
            'name' => 'LG mobile',
            'price' => '200$',
            'category' => 'mobile',
            'description' => 'A smartphone with 4gb and much more features',
            'gallery' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQuRtce8beqlFaCKz8X3TQLPW224O2Jum_GXhma1h5x5ncqnvnyqrbGOOu8OtvWBAsDqdI&usqp=CAU',
           
            ],
            [
                'name' => 'LG mobile',
                'price' => '200$',
                'category' => 'mobile',
                'description' => 'A smartphone with 4gb and much more features',
                'gallery' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQuRtce8beqlFaCKz8X3TQLPW224O2Jum_GXhma1h5x5ncqnvnyqrbGOOu8OtvWBAsDqdI&usqp=CAU',
               
                ],
                [
                    'name' => 'LG mobile',
                    'price' => '200$',
                    'category' => 'mobile',
                    'description' => 'A smartphone with 4gb and much more features',
                    'gallery' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQuRtce8beqlFaCKz8X3TQLPW224O2Jum_GXhma1h5x5ncqnvnyqrbGOOu8OtvWBAsDqdI&usqp=CAU',
                   
                    ],
                    [
                        'name' => 'LG mobile',
                        'price' => '200$',
                        'category' => 'mobile',
                        'description' => 'A smartphone with 4gb and much more features',
                        'gallery' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQuRtce8beqlFaCKz8X3TQLPW224O2Jum_GXhma1h5x5ncqnvnyqrbGOOu8OtvWBAsDqdI&usqp=CAU',
                       
                        ],
        ]);
    }
}



