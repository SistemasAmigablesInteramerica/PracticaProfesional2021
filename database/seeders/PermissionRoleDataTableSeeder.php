<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PermissionsRole;
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

        $permission=Permission::all();
        $permission->id();

        foreach($permissions AS $permission){
        PermissionRole::create(['role_id'=>'1', 'permission_id'=>$permission]);
        }
    }
}
