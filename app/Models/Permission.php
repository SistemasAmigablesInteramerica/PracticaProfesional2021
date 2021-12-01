<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'permission';
    protected $fillable = ['title','description'];
    use HasFactory;

    public function permissionRoles()
    {
        return $this->hasMany(PermissionRoles::class, 'permission_id', 'id');  
    }
    public function roles()
    {
        return $this->belongsToMany(Roles::class,'permission_roles','permission_id');
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
