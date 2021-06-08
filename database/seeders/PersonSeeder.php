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
        DB::table('persons')->insert([
            'fname'=>'emma',
            'lname'=>'Tilya',
            'email'=>'emma@gmail.com',
            'username'=>'emma Tilya',
            'phone'=>1234567,
            'password'=>Hash::make('12345')
        ]);
    }
}
