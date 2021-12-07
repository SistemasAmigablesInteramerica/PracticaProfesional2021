<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'permissions';
    protected $fillable = ['title','description'];
    use HasFactory;

    public function permissionRoles()
    {
<<<<<<< HEAD
        return $this->hasMany(PermissionRole::class, 'permission_id', 'id');  
=======
        return $this->hasMany(PermissionRoles::class, 'permission_id', 'id');
>>>>>>> refs/remotes/origin/main
    }
    public function roles()
    {
        return $this->belongsToMany(Role::class,'permission_roles','permission_id','role_id');
    }
    public static function LabelSelect()
    {
        $lists = self::all();
        $result = [];

            foreach ($lists As $list){
                array_push($result, ['label'=>$list->title,'value'=>$list->id]);
            }
           return $result;
    }

}
