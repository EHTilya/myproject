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
                    'name'=>'shirt1',
                    'price'=>"10000",
                    'category'=>'1',
                    'description'=>'shati la mikono mirefu',
                    'gallery'=>'images/shirt.jpg'
        
                ],
                [
                    'name'=>'shirt2',
                    'price'=>"15000",
                    'category'=>'1',
                    'description'=>'shati la mikono mirefu',
                    'gallery'=>'images/shirt2.jpg'
        
                ],
                [
                    'name'=>'shirt3',
                    'price'=>"20000",
                    'category'=>'1',
                    'description'=>'shati la mikono mirefu',
                    'gallery'=>'images/shirt3.jpg'
        
                ],
                [
                    'name'=>'shirt4',
                    'price'=>"10000",
                    'category'=>'2',
                    'description'=>'shati la mikono mifupi',
                    'gallery'=>'images/shirt4.jpg'
        
                ],
                [
                    'name'=>'shirt5',
                    'price'=>"10000",
                    'category'=>'2',
                    'description'=>'shati la mikono mifupi',
                    'gallery'=>'images/shirt5.jpg'
        
                ],
                [
                    'name'=>'short',
                    'price'=>"10000",
                    'category'=>'3',
                    'description'=>'kaptula',
                    'gallery'=>'images/short.jpg'
        
                ],
                [
                    'name'=>'suruali',
                    'price'=>"10000",
                    'category'=>'6',
                    'description'=>'suruali ',
                    'gallery'=>'images/women trouser.jpg'
        
                ],
                [
                    'name'=>'suruali',
                    'price'=>"14000",
                    'category'=>'6',
                    'description'=>'suruali ',
                    'gallery'=>'images/women trouser2.jpg'
        
                ],
                [
                    'name'=>'suruali',
                    'price'=>"18000",
                    'category'=>'6',
                    'description'=>'suruali ',
                    'gallery'=>'images/women trouser3.jpg'
        
                ],
                [
                    'name'=>'sketi',
                    'price'=>"13000",
                    'category'=>'5',
                    'description'=>'sketi ',
                    'gallery'=>'images/skirt.jpg'
        
                ],
                [
                    'name'=>'sketi2',
                    'price'=>"13000",
                    'category'=>'5',
                    'description'=>'sketi ',
                    'gallery'=>'images/skirt2.jpg'
                ],
                [
                    'name'=>'sketi3',
                    'price'=>"13000",
                    'category'=>'5',
                    'description'=>'sketi ',
                    'gallery'=>'images/skirt3.jpg'
        
                ]

            ]
         );
    }
}