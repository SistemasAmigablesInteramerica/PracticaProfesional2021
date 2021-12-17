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
        $permissions = ['create_attendance','view_attendance','create_grade','edit_grade', 'view_grade', 'create_gradesubjectstudent',
        'edit_gradesubjectstudent','view_gradesubjectstudent','create_permissions','edit_permissions','view_permissions','create_permissionroles','edit_permissionroles',
        'view_permissionroles','create_roles','edit_roles','view_roles','edit_student','edit_relatives','view_student','view_relatives','create_subject','edit_subject',
        'view_subjects','create_subjectgrade','edit_subjectgrade','view_subjectgrade','create_subjecteacher','edit_subjecteacher','view_subjects','view_employment',
        'create_teacher','edit_teacher','view_teacher', 'edit_user','view_user','create_userroles','edit_userroles','view_userroles', 'create_student', 'create_subjectteacher', 'view_subjectteacher'];

        foreach ($permissions AS $permission){
            Permission::create(['title'=>$permission,'description'=>$permission]);
        }
    }
}
