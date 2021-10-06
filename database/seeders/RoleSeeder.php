<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Role::create(['name' => 'Super-Admin']);
        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'Moderator']);
        Role::create(['name' => 'Editor']);
        Role::create(['name' => 'User']);


        // Super Admins
        $user = User::find(1);
        $user->assignRole('Super-Admin');
        
        
        $user = User::find(2);


        $user->assignRole('Super-Admin');
        $user = User::find(3);
        $user->assignRole('Super-Admin');
        $user = User::find(4);
        $user->assignRole('Super-Admin');

        // Admins
        $user = User::find(5);
        $user->assignRole('Admin');

        // Moderator
        $user = User::find(6);
        $user->assignRole('Admin');

        // Editor
        $user = User::find(7);
        $user->assignRole('Editor');

        // User
        $user = User::find(8);
        $user->assignRole('User');


    }


}
