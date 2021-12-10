<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionDataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = ['edit_permissionroles','create_roles','create_permissions'];

        foreach ($permissions AS $permission){
            Permission::create(['title'=>$permission,'description'=>$permission]);
        }
    }
}
