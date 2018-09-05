<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        // creating an user
        $password = \Hash::make(env('ADMIN_PASSWORD'));
        $user = User::create([
                    'first_name'   => 'Main',
                    'last_name'    => 'Admin',
                    'email'        => null,
                    'user_name'    => env('ADMIN_LOGIN'),
                    'password'     => $password,
                    'assign_group' => 1,
                    'primary_dpt'  => 1,
                    'active'       => 1,
                    'role'         => 'admin',
        ]);
        // checking if the user have been created
    }
}
