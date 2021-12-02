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

    public function permission()
    {
        return $this->belongstoMany(Permission::class, 'permission_id', 'id');
    }
}
