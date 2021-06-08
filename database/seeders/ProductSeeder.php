<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            [   
                [
                    'name'=>'LG Frigge',
                    'price'=>"1000",
                    'category'=>'Fridge',
                    'description'=>'A fridge with more features',
                    'gallery'=>'public/images/LG fridge2.jpg'
        
                ],
                [
                    'name'=>'Panasonic Fridge',
                    'price'=>"2000",
                    'category'=>'Fridge',
                    'description'=>'A smart fridge with auto power saving',
                    'gallery'=>'public/images/LG fridge.jpg'
        
                ]
            ]
         );
    }
}