<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('user')->insert([
        	'name' => Str::random(10),
            'identity' => Str::random(10),
            'birth_place' => Str::random(10),
            'birth_date' => '1970-01-01',
            'gender' => 'P',
            'no_handphone' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'username' => 'vendor',
            'password' => Hash::make('vendor'),
            'status' => 'admin'
        ]);
    }
}
