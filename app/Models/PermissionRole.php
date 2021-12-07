<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermissionRole extends Model
{
    protected $table = 'permission_role';
    protected $fillable = ['role_id','permission_id'];
    use HasFactory;

    public function permission()
    {
        return $this->belongsTo(Permission::class, 'permission_id', 'id');
    }
    public function role()
    {
<<<<<<< HEAD:app/Models/PermissionRole.php
        return $this->belongsTo(Role::class, 'role_id', 'id');  
=======
        return $this->belongsTo(Role::class, 'role_id', 'id');
>>>>>>> refs/remotes/origin/main:app/Models/PermissionRoles.php
    }
    public static function labelSelect()
    {
        $lists = self::all();
        $result = [];

            foreach ($lists As $list){
                array_push($result, ['label'=>$list->title,'value'=>$list->id]);
            }
           return $result;
    }
}
