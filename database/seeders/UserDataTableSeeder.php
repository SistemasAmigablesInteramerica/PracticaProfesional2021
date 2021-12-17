<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;


class UserDataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        User::create(['name' => 'SuperAdministrador', 'email' => 'fullpass@gmail.com' ,  'password' => hash::make('12345678'), 'card' => '12345678', 'role_id' => '1']);
    }

}
