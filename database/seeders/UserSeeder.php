<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'firstname' => 'Mirko',
            'lastname' => 'Tachezy',
            'username' => 'mtaopp',
            'email' => 'mtaopp@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'firstname' => 'Urs',
            'lastname' => 'C',
            'username' => 'UC',
            'email' => 'uc@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
