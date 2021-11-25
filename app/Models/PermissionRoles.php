<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermissionRoles extends Model
{
    protected $table = 'permission_roles';
    protected $fillable = ['role_id','permission_id'];
    use HasFactory;

    public function permission()
    {
        return $this->belongsTo(Permission::class, 'permission_id', 'id');  
    }
    public function Roles()
    {
        return $this->belongsTo(Roles::class, 'role_id', 'id');  
    }
}
