<?php

namespace Database\Seeders;

use App\Models\PermissionRole;
use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionRoleDataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $permissions = Permission::all();

        foreach($permissions AS $permission){
        PermissionRole::create(['role_id'=>'1', 'permission_id'=>$permission->id]);
        }
    }
}
