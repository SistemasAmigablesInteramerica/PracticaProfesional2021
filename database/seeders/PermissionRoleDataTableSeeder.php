<?php

namespace Database\Seeders;

use App\Models\PermissionRole;
use Illuminate\Database\Seeder;
<<<<<<< HEAD
=======
use App\Models\PermissionRole;
>>>>>>> fd0e90d7d81f9221682f34705a5506fc14995362
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

<<<<<<< HEAD
        $permissions =Permission::all();

=======
        $permissions = Permission::all();
>>>>>>> fd0e90d7d81f9221682f34705a5506fc14995362

        foreach($permissions AS $permission){
        PermissionRole::create(['role_id'=>'1', 'permission_id'=>$permission->id]);
        }
    }
}
