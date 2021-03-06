<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionDataTableSeeder::class);
        $this->call(RoleDataTableSeeder::class);
        $this->call(UserDataTableSeeder::class);
        $this->call(PermissionRoleDataTableSeeder::class);
        $this->call(UserRoleDataTableSeeder::class);
    }
}
