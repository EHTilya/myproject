<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('persons')->insert(
        [
            [
                'fname'=>'paulo',
                'lname'=>'Tilya',
                'email'=>'paulo@gmail.com',
                'role'=>'customer',
                'phone'=>1234567,
                'password'=>Hash::make('12345')
            ],
            [
                'fname'=>'mary',
                'lname'=>'Tilya',
                'email'=>'mary@gmail.com',
                'role'=>'customer',
                'phone'=>1234567,
                'password'=>Hash::make('12345')
            ]
        ]
    );
    }
}
