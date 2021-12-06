<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $fillable = ['name'];
    use HasFactory;

    public  function userRoles()
    {
        return $this->hasMany(UserRole::class, 'role_id', 'id');
    }
    public function users()
    {
        return $this->belongsToMany(User::class,'user_role', 'role_id', 'user_id');
    }
    public function permissions()
    {
        return $this->belongsToMany(Permission::class,'permission_role', 'role_id', 'permission_id');
    }
}
