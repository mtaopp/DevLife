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

        /* Roles */
        DB::table('users')->insert([
            'firstname' => 'Super-Admin',
            'lastname' => 'Super-Admin',
            'username' => 'Super-Admin',
            'email' => 'super-admin@super-admin.super-admin',
            'password' => Hash::make('9191'),
        ]);
        DB::table('users')->insert([
            'firstname' => 'Admin',
            'lastname' => 'Admin',
            'username' => 'Admin',
            'email' => 'admin@admin.admin',
            'password' => Hash::make('0000'),
        ]);

        DB::table('users')->insert([
            'firstname' => 'Moderator',
            'lastname' => 'Moderator',
            'username' => 'Moderator',
            'email' => 'mod@mod.mod',
            'password' => Hash::make('1111'),
        ]);

        DB::table('users')->insert([
            'firstname' => 'Editor',
            'lastname' => 'Editor',
            'username' => 'Editor',
            'email' => 'edi@edi.edi',
            'password' => Hash::make('JJJJ'),
        ]);

        DB::table('users')->insert([
            'firstname' => 'User',
            'lastname' => 'User',
            'username' => 'User',
            'email' => 'user@user.user',
            'password' => Hash::make('user'),
        ]);
    }
}
